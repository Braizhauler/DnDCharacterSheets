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
	 *  @var string message
	 */
	protected $message;
 
	/**
	 * Get the Title
     *
	 * @return  string  The message to be displayed to the user
	 */
	public function getMsg()
	{
		if (!isset($this->message))
		{
			$this->message = "Dungeons & Dragons - 3.5";
		}
 
		return $this->message;
	}
}