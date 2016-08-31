<?php
	$saves = array(
		array("name"=>"fortitude","ability"=>"constitution"),
		array("name"=>"reflex","ability"=>"dexterity"),
		array("name"=>"will","ability"=>"wisdom")
	);
function outputSaves() {
	global $saves;
	echo "<fieldset id=\"saves\">\n";
	outputSavesHeader();
	foreach ($saves as $save) {
		outputASave($save);
	}
	echo "</fieldset>\n";
}
function outputSavesHeader() {
	echo "<div id=\"save-labels\">\n";
	echo "<span>Total</span>\n";
	echo "<span>Save</span>\n";
	echo "<span>Base</span>\n";
	echo "<span>Ability</span>\n";
	echo "<span>Racial</span>\n";
	echo "<span>Magic</span>\n";
	echo "<span>Misc</span>\n";
	echo "<span>Temp</span>\n";
	echo "</div>\n";
}
function outputASave($save) {
	echo "<div id=\"".$save["name"]."\" class=\"save\">";
	echo "	<label id=\"".$save["name"]."-total-label\"><input id=\"".$save["name"]."-total\" class=\"short-number\" type=\"text\" disabled></label>\n";
	echo "	<div id=\"".$save["name"]."\" class=\"save-name highlight\">".strtoupper($save["name"])."</div>\n";
	echo "	<label id=\"".$save["name"]."-base-label\"><input id=\"".$save["name"]."-base\" class=\"short-number\" type=\"text\"></label>\n";
	echo "	<label id=\"".$save["name"]."-ability-label\"><input id=\"".$save["name"]."-ability\" class=\"short-number\" type=\"text\" disabled>\n";
	echo "	<span class=\"subscript\">".$save["ability"]."<span></label>\n";
	echo "	<label id=\"".$save["name"]."-racial-label\"><input id=\"".$save["name"]."-racial\" class=\"short-number\" type=\"text\"></label>\n";
	echo "	<label id=\"".$save["name"]."-magic-label\"><input id=\"".$save["name"]."-magic\" class=\"short-number\" type=\"text\"></label>\n";
	echo "	<label id=\"".$save["name"]."-misc-label\"><input id=\"".$save["name"]."-misc\" class=\"short-number\" type=\"text\"></label>\n";
	echo "	<label id=\"".$save["name"]."-temp-label\"><input id=\"".$save["name"]."-temp\" class=\"short-number\" type=\"text\"></label>\n";
	echo "</div>";
		
	
	
}
?>