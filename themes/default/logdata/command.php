<div class="container">
<?php if (!defined('FLUX_ROOT')) exit; ?>
</br>
<h2 align="center"><?php echo htmlspecialchars(Flux::message('CommandLogHeading')) ?></h2>
<?php if ($commands): ?>
<?php echo $paginator->infoText() ?>
<table class="horizontal-table" align="center">
	<tr align="center" width="75%">
		<th><?php echo $paginator->sortableColumn('atcommand_date', Flux::message('CommandLogDateLabel')) ?></th>
		<th><?php echo $paginator->sortableColumn('char_name', Flux::message('CommandLogCharNameLabel')) ?></th>
		<th><?php echo $paginator->sortableColumn('command', Flux::message('CommandLogCommandLabel')) ?></th>
		<!-- <th><?php echo $paginator->sortableColumn('map', Flux::message('CommandLogMapLabel')) ?></th> -->
	</tr>
	<?php foreach ($commands as $command): ?>
	<tr>
		<td align="center"><?php echo $this->formatDateTime($command->atcommand_date) ?></td>
		<td align="center"><?php echo htmlspecialchars($command->char_name) ?></td>
		<td align="center"><?php echo htmlspecialchars($command->command) ?></td>
		<!-- <td>
			<?php if (strlen(basename($command->map, '.gat')) > 0): ?>
				<?php echo htmlspecialchars(basename($command->map, '.gat')) ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('NoneLabel')) ?></span>
			<?php endif ?>
		</td> -->
	</tr>
	<?php endforeach ?>
</table>
<?php echo $paginator->getHTML() ?>
<?php else: ?>
<p>
	<?php echo htmlspecialchars(Flux::message('CommandLogNotFound')) ?>
	<a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('GoBackLabel')) ?></a>
</p>
<?php endif ?>

</div>