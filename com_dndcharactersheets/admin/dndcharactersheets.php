<?php defined('_JEXEC') or die('Restricted access');

/**
 * @package     Dwarfholm-DnD
 * @subpackage  com_dndcharactersheets
 *
 * @copyright   Copyright (C) 2016 Dwarfholm.com. All rights reserved.
 */

$controller = JControllerLegacy::getInstance('DnDCharacterSheets');

$controller->execute(JFactory::getApplication()->input->get('task'));

$controller->redirect();

echo "Admin";