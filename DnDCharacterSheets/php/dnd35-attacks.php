<?php

function outputAttacks() {
	echo "<fieldset id=\"attacks\">\n";
	outputAnAttack("1");
	echo "</fieldset>\n";
}



function outputAnAttack($number) {
	echo "
<table>
	<tr>
		<th rowspan='2' colspawn='3'>Attack</th>
	</tr>
	<tr>
		<th>Attack Bonus</th>
		<th>Damage</th>
		<th>Critical</th>
	</tr>
	<tr>
		<td colspawn='3'></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<th>Range</th>
		<th>Type</th>
		<th colspan='4'>Notes</th>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td colspan='4'></td>
	</tr>
</table>";
}
?>