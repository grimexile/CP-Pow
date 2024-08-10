<section class="page-section single-blog-page">
<div class="container">

</br>
<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Ranking Global</h2>
<h3>
	Top <?php echo number_format($limit=(int)Flux::config('CharRankingLimit')) ?> Personajes
	<?php if (!is_null($jobClass)): ?>
	(<?php echo htmlspecialchars($className=$this->jobClassText($jobClass)) ?>)
	<?php endif ?>
	de <?php echo htmlspecialchars($server->serverName) ?>
</h3>
<?php if ($chars): ?>
<form action="" method="get" class="search-form2">
	<?php echo $this->moduleActionFormInputs('ranking', 'character') ?>
	<p>
		<label for="jobclass">Filtrar por Clase:</label>
		<select name="jobclass" id="jobclass">
			<option value=""<?php if (is_null($jobClass)) echo 'selected="selected"' ?>>All</option>
		<?php foreach ($classes as $jobClassIndex => $jobClassName): ?>
			<option value="<?php echo $jobClassIndex ?>"
				<?php if (!is_null($jobClass) && $jobClass == $jobClassIndex) echo ' selected="selected"' ?>>
				<?php echo htmlspecialchars($jobClassName) ?>
			</option>
		<?php endforeach ?>
		</select>
		
		<input type="submit" value="Filtrar" />
		<input type="button" value="Resetear" onclick="reload()" />
	</p>
</form>
<table class="horizontal-table">
	<tr>
		<th>Posición</th>
		<th>Nombre</th>
		<th>Clase</th>
		<th colspan="2">Guild</th>
		<th>Nivel Base</th>
		<th>Nivel Job</th>
		<th>Base Exp</th>
		<th>Job Exp</th>
	</tr>
	<?php $topRankType = !is_null($jobClass) ? $className : 'personaje' ?>
	<?php for ($i = 0; $i < $limit; ++$i): ?>
	<tr<?php if (!isset($chars[$i])) echo ' class="empty-row"'; if ($i === 0) echo 'class="top-ranked" title="<strong>'.htmlspecialchars($chars[$i]->char_name).'</strong> es el mejor '.$topRankType.' del servidor!"' ?>>
		<td width="2" align="right"><?php echo number_format($i + 1) ?></td>
		<?php if (isset($chars[$i])): ?>
		<td><strong>
			<?php if ($auth->actionAllowed('character', 'view') && $auth->allowedToViewCharacter): ?>
				<?php echo $this->linkToCharacter($chars[$i]->char_id, $chars[$i]->char_name) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($chars[$i]->char_name) ?>
			<?php endif ?>
		</strong></td>
		<td width="16"><?php echo $this->jobClassText($chars[$i]->char_class) ?></td>
		<?php if ($chars[$i]->guild_name): ?>
		<?php if ($chars[$i]->guild_emblem_len): ?>
		<td width="24"><img src="<?php echo $this->emblem($chars[$i]->guild_id) ?>" /></td>
		<?php endif ?>
		<td<?php if (!$chars[$i]->guild_emblem_len) echo ' colspan="2"' ?>>
			<?php if ($auth->actionAllowed('guild', 'view') && $auth->allowedToViewGuild): ?>
				<?php echo $this->linkToGuild($chars[$i]->guild_id, $chars[$i]->guild_name) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($chars[$i]->guild_name) ?>
			<?php endif ?>
		</td>
		<?php else: ?>
		<td colspan="2"><span class="not-applicable">Ninguno</span></td>
		<?php endif ?>
		<td><?php echo number_format($chars[$i]->base_level) ?></td>
		<td><?php echo number_format($chars[$i]->job_level) ?></td>
		<td><?php echo number_format($chars[$i]->base_exp) ?></td>
		<td><?php echo number_format($chars[$i]->job_exp) ?></td>
		<?php else: ?>
		<td colspan="8"></td>
		<?php endif ?>
	</tr>
	<?php endfor ?>
</table>
<?php else: ?>
<p>No hay personajes. <a href="javascript:history.go(-1)">Regresar</a>.</p>
<?php endif ?>

</div>
</section>

</br></br></br></br></br></br></br></br></br></br></br>