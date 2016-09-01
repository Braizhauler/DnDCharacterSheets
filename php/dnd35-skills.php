<?php
	$skills = array(
		array("name"=>"appraise", "ability"=>"intellegence", "trainedonly"=>false), 
		array("name"=>"balance", "ability"=>"dexterity", "trainedonly"=>false),
		array("name"=>"bluff", "ability"=>"charisma", "trainedonly"=>false),
		array("name"=>"climb", "ability"=>"strength", "trainedonly"=>false),
		array("name"=>"concentration", "ability"=>"constitution", "trainedonly"=>false),
		array("name"=>"craft", "ability"=>"intellegence", "trainedonly"=>false),
		array("name"=>"decipher script", "ability"=>"intellegence", "trainedonly"=>false),
		array("name"=>"diplomacy", "ability"=>"charisma", "trainedonly"=>false),
		array("name"=>"disable device", "ability"=>"intellegence", "trainedonly"=>false),
		array("name"=>"disguise", "ability"=>"charisma", "trainedonly"=>false),
		array("name"=>"escape artist", "ability"=>"dexterity", "trainedonly"=>false),
		array("name"=>"forgery", "ability"=>"intellegence", "trainedonly"=>false),
		array("name"=>"gather information", "ability"=>"charisma", "trainedonly"=>false),
		array("name"=>"handle animal", "ability"=>"charisma", "trainedonly"=>false),
		array("name"=>"heal", "ability"=>"wisdom", "trainedonly"=>false),
		array("name"=>"hide", "ability"=>"dexterity", "trainedonly"=>false),
		array("name"=>"intimidate", "ability"=>"charisma", "trainedonly"=>false),
		array("name"=>"jump", "ability"=>"strength", "trainedonly"=>false),
		array("name"=>"knowledge", "ability"=>"intellegence", "trainedonly"=>false),
		array("name"=>"listen", "ability"=>"wisdom", "trainedonly"=>false),
		array("name"=>"move silently", "ability"=>"dexterity", "trainedonly"=>false),
		array("name"=>"open lock", "ability"=>"dexterity", "trainedonly"=>false),
		array("name"=>"perform", "ability"=>"charisma", "trainedonly"=>false),
		array("name"=>"profession", "ability"=>"wisdom", "trainedonly"=>false),
		array("name"=>"ride", "ability"=>"dexterity", "trainedonly"=>false),
		array("name"=>"search", "ability"=>"intellegence", "trainedonly"=>false),
		array("name"=>"sense motive", "ability"=>"wisdom", "trainedonly"=>false),
		array("name"=>"sleight of hand", "ability"=>"dexterity", "trainedonly"=>false),
		array("name"=>"speak language", "ability"=>"none", "trainedonly"=>false),
		array("name"=>"spellcraft", "ability"=>"intellegence", "trainedonly"=>false),
		array("name"=>"spot", "ability"=>"wisdom", "trainedonly"=>false),
		array("name"=>"survival", "ability"=>"wisdom", "trainedonly"=>false),
		array("name"=>"swim", "ability"=>"strength", "trainedonly"=>false),
		array("name"=>"tumble", "ability"=>"dexterity", "trainedonly"=>false),
		array("name"=>"use magic device", "ability"=>"charisma", "trainedonly"=>false),
		array("name"=>"use rope", "ability"=>"dexterity", "trainedonly"=>false)
	);
function outputSkills() {
	global $skills;
	echo "<fieldset id=\"skills\">\n";
	outputSkillsHeader();
	foreach ($skills as $skill) {
		outputASkill($skill);
	}
	echo "</fieldset>\n";
}

function outputSkillsHeader() {
	echo "<span class=\"caption highlight\">Skills</span>\n";
	echo "<div id=\"skill-labels\">\n";
	echo "	<span>Total</span>\n";
	echo "	<span>Skill Name</span>\n";
	echo "	<span>Trained</span>\n";
	echo "	<span>Class</span>\n";
	echo "	<span>Rank</span>\n";
	echo "	<span>Ability</span>\n";
	echo "	<span>Racial</span>\n";
	echo "	<span>Synergy</span>\n";
	echo "	<span>Misc</span>\n";
	echo "</div>\n";
}

function outputASkill($skill) {
	echo "<div id=\"".$skill["name"]."\" class=\"skill\">";
	echo "	<label id=\"".$skill["name"]."-total-label\"><input id=\"".$skill["name"]."-total\" class=\"short-number\" type=\"text\" disabled></label>";
	echo "	<div id=\"".$skill["name"]."-name\" class=\"skill-name highlight\">".implode(" ",array_map('ucfirst',explode(" ",$skill["name"])))."</div>";
	echo "	<label id=\"".$skill["name"]."-trained-label\"><input id=\"".$skill["name"]."-trained\" type=\"checkbox\"></label>";
	echo "	<label id=\"".$skill["name"]."-class-label\"><input id=\"".$skill["name"]."-class\" type=\"checkbox\"></label>";
	echo "	<label id=\"".$skill["name"]."-ability-label\"><input id=\"".$skill["name"]."-ability\" class=\"short-number\" type=\"text\" disabled><span class=\"subscript\">".$skill["ability"]."</span></label>";
	echo "	<label id=\"".$skill["name"]."-rank-label\"><input id=\"".$skill["name"]."-rank\" class=\"short-number\" type=\"text\"></label>";
	echo "	<label id=\"".$skill["name"]."-racial-label\"><input id=\"".$skill["name"]."-racial\" class=\"short-number\" type=\"text\"></label>";
	echo "	<label id=\"".$skill["name"]."-synergy-label\"><input id=\"".$skill["name"]."-synergy\" class=\"short-number\" type=\"text\"></label>";
	echo "	<label id=\"".$skill["name"]."-misc-label\"><input id=\"".$skill["name"]."-misc\" class=\"short-number\" type=\"text\"></label>";
	echo "</div>";
}
?>