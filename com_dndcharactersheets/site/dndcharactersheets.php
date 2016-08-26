<?php defined('_JEXEC') or die('Restricted access');

/**
 * @package     Dwarfholm-DnD
 * @subpackage  com_dnd-character-sheets
 *
 * @copyright   Copyright (C) 2016 Dwarfholm.com. All rights reserved.
 */

$controller = JControllerLegacy::getInstance('DnDCharacterSheets');

$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

$controller->redirect();