<?php defined('_JEXEC') or die('Restricted access');
/**
 * @package     Dwarfholm-DnD
 * @subpackage  com_dndcharactersheets
 *
 * @copyright   Copyright (C) 2016 Dwarfholm.com. All rights reserved.
 */
jimport('joomla.application.component.view');

class DnDCharacterSheetsViewDefault extends JViewLegacy
{
	function display($tpl = null)
	{
		$this->msg = 'Character Sheet front end --Default View';
		parent::display($tpl);
	}
}