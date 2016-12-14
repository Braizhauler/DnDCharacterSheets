<?php
/**
 * @package     Dwarfholm-DnD
 * @subpackage  com_dndcharactersheets
 *
 * @copyright   Copyright (C) 2016 Dwarfholm.com. All rights reserved.
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * D&D character sheets Settings class
 *
 * @since  0.0.3
 */
class DnDCharacterSheetsTableSettings extends JTable
{
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__dndcs_settings', 'id', $db);
	}
}