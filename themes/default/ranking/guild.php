<section class="page-section single-blog-page">
<div class="container">

</br>
<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Ranking de Guilds</h2>
<h3>
	Las mejores <?php echo number_format($limit=(int)Flux::config('GuildRankingLimit')) ?> Guilds
	de <?php echo htmlspecialchars($server->serverName) ?>
</h3>
<?php if ($guilds): ?>
	<table class="horizontal-table">
		<tr>
			<th>Posición</th>
			<th colspan="2">Nombre</th>
			<th>Nivel</th>
			<th>Castles</th>
			<th>Miembros</th>
			<th>Nivel Promedio</th>
			<th>Experiencia</th>
		</tr>
		<?php for ($i = 0; $i < $limit; ++$i): ?>
		<tr<?php if (!isset($guilds[$i])) echo ' class="empty-row"'; if ($i === 0) echo ' class="top-ranked" title="<strong>'.htmlspecialchars($guilds[$i]->name).'</strong> es la mejor Guild del servidor!"' ?>>
			<td align="right"><?php echo number_format($i + 1) ?></td>
			<?php if (isset($guilds[$i])): ?>
			<?php if ($guilds[$i]->emblem_len): ?>
			<td width="24"><img src="<?php echo $this->emblem($guilds[$i]->guild_id) ?>" /></td>
			<?php endif ?>
			<td<?php if (!$guilds[$i]->emblem_len) echo ' colspan="2"' ?>><strong>
				<?php if ($auth->actionAllowed('guild', 'view') && $auth->allowedToViewGuild): ?>
					<?php echo $this->linkToGuild($guilds[$i]->guild_id, $guilds[$i]->name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($guilds[$i]->name) ?>
				<?php endif ?>
			</strong></td>
			<td><?php echo number_format($guilds[$i]->guild_lv) ?></td>
			<td><?php echo number_format($guilds[$i]->castles) ?></td>
			<td><?php echo number_format($guilds[$i]->members) ?></td>
			<td><?php echo number_format($guilds[$i]->average_lv) ?></td>
			<td><?php echo number_format($guilds[$i]->exp) ?></td>
			<?php else: ?>
			<td colspan="8"></td>
			<?php endif ?>
		</tr>
		<?php endfor ?>
	</table>
<?php else: ?>
<p>No hay guilds en el ranking. <a href="javascript:history.go(-1)">Regresar</a>.</p>
<?php endif ?>

</div>
</section>

</br></br></br></br></br></br></br></br></br></br></br>