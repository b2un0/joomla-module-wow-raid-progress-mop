window.wow = window.wow || {};

window.wow.mod_wow_raid_progress_mop = function () {
    jQuery('.mod_wow_raid_progress_mop .header').click(function () {
        if (jQuery(this).next('li').is(':visible')) {
            jQuery(this).next('li').slideUp('slow');
        } else {
            jQuery('.mod_wow_raid_progress_mop .npcs').slideUp('slow');
            jQuery(this).next('li').slideToggle('slow');
        }
    });
}

if (jQuery) {
    jQuery(document).ready(window.wow.mod_wow_raid_progress_mop);
}