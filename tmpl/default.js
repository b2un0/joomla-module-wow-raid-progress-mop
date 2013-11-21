if (jQuery) {
    jQuery(document).ready(function ($) {
        $('.mod_wow_raid_progress_mop .header span').click(function () {
            if (jQuery(this).parent().next('li').is(':visible')) {
                jQuery(this).parent().next('li').slideUp('slow');
            } else {
                jQuery('.mod_wow_raid_progress_mop .npcs').slideUp('slow');
                jQuery(this).parent().next('li').slideToggle('slow');
            }
        });
    });
}