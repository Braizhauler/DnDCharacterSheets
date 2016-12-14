<?php defined('_JEXEC') or die('Restricted access');
/**
 * General Controller of DnDCharacterSheets component
 *
 * @package     Dwarfholm-DnD
 * @subpackage  com_dndcharactersheets
 * @since       0.0.2
 * 
 * @copyright   Copyright (C) 2016 Dwarfholm.com. All rights reserved.
 */
 
/**
 * CharacterSheetsSettings View
 *
 * @since  0.0.2
 */
jimport('joomla.application.component.view');

class DnDCharacterSheetsViewDnDCharacterSheets extends JViewLegacy
{
	/**
	 * Display the Character Sheet Settings view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Get data from the model
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
 
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
 
			return false;
		}
 
		// Display the template
		parent::display($tpl);
	}
}