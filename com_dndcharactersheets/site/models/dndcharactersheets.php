<?php defined('_JEXEC') or die('Restricted access');
/**
 * @package     Dwarfholm-DnD
 * @subpackage  com_dndcharactersheets
 *
 * @copyright   Copyright (C) 2016 Dwarfholm.com. All rights reserved.
 */
class DnDCharacterSheetsModelDnDCharacterSheets extends JModelItem
{
	/**
	 *  @var string title
	 */
	protected $title;
 
	/**
	 * Get the Title
     *
	 * @return  string  The message to be displayed to the user
	 */
	public function getTitle()
	{
		if (!isset($this->title))
		{
			$this->title = 'Dungeons & Dragons - 3.5';
		}
 
		return $this->title;
	}
}