<?php

/**
 * @author     Branko Wilhelm <branko.wilhelm@gmail.com>
 * @link       http://www.z-index.net
 * @copyright  (c) 2013 Branko Wilhelm
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

JFactory::getDocument()->addStyleSheet(JUri::base(true) . '/modules/' . $module->module . '/tmpl/default.css');
?>
<table class="mod_wow_raid_progress_mop">
    <tbody>
    <?php foreach ($raids as $zoneId => $zone) : ?>
        <tr>
            <th class="z<?php echo $zoneId; ?>" colspan="2"><?php echo JText::_('MOD_WOW_RAID_PROGRESS_MOP_ZONE_' . $zone); ?></th>
        </tr>
        <?php foreach ($zone['npcs'] as $npc => $modes) : ?>
            <?php $class = ($modes['normal'] === true) ? ' normal' : ''; ?>
            <?php $class = ($modes['heroic'] === true) ? ' heroic' : $class; ?>
            <tr class="z<?php echo $zone . $class; ?>">
                <td><?php echo JText::_('MOD_WOW_RAID_PROGRESS_MOP_NPC_' . $npc); ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </tbody>
</table>
