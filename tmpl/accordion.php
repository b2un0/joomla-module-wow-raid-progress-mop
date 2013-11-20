<?php

/**
 * @author     Branko Wilhelm <branko.wilhelm@gmail.com>
 * @link       http://www.z-index.net
 * @copyright  (c) 2013 Branko Wilhelm
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

if (JVersion::isCompatible('3')) {
    JHtml::_('jquery.framework');
}else{
    JHtml::_('behavior.framework', true);
}

JFactory::getDocument()->addStyleSheet(JUri::base(true) . '/modules/' . $module->module . '/tmpl/accordion.css');
JFactory::getDocument()->addScript(JUri::base(true) . '/modules/' . $module->module . '/tmpl/accordion.js');
?>
<ul class="mod_wow_raid_progress_mop">
    <?php foreach ($raids as $zoneId => $zone) : ?>
        <li class="zone<?php echo $zoneId; ?>">
            <h4><?php echo JText::_('MOD_WOW_RAID_PROGRESS_MOP_ZONE_' . $zoneId); ?></h4>
            <ul>
                <?php foreach ($zone['npcs'] as $npc => $modes) : ?>
                    <?php $class = ($modes['normal'] === true) ? ' normal' : ''; ?>
                    <?php $class = ($modes['heroic'] === true) ? ' heroic' : $class; ?>
                        <li class="npc<?php echo $npc . $class; ?>"><?php echo JText::_('MOD_WOW_RAID_PROGRESS_MOP_NPC_' . $npc); ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>
</ul>