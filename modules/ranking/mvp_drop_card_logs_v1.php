<div class="extension" ></div>
<!--
===== rAthena Web Flux Modification ========================
= MVP Drop Card Logs
= Count drop card only
===== By: ==================================================
= BeWan
https://rathena.org/board/profile/62232-bewan/
===== Current Version: =====================================
= 1.0
============================================================
-->

<?php if (!defined('FLUX_ROOT')) exit; 
$title    = 'MVP Card Logs';
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

			//First Batch
			$sqlPhreeoni = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4121'";
			$sthPhreeoni = $loginAthenaGroup->connection->getStatement($sqlPhreeoni);
			$sthPhreeoni->execute();
			$totalPhreeoniRes = $sthPhreeoni->fetch();
			$totalPhreeoni = intval($totalPhreeoniRes ? $totalPhreeoniRes->total : 0);

			$sqlEddga = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4123'";
			$sthEddga = $loginAthenaGroup->connection->getStatement($sqlEddga);
			$sthEddga->execute();
			$totalEddgaRes = $sthEddga->fetch();
			$totalEddga = intval($totalEddgaRes ? $totalEddgaRes->total : 0);

			$sqlGTB = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4128'";
			$sthGTB = $loginAthenaGroup->connection->getStatement($sqlGTB);
			$sthGTB->execute();
			$totalGTBRes = $sthGTB->fetch();
			$totalGTB = intval($totalGTBRes ? $totalGTBRes->total : 0);

			$sqlMoonlight = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4131'";
			$sthMoonlight = $loginAthenaGroup->connection->getStatement($sqlMoonlight);
			$sthMoonlight->execute();
			$totalMoonlightRes = $sthMoonlight->fetch();
			$totalMoonlight = intval($totalMoonlightRes ? $totalMoonlightRes->total : 0);

			$sqlMistress = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4132'";
			$sthMistress = $loginAthenaGroup->connection->getStatement($sqlMistress);
			$sthMistress->execute();
			$totalMistressRes = $sthMistress->fetch();
			$totalMistress = intval($totalMistressRes ? $totalMistressRes->total : 0);

			$sqlDracula = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4134'";
			$sthDracula = $loginAthenaGroup->connection->getStatement($sqlDracula);
			$sthDracula->execute();
			$totalDraculaRes = $sthDracula->fetch();
			$totalDracula = intval($totalDraculaRes ? $totalDraculaRes->total : 0);
			//First Batch

			//Second Batch
			$sqlOrcLord = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4135'";
			$sthOrcLord = $loginAthenaGroup->connection->getStatement($sqlOrcLord);
			$sthOrcLord->execute();
			$totalOrcLordRes = $sthOrcLord->fetch();
			$totalOrcLord = intval($totalOrcLordRes ? $totalOrcLordRes->total : 0);

			$sqlDrake = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4137'";
			$sthDrake = $loginAthenaGroup->connection->getStatement($sqlDrake);
			$sthDrake->execute();
			$totalDrakeRes = $sthDrake->fetch();
			$totalDrake = intval($totalDrakeRes ? $totalDrakeRes->total : 0);

			$sqlDoppel = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4142'";
			$sthDoppel = $loginAthenaGroup->connection->getStatement($sqlDoppel);
			$sthDoppel->execute();
			$totalDoppelRes = $sthDoppel->fetch();
			$totalDoppel = intval($totalDoppelRes ? $totalDoppelRes->total : 0);

			$sqlOrcHero = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4143'";
			$sthOrcHero = $loginAthenaGroup->connection->getStatement($sqlOrcHero);
			$sthOrcHero->execute();
			$totalOrcHeroRes = $sthOrcHero->fetch();
			$totalOrcHero = intval($totalOrcHeroRes ? $totalOrcHeroRes->total : 0);

			$sqlOsiris = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4144'";
			$sthOsiris = $loginAthenaGroup->connection->getStatement($sqlOsiris);
			$sthOsiris->execute();
			$totalOsirisRes = $sthOsiris->fetch();
			$totalOsiris = intval($totalOsirisRes ? $totalOsirisRes->total : 0);

			$sqlMaya = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4146'";
			$sthMaya = $loginAthenaGroup->connection->getStatement($sqlMaya);
			$sthMaya->execute();
			$totalMayaRes = $sthMaya->fetch();
			$totalMaya = intval($totalMayaRes ? $totalMayaRes->total : 0);
			//Second Batch

			//Third Batch
			$sqlBaphomet = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4147'";
			$sthBaphomet = $loginAthenaGroup->connection->getStatement($sqlBaphomet);
			$sthBaphomet->execute();
			$totalBaphometRes = $sthBaphomet->fetch();
			$totalBaphomet = intval($totalBaphometRes ? $totalBaphometRes->total : 0);

			$sqlPharaoh = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4148'";
			$sthPharaoh = $loginAthenaGroup->connection->getStatement($sqlPharaoh);
			$sthPharaoh->execute();
			$totalPharaohRes = $sthPharaoh->fetch();
			$totalPharaoh = intval($totalPharaohRes ? $totalPharaohRes->total : 0);

			$sqlDarkLord = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4168'";
			$sthDarkLord = $loginAthenaGroup->connection->getStatement($sqlDarkLord);
			$sthDarkLord->execute();
			$totalDarkLordRes = $sthDarkLord->fetch();
			$totalDarkLord = intval($totalDarkLordRes ? $totalDarkLordRes->total : 0);

			$sqlAmonRA = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4236'";
			$sthAmonRA = $loginAthenaGroup->connection->getStatement($sqlAmonRA);
			$sthAmonRA->execute();
			$totalAmonRARes = $sthAmonRA->fetch();
			$totalAmonRA = intval($totalAmonRARes ? $totalAmonRARes->total : 0);

			$sqlSamurai = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4263'";
			$sthSamurai = $loginAthenaGroup->connection->getStatement($sqlSamurai);
			$sthSamurai->execute();
			$totalSamuraiRes = $sthSamurai->fetch();
			$totalSamurai = intval($totalSamuraiRes ? $totalSamuraiRes->total : 0);

			$sqlLOD = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4276'";
			$sthLOD = $loginAthenaGroup->connection->getStatement($sqlLOD);
			$sthLOD->execute();
			$totalLODRes = $sthLOD->fetch();
			$totalLOD = intval($totalLODRes ? $totalLODRes->total : 0);
			//Third Batch

			//Fourth Batch
			$sqlTaoGunka = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4302'";
			$sthTaoGunka = $loginAthenaGroup->connection->getStatement($sqlTaoGunka);
			$sthTaoGunka->execute();
			$totalTaoGunkaRes = $sthTaoGunka->fetch();
			$totalTaoGunka = intval($totalTaoGunkaRes ? $totalTaoGunkaRes->total : 0);

			$sqlTurtle = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4305'";
			$sthTurtle = $loginAthenaGroup->connection->getStatement($sqlTurtle);
			$sthTurtle->execute();
			$totalTurtleRes = $sthTurtle->fetch();
			$totalTurtle = intval($totalTurtleRes ? $totalTurtleRes->total : 0);

			$sqlStormy = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4318'";
			$sthStormy = $loginAthenaGroup->connection->getStatement($sqlStormy);
			$sthStormy->execute();
			$totalStormyRes = $sthStormy->fetch();
			$totalStormy = intval($totalStormyRes ? $totalStormyRes->total : 0);

			$sqlHatii = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4324'";
			$sthHatii = $loginAthenaGroup->connection->getStatement($sqlHatii);
			$sthHatii->execute();
			$totalHatiiRes = $sthHatii->fetch();
			$totalHatii = intval($totalHatiiRes ? $totalHatiiRes->total : 0);

			$sqlEvil = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4330'";
			$sthEvil = $loginAthenaGroup->connection->getStatement($sqlEvil);
			$sthEvil->execute();
			$totalEvilRes = $sthEvil->fetch();
			$totalEvil = intval($totalEvilRes ? $totalEvilRes->total : 0);

			$sqlRSX = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4342'";
			$sthRSX = $loginAthenaGroup->connection->getStatement($sqlRSX);
			$sthRSX->execute();
			$totalRSXRes = $sthRSX->fetch();
			$totalRSX = intval($totalRSXRes ? $totalRSXRes->total : 0);
			//Fourth Batch
	
			//Five Batch
			$sqlGeneral = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4352'";
			$sthGeneral = $loginAthenaGroup->connection->getStatement($sqlGeneral);
			$sthGeneral->execute();
			$totalGeneralRes = $sthGeneral->fetch();
			$totalGeneral = intval($totalGeneralRes ? $totalGeneralRes->total : 0);

			$sqlKnight = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4357'";
			$sthKnight = $loginAthenaGroup->connection->getStatement($sqlKnight);
			$sthKnight->execute();
			$totalKnightRes = $sthKnight->fetch();
			$totalKnight = intval($totalKnightRes ? $totalKnightRes->total : 0);

			$sqlAssasin = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4359'";
			$sthAssasin = $loginAthenaGroup->connection->getStatement($sqlAssasin);
			$sthAssasin->execute();
			$totalAssasinRes = $sthAssasin->fetch();
			$totalAssasin = intval($totalAssasinRes ? $totalAssasinRes->total : 0);

			$sqlWhitesmith = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4361'";
			$sthWhitesmith = $loginAthenaGroup->connection->getStatement($sqlWhitesmith);
			$sthWhitesmith->execute();
			$totalWhitesmithRes = $sthWhitesmith->fetch();
			$totalWhitesmith = intval($totalWhitesmithRes ? $totalWhitesmithRes->total : 0);

			$sqlPriest = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4363'";
			$sthPriest = $loginAthenaGroup->connection->getStatement($sqlPriest);
			$sthPriest->execute();
			$totalPriestRes = $sthPriest->fetch();
			$totalPriest = intval($totalPriestRes ? $totalPriestRes->total : 0);

			$sqlWizard = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4365'";
			$sthWizard = $loginAthenaGroup->connection->getStatement($sqlWizard);
			$sthWizard->execute();
			$totalWizardRes = $sthWizard->fetch();
			$totalWizard = intval($totalWizardRes ? $totalWizardRes->total : 0);
			//Five Batch

			//Six Batch
			$sqlSniper = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4367'";
			$sthSniper = $loginAthenaGroup->connection->getStatement($sqlSniper);
			$sthSniper->execute();
			$totalSniperRes = $sthSniper->fetch();
			$totalSniper = intval($totalSniperRes ? $totalSniperRes->total : 0);

			$sqlWhiteLady = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4372'";
			$sthWhiteLady = $loginAthenaGroup->connection->getStatement($sqlWhiteLady);
			$sthWhiteLady->execute();
			$totalWhiteLadyRes = $sthWhiteLady->fetch();
			$totalWhiteLady = intval($totalWhiteLadyRes ? $totalWhiteLadyRes->total : 0);

			$sqlVesper = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4374'";
			$sthVesper = $loginAthenaGroup->connection->getStatement($sqlVesper);
			$sthVesper->execute();
			$totalVesperRes = $sthVesper->fetch();
			$totalVesper = intval($totalVesperRes ? $totalVesperRes->total : 0);

			$sqlLadyTanee = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4376'";
			$sthLadyTanee = $loginAthenaGroup->connection->getStatement($sqlLadyTanee);
			$sthLadyTanee->execute();
			$totalLadyTaneeRes = $sthLadyTanee->fetch();
			$totalLadyTanee = intval($totalLadyTaneeRes ? $totalLadyTaneeRes->total : 0);

			$sqlDetale = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4386'";
			$sthDetale = $loginAthenaGroup->connection->getStatement($sqlDetale);
			$sthDetale->execute();
			$totalDetaleRes = $sthDetale->fetch();
			$totalDetale = intval($totalDetaleRes ? $totalDetaleRes->total : 0);

			$sqlThanatos = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4399'";
			$sthThanatos = $loginAthenaGroup->connection->getStatement($sqlThanatos);
			$sthThanatos->execute();
			$totalThanatosRes = $sthThanatos->fetch();
			$totalThanatos = intval($totalThanatosRes ? $totalThanatosRes->total : 0);
			//Six Batch

			//Seven Batch
			$sqlKiel = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4403'";
			$sthKiel = $loginAthenaGroup->connection->getStatement($sqlKiel);
			$sthKiel->execute();
			$totalKielRes = $sthKiel->fetch();
			$totalKiel = intval($totalKielRes ? $totalKielRes->total : 0);

			$sqlRandgris = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4407'";
			$sthRandgris = $loginAthenaGroup->connection->getStatement($sqlRandgris);
			$sthRandgris->execute();
			$totalRandgrisRes = $sthRandgris->fetch();
			$totalRandgris = intval($totalRandgrisRes ? $totalRandgrisRes->total : 0);

			$sqlKtullanux = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4419'";
			$sthKtullanux = $loginAthenaGroup->connection->getStatement($sqlKtullanux);
			$sthKtullanux->execute();
			$totalKtullanuxRes = $sthKtullanux->fetch();
			$totalKtullanux = intval($totalKtullanuxRes ? $totalKtullanuxRes->total : 0);

			$sqlAtroce = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4425'";
			$sthAtroce = $loginAthenaGroup->connection->getStatement($sqlAtroce);
			$sthAtroce->execute();
			$totalAtroceRes = $sthAtroce->fetch();
			$totalAtroce = intval($totalAtroceRes ? $totalAtroceRes->total : 0);

			$sqlIfrit = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4430'";
			$sthIfrit = $loginAthenaGroup->connection->getStatement($sqlIfrit);
			$sthIfrit->execute();
			$totalIfritRes = $sthIfrit->fetch();
			$totalIfrit = intval($totalIfritRes ? $totalIfritRes->total : 0);

			$sqlFallen = "SELECT count(`card_id`) as total FROM `dropped_mvp_card_log` WHERE `card_id` = '4441'";
			$sthFallen = $loginAthenaGroup->connection->getStatement($sqlFallen);
			$sthFallen->execute();
			$totalFallenRes = $sthFallen->fetch();
			$totalFallen = intval($totalFallenRes ? $totalFallenRes->total : 0);
			//Seven Batch

			$serverStatus[$groupName][$serverName] = array(
				'totalPhreeoni'   => $totalPhreeoni,
				'totalEddga'   => $totalEddga,
				'totalGTB'   => $totalGTB,
				'totalMoonlight'   => $totalMoonlight,
				'totalMistress'   => $totalMistress,
				'totalDracula'   => $totalDracula,
				'totalOrcLord'   => $totalOrcLord,
				'totalDrake'   => $totalDrake,
				'totalDoppel'   => $totalDoppel,
				'totalOrcHero'   => $totalOrcHero,
				'totalOsiris'   => $totalOsiris,
				'totalMaya'   => $totalMaya,
				'totalBaphomet'   => $totalBaphomet,
				'totalPharaoh'   => $totalPharaoh,
				'totalDarkLord'   => $totalDarkLord,
				'totalAmonRA'   => $totalAmonRA,
				'totalSamurai'   => $totalSamurai,
				'totalLOD'   => $totalLOD,
				'totalTaoGunka'   => $totalTaoGunka,
				'totalTurtle'   => $totalTurtle,
				'totalStormy'   => $totalStormy,
				'totalHatii'   => $totalHatii,
				'totalEvil'   => $totalEvil,
				'totalRSX'   => $totalRSX,
				'totalGeneral'   => $totalGeneral,
				'totalKnight'   => $totalKnight,
				'totalAssasin'   => $totalAssasin,
				'totalWhitesmith'   => $totalWhitesmith,
				'totalPriest'   => $totalPriest,
				'totalWizard'   => $totalWizard,
				'totalSniper'   => $totalSniper,
				'totalWhiteLady'   => $totalWhiteLady,
				'totalVesper'   => $totalVesper,
				'totalLadyTanee'   => $totalLadyTanee,
				'totalDetale'   => $totalDetale,
				'totalThanatos'   => $totalThanatos,
				'totalKiel'   => $totalKiel,
				'totalRandgris'   => $totalRandgris,
				'totalKtullanux'   => $totalKtullanux,
				'totalAtroce'   => $totalAtroce,
				'totalIfrit'   => $totalIfrit,
				'totalFallen'   => $totalFallen,
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
	foreach ($serverStatus as $privServerName => $gameServers):
		foreach ($gameServers as $serverName => $gameServer):
			$totalPhreeoni = $gameServer['totalPhreeoni'];
			$totalEddga = $gameServer['totalEddga'];
			$totalGTB = $gameServer['totalGTB'];
			$totalMoonlight = $gameServer['totalMoonlight'];
			$totalMistress = $gameServer['totalMistress'];
			$totalDracula = $gameServer['totalDracula'];
			$totalOrcLord = $gameServer['totalOrcLord'];
			$totalDrake = $gameServer['totalDrake'];
			$totalDoppel = $gameServer['totalDoppel'];
			$totalOrcHero = $gameServer['totalOrcHero'];
			$totalOsiris = $gameServer['totalOsiris'];
			$totalMaya = $gameServer['totalMaya'];
			$totalBaphomet = $gameServer['totalBaphomet'];
			$totalPharaoh = $gameServer['totalPharaoh'];
			$totalDarkLord = $gameServer['totalDarkLord'];
			$totalAmonRA = $gameServer['totalAmonRA'];
			$totalSamurai = $gameServer['totalSamurai'];
			$totalLOD = $gameServer['totalLOD'];
			$totalTaoGunka = $gameServer['totalTaoGunka'];
			$totalTurtle = $gameServer['totalTurtle'];
			$totalStormy = $gameServer['totalStormy'];
			$totalHatii = $gameServer['totalHatii'];
			$totalEvil = $gameServer['totalEvil'];
			$totalRSX = $gameServer['totalRSX'];
			$totalGeneral = $gameServer['totalGeneral'];
			$totalKnight = $gameServer['totalKnight'];
			$totalAssasin = $gameServer['totalAssasin'];
			$totalWhitesmith = $gameServer['totalWhitesmith'];
			$totalPriest = $gameServer['totalPriest'];
			$totalWizard = $gameServer['totalWizard'];
			$totalSniper = $gameServer['totalSniper'];
			$totalWhiteLady = $gameServer['totalWhiteLady'];
			$totalVesper = $gameServer['totalVesper'];
			$totalLadyTanee = $gameServer['totalLadyTanee'];
			$totalDetale = $gameServer['totalDetale'];
			$totalThanatos = $gameServer['totalThanatos'];
			$totalKiel = $gameServer['totalKiel'];
			$totalRandgris = $gameServer['totalRandgris'];
			$totalKtullanux = $gameServer['totalKtullanux'];
			$totalAtroce = $gameServer['totalAtroce'];
			$totalIfrit = $gameServer['totalIfrit'];
			$totalFallen = $gameServer['totalFallen'];
		endforeach; 
	endforeach; 
?>

<?php
if (!defined('FLUX_ROOT')) exit;
$title    = 'MVP Drop Card Logs';
$bind           = array();

$sql  = "SELECT COUNT(dropped_mvp_card_log.drop_date) AS total FROM {$server->loginDatabase}.dropped_mvp_card_log";
$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);

$paginator = $this->getPaginator($sth->fetch()->total);
$paginator->setSortableColumns(array(
	'dropped_mvp_card_log.drop_date' => 'DESC', 'dropped_mvp_card_log.char_name', 'dropped_mvp_card_log.mvp_name',
	'dropped_mvp_card_log.card_id','dropped_mvp_card_log.card_name','dropped_mvp_card_log.drop_map'
));

$sql  = $paginator->getSQL("SELECT * FROM {$server->loginDatabase}.dropped_mvp_card_log");
$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);

$accounts   = $sth->fetchAll();

?>