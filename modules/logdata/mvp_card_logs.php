</br></br>
<!--
===== rAthena Web Flux Modification ========================
= MVP Card Logs
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
			$sqlPhreeoni = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4121') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4121') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4121') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4121') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4121') AS total";
			$sthPhreeoni = $loginAthenaGroup->connection->getStatement($sqlPhreeoni);
			$sthPhreeoni->execute();
			$totalPhreeoniRes = $sthPhreeoni->fetch();
			$totalPhreeoni = intval($totalPhreeoniRes ? $totalPhreeoniRes->total : 0);

			$sqlEddga = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4123') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4123') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4123') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4123') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4123') AS total";
			$sthEddga = $loginAthenaGroup->connection->getStatement($sqlEddga);
			$sthEddga->execute();
			$totalEddgaRes = $sthEddga->fetch();
			$totalEddga = intval($totalEddgaRes ? $totalEddgaRes->total : 0);

			$sqlGTB = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4128') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4128') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4128') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4128') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4128') AS total";
			$sthGTB = $loginAthenaGroup->connection->getStatement($sqlGTB);
			$sthGTB->execute();
			$totalGTBRes = $sthGTB->fetch();
			$totalGTB = intval($totalGTBRes ? $totalGTBRes->total : 0);

			$sqlMoonlight = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4131') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4131') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4131') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4131') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4131') AS total";
			$sthMoonlight = $loginAthenaGroup->connection->getStatement($sqlMoonlight);
			$sthMoonlight->execute();
			$totalMoonlightRes = $sthMoonlight->fetch();
			$totalMoonlight = intval($totalMoonlightRes ? $totalMoonlightRes->total : 0);

			$sqlMistress = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4132') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4132') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4132') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4132') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4132') AS total";
			$sthMistress = $loginAthenaGroup->connection->getStatement($sqlMistress);
			$sthMistress->execute();
			$totalMistressRes = $sthMistress->fetch();
			$totalMistress = intval($totalMistressRes ? $totalMistressRes->total : 0);

			$sqlDracula = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4134') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4134') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4134') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4134') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4134') AS total";
			$sthDracula = $loginAthenaGroup->connection->getStatement($sqlDracula);
			$sthDracula->execute();
			$totalDraculaRes = $sthDracula->fetch();
			$totalDracula = intval($totalDraculaRes ? $totalDraculaRes->total : 0);
			//First Batch

			//Second Batch
			$sqlOrcLord = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4135') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4135') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4135') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4135') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4135') AS total";
			$sthOrcLord = $loginAthenaGroup->connection->getStatement($sqlOrcLord);
			$sthOrcLord->execute();
			$totalOrcLordRes = $sthOrcLord->fetch();
			$totalOrcLord = intval($totalOrcLordRes ? $totalOrcLordRes->total : 0);

			$sqlDrake = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4137') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4137') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4137') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4137') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4137') AS total";
			$sthDrake = $loginAthenaGroup->connection->getStatement($sqlDrake);
			$sthDrake->execute();
			$totalDrakeRes = $sthDrake->fetch();
			$totalDrake = intval($totalDrakeRes ? $totalDrakeRes->total : 0);

			$sqlDoppel = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4142') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4142') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4142') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4142') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4142') AS total";
			$sthDoppel = $loginAthenaGroup->connection->getStatement($sqlDoppel);
			$sthDoppel->execute();
			$totalDoppelRes = $sthDoppel->fetch();
			$totalDoppel = intval($totalDoppelRes ? $totalDoppelRes->total : 0);

			$sqlOrcHero = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4143') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4143') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4143') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4143') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4143') AS total";
			$sthOrcHero = $loginAthenaGroup->connection->getStatement($sqlOrcHero);
			$sthOrcHero->execute();
			$totalOrcHeroRes = $sthOrcHero->fetch();
			$totalOrcHero = intval($totalOrcHeroRes ? $totalOrcHeroRes->total : 0);

			$sqlOsiris = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4144') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4144') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4144') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4144') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4144') AS total";
			$sthOsiris = $loginAthenaGroup->connection->getStatement($sqlOsiris);
			$sthOsiris->execute();
			$totalOsirisRes = $sthOsiris->fetch();
			$totalOsiris = intval($totalOsirisRes ? $totalOsirisRes->total : 0);

			$sqlMaya = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4146') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4146') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4146') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4146') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4146') AS total";
			$sthMaya = $loginAthenaGroup->connection->getStatement($sqlMaya);
			$sthMaya->execute();
			$totalMayaRes = $sthMaya->fetch();
			$totalMaya = intval($totalMayaRes ? $totalMayaRes->total : 0);
			//Second Batch

			//Third Batch
			$sqlBaphomet = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4147') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4147') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4147') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4147') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4147') AS total";
			$sthBaphomet = $loginAthenaGroup->connection->getStatement($sqlBaphomet);
			$sthBaphomet->execute();
			$totalBaphometRes = $sthBaphomet->fetch();
			$totalBaphomet = intval($totalBaphometRes ? $totalBaphometRes->total : 0);

			$sqlPharaoh = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4148') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4148') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4148') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4148') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4148') AS total";
			$sthPharaoh = $loginAthenaGroup->connection->getStatement($sqlPharaoh);
			$sthPharaoh->execute();
			$totalPharaohRes = $sthPharaoh->fetch();
			$totalPharaoh = intval($totalPharaohRes ? $totalPharaohRes->total : 0);

			$sqlDarkLord = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4168') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4168') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4168') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4168') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4168') AS total";
			$sthDarkLord = $loginAthenaGroup->connection->getStatement($sqlDarkLord);
			$sthDarkLord->execute();
			$totalDarkLordRes = $sthDarkLord->fetch();
			$totalDarkLord = intval($totalDarkLordRes ? $totalDarkLordRes->total : 0);

			$sqlAmonRA = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4236') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4236') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4236') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4236') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4236') AS total";
			$sthAmonRA = $loginAthenaGroup->connection->getStatement($sqlAmonRA);
			$sthAmonRA->execute();
			$totalAmonRARes = $sthAmonRA->fetch();
			$totalAmonRA = intval($totalAmonRARes ? $totalAmonRARes->total : 0);

			$sqlSamurai = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4263') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4263') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4263') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4263') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4263') AS total";
			$sthSamurai = $loginAthenaGroup->connection->getStatement($sqlSamurai);
			$sthSamurai->execute();
			$totalSamuraiRes = $sthSamurai->fetch();
			$totalSamurai = intval($totalSamuraiRes ? $totalSamuraiRes->total : 0);

			$sqlLOD = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4276') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4276') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4276') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4276') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4276') AS total";
			$sthLOD = $loginAthenaGroup->connection->getStatement($sqlLOD);
			$sthLOD->execute();
			$totalLODRes = $sthLOD->fetch();
			$totalLOD = intval($totalLODRes ? $totalLODRes->total : 0);
			//Third Batch

			//Fourth Batch
			$sqlTaoGunka = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4302') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4302') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4302') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4302') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4302') AS total";
			$sthTaoGunka = $loginAthenaGroup->connection->getStatement($sqlTaoGunka);
			$sthTaoGunka->execute();
			$totalTaoGunkaRes = $sthTaoGunka->fetch();
			$totalTaoGunka = intval($totalTaoGunkaRes ? $totalTaoGunkaRes->total : 0);

			$sqlTurtle = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4305') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4305') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4305') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4305') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4305') AS total";
			$sthTurtle = $loginAthenaGroup->connection->getStatement($sqlTurtle);
			$sthTurtle->execute();
			$totalTurtleRes = $sthTurtle->fetch();
			$totalTurtle = intval($totalTurtleRes ? $totalTurtleRes->total : 0);

			$sqlStormy = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4318') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4318') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4318') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4318') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4318') AS total";
			$sthStormy = $loginAthenaGroup->connection->getStatement($sqlStormy);
			$sthStormy->execute();
			$totalStormyRes = $sthStormy->fetch();
			$totalStormy = intval($totalStormyRes ? $totalStormyRes->total : 0);

			$sqlHatii = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4324') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4324') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4324') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4324') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4324') AS total";
			$sthHatii = $loginAthenaGroup->connection->getStatement($sqlHatii);
			$sthHatii->execute();
			$totalHatiiRes = $sthHatii->fetch();
			$totalHatii = intval($totalHatiiRes ? $totalHatiiRes->total : 0);

			$sqlEvil = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4330') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4330') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4330') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4330') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4330') AS total";
			$sthEvil = $loginAthenaGroup->connection->getStatement($sqlEvil);
			$sthEvil->execute();
			$totalEvilRes = $sthEvil->fetch();
			$totalEvil = intval($totalEvilRes ? $totalEvilRes->total : 0);

			$sqlRSX = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4342') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4342') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4342') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4342') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4342') AS total";
			$sthRSX = $loginAthenaGroup->connection->getStatement($sqlRSX);
			$sthRSX->execute();
			$totalRSXRes = $sthRSX->fetch();
			$totalRSX = intval($totalRSXRes ? $totalRSXRes->total : 0);
			//Fourth Batch
	
			//Five Batch
			$sqlGeneral = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4352') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4352') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4352') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4352') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4352') AS total";
			$sthGeneral = $loginAthenaGroup->connection->getStatement($sqlGeneral);
			$sthGeneral->execute();
			$totalGeneralRes = $sthGeneral->fetch();
			$totalGeneral = intval($totalGeneralRes ? $totalGeneralRes->total : 0);

			$sqlKnight = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4357') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4357') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4357') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4357') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4357') AS total";
			$sthKnight = $loginAthenaGroup->connection->getStatement($sqlKnight);
			$sthKnight->execute();
			$totalKnightRes = $sthKnight->fetch();
			$totalKnight = intval($totalKnightRes ? $totalKnightRes->total : 0);

			$sqlAssasin = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4359') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4359') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4359') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4359') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4359') AS total";
			$sthAssasin = $loginAthenaGroup->connection->getStatement($sqlAssasin);
			$sthAssasin->execute();
			$totalAssasinRes = $sthAssasin->fetch();
			$totalAssasin = intval($totalAssasinRes ? $totalAssasinRes->total : 0);

			$sqlWhitesmith = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4361') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4361') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4361') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4361') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4361') AS total";
			$sthWhitesmith = $loginAthenaGroup->connection->getStatement($sqlWhitesmith);
			$sthWhitesmith->execute();
			$totalWhitesmithRes = $sthWhitesmith->fetch();
			$totalWhitesmith = intval($totalWhitesmithRes ? $totalWhitesmithRes->total : 0);

			$sqlPriest = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4363') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4363') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4363') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4363') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4363') AS total";
			$sthPriest = $loginAthenaGroup->connection->getStatement($sqlPriest);
			$sthPriest->execute();
			$totalPriestRes = $sthPriest->fetch();
			$totalPriest = intval($totalPriestRes ? $totalPriestRes->total : 0);

			$sqlWizard = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4365') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4365') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4365') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4365') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4365') AS total";
			$sthWizard = $loginAthenaGroup->connection->getStatement($sqlWizard);
			$sthWizard->execute();
			$totalWizardRes = $sthWizard->fetch();
			$totalWizard = intval($totalWizardRes ? $totalWizardRes->total : 0);
			//Five Batch

			//Six Batch
			$sqlSniper = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4367') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4367') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4367') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4367') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4367') AS total";
			$sthSniper = $loginAthenaGroup->connection->getStatement($sqlSniper);
			$sthSniper->execute();
			$totalSniperRes = $sthSniper->fetch();
			$totalSniper = intval($totalSniperRes ? $totalSniperRes->total : 0);

			$sqlWhiteLady = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4372') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4372') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4372') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4372') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4372') AS total";
			$sthWhiteLady = $loginAthenaGroup->connection->getStatement($sqlWhiteLady);
			$sthWhiteLady->execute();
			$totalWhiteLadyRes = $sthWhiteLady->fetch();
			$totalWhiteLady = intval($totalWhiteLadyRes ? $totalWhiteLadyRes->total : 0);

			$sqlVesper = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4374') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4374') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4374') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4374') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4374') AS total";
			$sthVesper = $loginAthenaGroup->connection->getStatement($sqlVesper);
			$sthVesper->execute();
			$totalVesperRes = $sthVesper->fetch();
			$totalVesper = intval($totalVesperRes ? $totalVesperRes->total : 0);

			$sqlLadyTanee = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4376') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4376') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4376') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4376') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4376') AS total";
			$sthLadyTanee = $loginAthenaGroup->connection->getStatement($sqlLadyTanee);
			$sthLadyTanee->execute();
			$totalLadyTaneeRes = $sthLadyTanee->fetch();
			$totalLadyTanee = intval($totalLadyTaneeRes ? $totalLadyTaneeRes->total : 0);

			$sqlDetale = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4386') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4386') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4386') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4386') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4386') AS total";
			$sthDetale = $loginAthenaGroup->connection->getStatement($sqlDetale);
			$sthDetale->execute();
			$totalDetaleRes = $sthDetale->fetch();
			$totalDetale = intval($totalDetaleRes ? $totalDetaleRes->total : 0);

			$sqlThanatos = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4399') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4399') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4399') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4399') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4399') AS total";
			$sthThanatos = $loginAthenaGroup->connection->getStatement($sqlThanatos);
			$sthThanatos->execute();
			$totalThanatosRes = $sthThanatos->fetch();
			$totalThanatos = intval($totalThanatosRes ? $totalThanatosRes->total : 0);
			//Six Batch

			//Seven Batch
			$sqlKiel = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4403') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4403') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4403') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4403') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4403') AS total";
			$sthKiel = $loginAthenaGroup->connection->getStatement($sqlKiel);
			$sthKiel->execute();
			$totalKielRes = $sthKiel->fetch();
			$totalKiel = intval($totalKielRes ? $totalKielRes->total : 0);

			$sqlRandgris = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4407') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4407') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4407') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4407') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4407') AS total";
			$sthRandgris = $loginAthenaGroup->connection->getStatement($sqlRandgris);
			$sthRandgris->execute();
			$totalRandgrisRes = $sthRandgris->fetch();
			$totalRandgris = intval($totalRandgrisRes ? $totalRandgrisRes->total : 0);

			$sqlKtullanux = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4419') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4419') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4419') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4419') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4419') AS total";
			$sthKtullanux = $loginAthenaGroup->connection->getStatement($sqlKtullanux);
			$sthKtullanux->execute();
			$totalKtullanuxRes = $sthKtullanux->fetch();
			$totalKtullanux = intval($totalKtullanuxRes ? $totalKtullanuxRes->total : 0);

			$sqlAtroce = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4425') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4425') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4425') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4425') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4425') AS total";
			$sthAtroce = $loginAthenaGroup->connection->getStatement($sqlAtroce);
			$sthAtroce->execute();
			$totalAtroceRes = $sthAtroce->fetch();
			$totalAtroce = intval($totalAtroceRes ? $totalAtroceRes->total : 0);

			$sqlIfrit = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4430') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4430') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4430') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4430') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4430') AS total";
			$sthIfrit = $loginAthenaGroup->connection->getStatement($sqlIfrit);
			$sthIfrit->execute();
			$totalIfritRes = $sthIfrit->fetch();
			$totalIfrit = intval($totalIfritRes ? $totalIfritRes->total : 0);

			$sqlFallen = "SELECT (SELECT COALESCE(SUM(`amount`), 0) FROM `cart_inventory` WHERE `nameid` = '4441') + (SELECT COALESCE(SUM(`amount`), 0) FROM `guild_storage` WHERE `nameid` = '4441') + (SELECT COALESCE(SUM(`amount`), 0) FROM `inventory` WHERE `nameid` = '4441') + (SELECT COALESCE(SUM(`amount`), 0) FROM `storage` WHERE `nameid` = '4441') + (SELECT COALESCE(SUM(`amount`), 0) FROM `mail_attachments` WHERE `nameid` = '4441') AS total";
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