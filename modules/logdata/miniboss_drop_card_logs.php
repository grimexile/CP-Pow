<!--
===== rAthena Web Flux Modification ========================
= Mini Boss Drop Card Logs
= Count drop card only
===== By: ==================================================
= BeWan
https://rathena.org/board/profile/62232-bewan/
===== Current Version: =====================================
= 1.0
============================================================
-->
</br></br>
<?php
if (!defined('FLUX_ROOT')) exit;
$title    = 'Mini Boss Drop Card Logs';
$bind           = array();

$sql  = "SELECT COUNT(dropped_mini_boss_card_log.drop_date) AS total FROM {$server->loginDatabase}.dropped_mini_boss_card_log";
$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);

$paginator = $this->getPaginator($sth->fetch()->total);
$paginator->setSortableColumns(array(
	'dropped_mini_boss_card_log.drop_date' => 'asc', 'dropped_mini_boss_card_log.char_name', 'dropped_mini_boss_card_log.mini_boss_name',
	'dropped_mini_boss_card_log.card_id','dropped_mini_boss_card_log.card_name','dropped_mini_boss_card_log.drop_map'
));

$sql  = $paginator->getSQL("SELECT * FROM {$server->loginDatabase}.dropped_mini_boss_card_log");
$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);

$accounts   = $sth->fetchAll();

?>