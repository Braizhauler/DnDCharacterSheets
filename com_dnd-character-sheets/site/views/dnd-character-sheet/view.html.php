<?php defined('_JEXEC') or die('Restricted access');
/**
 * @package     Dwarfholm-DnD
 * @subpackage  com_dnd-character-sheets
 *
 * @copyright   Copyright (C) 2016 Dwarfholm.com. All rights reserved.
 */

class HelloWorldViewHelloWorld extends JViewLegacy
{
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = 'Hello World';

		// Display the view
		parent::display($tpl);
	}
}