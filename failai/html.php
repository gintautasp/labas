
<h3> Csv failas </h3>
<table>
<?php
	
	$suma_3_stulpelio = 0;
		
	foreach ( $csv -> content as $row1 ) {
	
		$i = 0;

?>
	<tr>
<?php	
		foreach ( $row1 as $cell1 ) {
?>
		<td><?= $cell1 ?></td>
<?php
			if ( $i == 2 ) {
			
				$suma_3_stulpelio += $cell1;
			}
			$i++;
		}
?>
	</tr>
<?php
	}
?>
	<tr>
		<td colspan="2"></td>
		<td><?= $suma_3_stulpelio ?></td>
	</tr>
</table>
<h3> failas eilutemis </h3>

<?php
	foreach ( $failas_eilutemis -> content as $row1 ) {
?>
	<?= $row1 ?><br>
<?php
	}
?>
<h3> failas pilnas </h3>
<?php //= str_replace ( "\r\n", "</br>", $failas_pilnas ) ?>
<?php  //= nl2br (  $failas_pilnas ) ?>
<?php // = $html_webe ?>




<?php //= $miestai ->qw  ?>
 
 
