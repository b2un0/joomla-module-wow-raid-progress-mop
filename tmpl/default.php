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
} else {
    JHtml::_('behavior.framework', true);
}

JFactory::getDocument()->addStyleSheet(JUri::base(true) . '/modules/' . $module->module . '/tmpl/default.css');
JFactory::getDocument()->addScript(JUri::base(true) . '/modules/' . $module->module . '/tmpl/default.js');
?>
<div class="mod_wow_raid_progress_mop">
    <?php foreach ($raids as $zoneId => $zone) : ?>
        <ul class="z<?php echo $zoneId; ?>">
            <li class="header">
                <?php echo JHtml::_('link', $zone['link'], JText::_('MOD_WOW_RAID_PROGRESS_MOP_ZONE_' . $zoneId), array('target' => '_blank')); ?>
                <span><?php echo JText::sprintf('MOD_WOW_RAID_PROGRESS_MOP_MODE_' . strtoupper($zone['stats']['mode']), $zone['stats']['kills'], count($zone['npcs'])); ?></span>
            </li>
            <li class="npcs<?php echo ($zone['opened'] == true) ? ' open' : ''; ?>">
                <ul>
                    <?php foreach ($zone['npcs'] as $npc => $data) : ?>
                        <li class="npc">
                            <?php echo JHtml::_('link', $data['link'], JText::_('MOD_WOW_RAID_PROGRESS_MOP_NPC_' . $npc), array('target' => '_blank')); ?>
                            <span
                                class="<?php echo ($data['heroic'] === true) ? ' heroic' : (($data['normal'] === true) ? ' normal' : ''); ?>"> </span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>
    <?php endforeach; ?>
</div>