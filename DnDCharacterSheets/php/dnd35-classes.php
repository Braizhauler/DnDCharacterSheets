<?php

function outputClasses() {
	echo "<fieldset id='classes'>";
	foreach(range(1, 3) as $rank) {
		outputAClass($rank);
	}
	echo "</fieldset>";
}

function outputAClass($rank)	{
	echo "<div id=\"class_".$rank."\" class=\"class\">\n";
	echo "	<label id=\"class_".$rank."_name_label\" class=\"class-name\"><input id=\"class_".$rank."_name\"  type=\"text\" />Class</label>\n";
	echo "	<label id=\"class_".$rank."_level_label\" class=\"class-level short-number\"><input id=\"class_".$rank."_level\" type=\"text\" />Level</label>\n";
	echo "</div>\n";
}
?>