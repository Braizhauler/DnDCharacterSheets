<?php defined('_JEXEC') or die('Restricted access');
/**
 * @package     Dwarfholm-DnD
 * @subpackage  com_dndcharactersheets
 *
 * @copyright   Copyright (C) 2016 Dwarfholm.com. All rights reserved.
 */
jimport('joomla.application.component.view');

class DnDCharacterSheetsViewDnDCharacterSheets extends JViewLegacy
{
	function display($tpl = null)
	{
		$this->msg = "Hello world\n";//$this->get('Msg');
		$this->msg .= $this->get('Msg');
		$this->msg .= "Line Added\n";
		if (count($errors = $this->get('Errors')))
		{
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');
			return false;
		}
		parent::display($tpl);
	}
}