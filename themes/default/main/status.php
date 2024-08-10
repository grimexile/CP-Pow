<?php if (!defined('FLUX_ROOT')) exit; 
$title = Flux::message('ServerStatusTitle');
$cache = FLUX_DATA_DIR.'/tmp/ServerStatus.cache';

if (file_exists($cache) && (time() - filemtime($cache)) < (Flux::config('ServerStatusCache') * 60)) {
	$serverStatus = unserialize(file_get_contents($cache));
}
else {
	$serverStatus = array();
	foreach (Flux::$loginAthenaGroupRegistry as $groupName => $loginAthenaGroup) {
		if (!array_key_exists($groupName, $serverStatus)) {
			$serverStatus[$groupName] = array();
		}

		$loginServerUp = $loginAthenaGroup->loginServer->isUp();

		foreach ($loginAthenaGroup->athenaServers as $athenaServer) {
			$serverName = $athenaServer->serverName;

			$sql = "SELECT COUNT(char_id) AS players_online FROM {$athenaServer->charMapDatabase}.char WHERE online > 0";
			$sth = $loginAthenaGroup->connection->getStatement($sql);
			$sth->execute();
			$res = $sth->fetch();

			$sqlCharacters = "SELECT count(*) as total FROM `char` LIMIT 0, 1";
			$sthCharacters = $loginAthenaGroup->connection->getStatement($sqlCharacters);
			$sthCharacters->execute();
			$totalCharactersRes = $sthCharacters->fetch();
			$totalCharacters = intval($totalCharactersRes ? $totalCharactersRes->total : 0);

			$sqlTotalPlayers = "SELECT count(*) as total FROM `login` LIMIT 0, 1";
			$sthTotalPlayers = $loginAthenaGroup->connection->getStatement($sqlTotalPlayers);
			$sthTotalPlayers->execute();
			$totalPlayersRes = $sthTotalPlayers->fetch();
			$totalPlayers = intval($totalPlayersRes ? $totalPlayersRes->total : 0);

			$sqlGuilds = "SELECT count(*) as total FROM `guild` LIMIT 0, 1";
			$sthGuilds = $loginAthenaGroup->connection->getStatement($sqlGuilds);
			$sthGuilds->execute();
			$totalGuildsRes = $sthGuilds->fetch();
			$totalGuilds = intval($totalGuildsRes ? $totalGuildsRes->total : 0);

			$serverStatus[$groupName][$serverName] = array(
				'loginServerUp'     => $loginServerUp,
				'charServerUp'      => $athenaServer->charServer->isUp(),
				'mapServerUp'       => $athenaServer->mapServer->isUp(),
				'playersOnline'     => intval($res ? $res->players_online : 0),
				'totalPlayers'      => $totalPlayers,
				'totalCharacters'   => $totalCharacters,
				'totalGuilds'  		=> $totalGuilds,
			);
		}
	}
	
	$fp = fopen($cache, 'w');
	if (is_resource($fp)) {
		fwrite($fp, serialize($serverStatus));
		fclose($fp);
	}
}
?> 

<?php 
	$online = '<span class="status_Online">Online</span>';
	$offline = '<span class="status_Offline">Offline</span>';
	foreach ($serverStatus as $privServerName => $gameServers):
		foreach ($gameServers as $serverName => $gameServer):
		if ($gameServer['loginServerUp']) { $loginserver = 1; } else { $loginserver = 0; } 
		if ($gameServer['charServerUp']) { $charserver = 1; } else { $charserver = 0; } 
		if ($gameServer['mapServerUp']) { $mapserver = 1; } else { $mapserver = 0; } 
		$online_player = $gameServer['playersOnline'];
		$totalPlayers = $gameServer['totalPlayers'];
		$totalCharacters = $gameServer['totalCharacters'];
		$totalGuilds = $gameServer['totalGuilds'];
		endforeach; 
	endforeach; 
?>

<?php 
	$sqlpeak = "SELECT `server_peak`.`ID`, `server_peak`.`OnlinePeak` FROM `server_peak` WHERE `server_peak`.`ID` = '1' ORDER BY ID DESC LIMIT 1";
	$sthpeak = $server->connection->getStatement($sqlpeak);
	$sthpeak->execute();
	$ServerPeak = $sthpeak->fetchAll();
?>

<?php 
	$sqlbosskill = "SELECT SUM(points) as total FROM `mvp`";
	$sthbosskill = $server->connection->getStatement($sqlbosskill);
	$sthbosskill->execute();
	$ServerBossKill = $sthbosskill->fetchAll();
?>