/**
 * Theme Customizer custom scripts
 * Control of show/hide events for Customizer
 */
(function($) {

    //Message if WordPress version is less tham 4.0
    if (parseInt(catchadaptive_misc_links.WP_version) < 4) {
        $('.preview-notice').prepend('<span style="font-weight:bold;">' + catchadaptive_misc_links.old_version_message + '</span>');
        jQuery('#customize-info .btn-upgrade, .misc_links').click(function(event) {
            event.stopPropagation();
        });
    }

    //Add Upgrade Button,Theme instruction, Support Forum, Changelog, Donate link, Review, Facebook, Twitter, Google+, Pinterest links 
    $('.preview-notice').prepend('<span id="catchadaptive_upgrade"><a target="_blank" class="button btn-upgrade" href="' + catchadaptive_misc_links.upgrade_link + '">' + catchadaptive_misc_links.upgrade_text + '</a></span>');
    jQuery('#customize-info .btn-upgrade, .misc_links').click(function(event) {
        event.stopPropagation();
    });
   
   //For Color Scheme
    $("#customize-control-catchadaptive_theme_options-color_scheme").live( "change", function() {
        var value = $('#customize-control-catchadaptive_theme_options-color_scheme input:checked').val();
        if ( 'dark' == value ){
            $('#customize-control-header_textcolor .color-picker-hex').iris('color', '#bebebe');

            $('#customize-control-background_color .color-picker-hex').iris('color', '#202020');
        
        }
        else {
            $('#customize-control-header_textcolor .color-picker-hex').iris('color', '#dddddd');

            $('#customize-control-background_color .color-picker-hex').iris('color', '#ffffff');
        }
    });
     
})(jQuery);