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
		$this->msg = 'Character Sheet front end';
		parent::display($tpl);
	}
}