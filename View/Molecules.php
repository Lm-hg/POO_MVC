<?php include __DIR__.  '/./header.php';?>
<table id="table">
	<thead>
		<tr>
			<th>NOM</th>
			<th>FORMULE</th>
			<th>Details</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($molecule as $m) { ?>
			<tr>
				<td><?=  $m["nom"]?></td>
				<td><?php echo  $m["formule"]?></td>
                <td><a href="details?nom=<?php echo  $m["nom"]?>">Voir plus</a></td>

			</tr>
		<?php } ?>
	</tbody>
</table>
<?php include __DIR__ . '/./footer.php';?>