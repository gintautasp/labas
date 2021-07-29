<table>
	<tr>
		<th>Šalies<br>kodas</th>
		<th>Pavadinimas</th>
		<th>Data įkūrimo</th>
		<th>Gyv. sk.</th>
		<th>Plotas</th>
	</tr>
<?php
	while ( $row = $miestai -> rs -> fetch_assoc() ) {
?>
	<tr>
		<td><?= $row [ 'salies_kodas' ] ?></td>
		<td><?= $row [ 'pavadinimas' ] ?></td>
		<td><?= $row [ 'Ikurimo_data' ] ?></td>
		<td><?= $row [ 'gyventojai' ] ?></td>
		<td><?= $row [ 'plotas' ] ?></td>
	</tr>
<?php
	}
?>
</table>

<form method="post" action="">
	<table>
		<tr>
			<th>Pavadinimas</th>
			<td>
				<input type="text" name="pav" required>
			</td>
			<td rowspan="6">
		</tr>
		<tr>
			<th>Gyv. sk.</th>
			<td>
				<input type="number" name="skaicius_gyv" value="1">
			</td>
		</tr>
		<tr>
			<th>Plotas</th>
			<td>
				<input type="number" name="plotas" value="1">
			</td>
		</tr>
		<tr>
			<th>Data įkūrimo</th>
			<td>
				<input type="text" name="data_ikurimo" value="0">
			</td>
		</tr>
		<tr>
			<th>Valst.</th>
			<td>			
				<input type="text" name="kodas_salies">
			</td>
		</tr>
		<tr>
			<td colspan="2">
			</td>
			<td>
				<input type="button" name="clear" value="valyti"> 
				<input type="submit" name="add" value="papildyti">
			</td>
		</tr>
	</table>
		<input type="hidden" name="id_miesto" value="0">
</form>
<?php //= $miestai ->qw ?>
