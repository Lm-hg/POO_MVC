<?php include __DIR__.'/./header.php';?>
<table id="table">
	<thead>
		<tr>
			<th>NOM</th>
			<th>FORMULE</th>
			<th>Atome</th>
			<th>Symbole</th>

		</tr>
	</thead>
	<tbody>
		<?php foreach ($une as $m) { ?>
			<tr>
				<td><?php echo $m["nom"];?></td>
				<td><?php echo $m["formule"];?></td>
				<td><?php echo $m["n"];?></td>
				<td><?php echo $m["symbole"];?></td>

			</tr>
		<?php } ?>
	</tbody>
</table>
<?php include __DIR__. '/./footer.php';?>