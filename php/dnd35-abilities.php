<?php
	$abilities = array(
		array("abb"=>"str", "name"=>"strength"),
		array("abb"=>"dex", "name"=>"dexterity"),
		array("abb"=>"con", "name"=>"constitution"),
		array("abb"=>"int", "name"=>"intelligence"),
		array("abb"=>"wis", "name"=>"wisdom"),
		array("abb"=>"cha", "name"=>"charisma")
	);
function outputAbilities() {
	global $abilities;
	echo "<fieldset id=\"abilities\">\n";
	outputAbilitiesHeader();
	foreach ($abilities as $ability) {
		outputAnAbility($ability);
	}
	echo "</fieldset>\n";
}
function outputAbilitiesHeader() {
	echo "<div id=\"ability-labels\">\n";
	echo "	<span>Mod</span>\n";
	echo "	<span>Ability</span>\n";
	echo "	<span>Score</span>\n";
	echo "	<span>Gear</span>\n";
	echo "	<span>Temp</span>\n";
	echo "</div>\n";
}
function outputAnAbility($ability) {
	echo "<div id=\"".$ability["name"]."\" class=\"ability\">";
	echo "	<label id=\"".$ability["name"]."-mod-label\"><input id=\"".$ability["name"]."-mod\" class=\"short-number\" type=\"text\" disabled></label>";
	echo "	<div id=\"".$ability["name"]."-name\" class=\"ability-name highlight\">".strtoupper($ability["abb"])."<span class=\"subscript\">".$ability["name"]."<span></div>";
	echo "	<label id=\"".$ability["name"]."-score-label\"><input id=\"".$ability["name"]."-score\" class=\"short-number\" type=\"text\"></label>";
	echo "	<label id=\"".$ability["name"]."-gear-label\"><input id=\"".$ability["name"]."-gear\" class=\"short-number\" type=\"text\"></label>";
	echo "	<label id=\"".$ability["name"]."-temp-label\"><input id=\"".$ability["name"]."-temp\" class=\"short-number\" type=\"text\"></label>";
	echo "</div>";
}
?>