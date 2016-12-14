<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<form action="index.php?option=com_dndcharactersheets&view=dndcharactersheets" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('COM_DND_CHARACTER_SHEETS_NUM'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="90%">
				<?php echo JText::_('COM_DND_CHARACTER_SHEETS_DND_CHARACTER_SHEETS_NAME') ;?>
			</th>
			<th width="5%">
				<?php echo JText::_('COM_DND_CHARACTER_SHEETS_SHOWN_BY_DEFAULT'); ?>
			</th>
			<th width="2%">
				<?php echo JText::_('COM_DND_CHARACTER_SHEETS_ID'); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php /*echo $this->pagination->getListFooter();*/ ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) : ?>
 
					<tr>
						<td>
							<?php echo $this->pagination->getRowOffset($i); ?>
						</td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->skill_id); ?>
						</td>
						<td>
							<?php echo $row->skill_name; ?>
						</td>
						<td align="center">
							<?php echo JHtml::_('jgrid.published', $row->shown_by_default, $i, 'dndcharactersheets.', true, 'cb'); ?>
						</td>
						<td align="center">
							<?php echo $row->skill_id; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
</form>