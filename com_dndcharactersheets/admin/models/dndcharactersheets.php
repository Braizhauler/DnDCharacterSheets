<?php
/**
 * General Controller of DnDCharacterSheets component
 *
 * @package     Dwarfholm-DnD
 * @subpackage  com_dndcharactersheets
 * @since       0.0.2
 * 
 * @copyright   Copyright (C) 2016 Dwarfholm.com. All rights reserved.
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * HelloWorldList Model
 *
 * @since  0.0.1
 */
class DnDCharacterSheetsModelDnDCharacterSheets extends JModelList
{
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return      string  An SQL query
	 */
	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
 
		// Create the base select statement.
		$query->select('*')
                /*->from($db->quoteName('#__helloworld'));*/
                ->from($db->quoteName('#__dndcs_skill_list'));
 
		return $query;
	}
}