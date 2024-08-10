<section class="page-section single-blog-page">

</br>
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

<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2 align="center">Cartas Mini-Boss Dropeadas</h2>

<?php if ($accounts): ?>
<?php echo $paginator->infoText() ?>
<table class="horizontal-table">
	<tr>
		<th>Fecha / Hora</th>
		<th>Obtenida Por</th>
		<th>Carta</th>
		<th>Mapa</th>
	</tr>
	<?php foreach ($accounts as $account): ?>
	<tr>
		<td align="center"><?php echo htmlspecialchars($account->drop_date) ?></td>
		<td align="center"><?php echo htmlspecialchars($account->char_name) ?></td>
		<td align="center"><?php echo htmlspecialchars($account->card_name) ?></td>
		<td align="center"><?php echo htmlspecialchars($account->drop_map) ?></td>
	</tr>
	<?php endforeach ?>
</table>
<?php echo $paginator->getHTML() ?>
<?php else: ?>
<p align="center">
	Actualmente no se ha dropeado ninguna carta Mini-Boss en el servidor.
</p>
<?php endif ?>

</section>

</br></br></br></br></br></br></br></br></br></br></br>