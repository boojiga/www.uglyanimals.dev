<?php

$facebook_title         = 'Hello my friends. A few minutes ago I found Treeson freemium and easy to customize WordPress theme. I love it! I suggest you to try it! #Treeson';
$facebook_url           = 'http://bit.ly/1Kdq4zC';

$gplus                  = 'http://bit.ly/1UFeynw';
$twitter                = 'Hello my friends. A few minutes ago I found #Treeson freemium and easy to customize WordPress theme. I love it! http://bit.ly/1ODR2jR';

$pinterest_description  = 'Hello my friends. A few minutes ago I found Treeson freemium and easy to customize WordPress theme. I love it! I suggest you to try it! #Treeson';
$pinterest_url          = 'http://bit.ly/1J0WSqd';
$media                  = get_template_directory_uri() . '/screenshot.png';

$mailto_subject          = str_replace( '&amp;', '%26', rawurlencode( 'I suggest you to try Treeson' ) );
$mailto_body             = str_replace( '&amp;', '%26', rawurlencode( 'Hello my friends. A few minutes ago I found Treeson freemium and easy to customize WordPress theme. I love it! I suggest you to try it!' . "\n\n" . 'http://bit.ly/1ihdPrL' ) );


$cfgs   = array(

    /* AUTHOR */
    'author'        => array(
        'name'              => 'myThem.es',
        'description'       => __( 'myThem.es Marketplace provides WordPress themes with the best quality and the smallest prices.' , 'treeson' ),
        'url'               => 'http://mythem.es/'
    ),

    /* THEMES */
    'theme'         => array(
        'type'              => 'free',
        'description'       => __( 'Treeson - free Responsive and Multipupose WordPress Themes.' , 'treeson' ),
        'premium'           => 'http://mythem.es/item/treeson-premium-multipurpose-wordpress-theme/'
    ),

    /* LINKS */
    'links'         => array(
        'referrals'         => 'http://mythem.es/referrals/',
        'affiliates'        => 'http://mythem.es/affiliates/',
        'plugins'           => 'javascript:void(null);',
        'items'             => 'http://mythem.es/our-items/'
    ),

    'faqs'          => array(
        array(
            'title'     => __( 'Welcome Message !' , 'treeson' ),
            'content'   => 

                '<p>' . __( 'Thank you for choosing myThem.es and use one of our WordPress Themes your choice is greatly appreciated!' , 'treeson' ) . '</p>' .

                '<p>' . __( 'If you have any questions ask!' , 'treeson' ) . '</p>' .

                '<p>' . __( 'And please help us to increase the theme quality ( report bugs ).' , 'treeson' ) . '</p>' .

                '<p>' . __( 'Also please help us to increase the theme rank!' , 'treeson' ) . '</p>' .

                '<p><a href="https://wordpress.org/themes/treeson/" target="_blank">https://wordpress.org/themes/treeson/</a></p>' .

                '<br/>' .

                '<div class="mythemes-social">' .

                '<a href="https://www.facebook.com/sharer/sharer.php?display=popup&amp;u=' . urlencode( esc_url( $facebook_url ) ) . '&amp;t=' . urlencode( esc_attr( $facebook_title ) ) . '" class="btn facebook" data-social-network-link="" rel="nofollow" target="_blank" onclick="javascript:window.open( this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600\');return false;"><i class="mythemes-icon-facebook"></i></a>' .
                '<a href="https://plus.google.com/share?url=' . urlencode( esc_url( $gplus ) ) . '" class="btn gplus" data-social-network-link="" rel="nofollow" target="_blank" onclick="javascript:window.open( this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=350,width=480\');return false;"><i class="mythemes-icon-gplus"></i></a>' .
                '<a href="https://twitter.com/intent/tweet?text=' . urlencode( esc_attr( $twitter ) ) . '" class="btn twitter" data-social-network-link="" rel="nofollow" target="_blank" onclick="javascript:window.open(this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600\');return false;"><i class="mythemes-icon-twitter"></i></a>' .
                '<a href="http://pinterest.com/pin/create/button?description=' . urlencode( esc_attr( $pinterest_description ) ) . '&amp;media=' . urlencode( esc_url( $media ) ) . '&amp;url=' . urlencode( esc_url( $pinterest_url ) ) . '" class="btn pinterest" data-social-network-link="" rel="nofollow" target="_blank" onclick="javascript:window.open(this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600\');return false;"><i class="mythemes-icon-pinterest"></i></a>' .
                '<a href="mailto:?Subject=' . esc_attr( $mailto_subject ) . '&amp;Body=' . esc_attr( $mailto_body ) . '" class="btn mail" data-social-network-link="" rel="nofollow" target="_blank" onclick="javascript:window.open(this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600\');return false;"><i class="mythemes-icon-mail"></i></a>' .

                '<div class="clear clearfix"></div>' .

                '</div>'
        ),
        array(
            'title'     => __( 'Default content from Sidebars: Front Page, Footer, Blog, Single.' , 'treeson' ),
            'content'   => 

                '<p><big><strong>' . __( 'GENERAL ABOUT DEFAULT CONTENT' , 'treeson' ) . '</strong></big></p>' .

                '<p>' . __( 'The default content exists only in sidebars !' , 'treeson' ) . '</p>' .
                '<p>' . __( 'The default content is hardcoded in theme files. But you can:' , 'treeson' ) . '</p>' .
                '<p>' . __( '1. Disable all default content and fill with your content.', 'treeson' ) . '</p>' .
                '<p>' . __( '2. Replace only on section or more section with your content.', 'treeson' ) . '</p>' .

                '<div id="mythemes-header-alert" class="mythemes-flat-alert success"><p>' .
                __( 'You can hide all default content if you go to <strong>Admin Dashboard &rsaquo; Appearance &rsaquo; Customize &rsaquo; Additional</strong> and disable option "Display default content".' , 'treeson' ) .
                '</p></div>' .

                '<p>' . __(  'To replace Header - Front Page default content ( from 3 sidebars )' , 'treeson' ) . '</p>' .
                '<p>' . __( 'go to: <strong>Admin Dashboard &rsaquo; Appearance &rsaquo; Widgets</strong>' , 'treeson' ) . '</p>' .
                '<p>' . __( 'here you have multiple sidebars ( can be collapsed ) and also you have next sidebars:' , 'treeson' ) . '</p>' .

                '<p>' . __( '...' , 'treeson' ) . '</p>' .
                '<p>' . __( '...' , 'treeson' ) . '</p>' .
                '<p>' . __( 'Header - First Front Page Sidebar' , 'treeson' ) . '</p>' .
                '<p>' . __( 'Header - Second Front Page Sidebar' , 'treeson' ) . '</p>' .
                '<p>' . __( 'Header - Third Front Page Sidebar' , 'treeson' ) . '</p>' .
                '<p>' . __( '...' , 'treeson' ) . '</p>' .
                '<p>' . __( '...' , 'treeson' ) . '</p>' .

                '<p>' . __( '<strong>IMPORTANT</strong>: if the option "Display default content" is enabled and the Header Sidebars is empty then will be displayed the default content ( hardcoded ) from this sidebar.' , 'treeson' ) . '</p>' .
                '<p>' . __( 'So, just is need to get and put a text widget to a header sidebar and fill the Text widget with you Title and with your Content.' , 'treeson' ) . '</p>' .
                '<p>' . __( '<strong>IMPORTANT</strong>: The widgets are placed in the left and the sidebars are placed in the right ( <strong>Appearance &rsaquo; Widgets</strong> ).' , 'treeson' ) . '</p>' .


                '<br/><hr><br/><br/>' .


                '<p><big><strong>' . __( 'FRONT PAGE' , 'treeson' ) . '</strong></big></p>' .

                '<p>' . __( 'In the home page below the HEADER image there are 3 components that are entitle:' , 'treeson' ) . '</p>' .

                '<br/>' .

                '<p>' . __( '1. MANY COMPONENTS' , 'treeson' ) . '</p>' .
                '<p>' . __( '2. BLOCK MODEL' , 'treeson' ) . '</p>' .
                '<p>' . __( '3. RESPONSIVE LAYOUT' , 'treeson' ) . '</p>' .

                '<br/>' .

                '<p>' . __( 'Here we have three sidebars with default content. These are "Header Front Page Sidebars". If you go to Admin Dashboard &rsaquo; Appearance &rsaquo; Widgets you can see sidebars:' , 'treeson' ) . '</p>' .

                '<br/>' .

                '<p>' . __( '1. Header - First Front Page sidebar' , 'treeson' ) . '</p>' .
                '<p>' . __( '2. Header - Second Front Page sidebar' , 'treeson' ) . '</p>' .
                '<p>' . __( '3. Header - Third Front Page sidebar' , 'treeson' ) . '</p>' .

                '<br/>' .

                '<p>' . __( 'You can replace the default content with your custom content. Just is need to put a "Text" widget to each "Header Front Page Sidebar" and fill it with your content.' , 'treeson' ) . '</p>' .


                '<br/><hr><br/><br/>' .


                '<p><big><strong>' . __( 'FOOTER' , 'treeson' ) . '</strong></big></p>' .

                '<p>' . __( 'In the footer before the copyright section there are 3 components that are entitle:' , 'treeson' ) . '</p>' .

                '<br/>' .

                '<p>' . __( '1. TREESON' , 'treeson' ) . '</p>' .
                '<p>' . __( '2. ADDRESS' , 'treeson' ) . '</p>' .
                '<p>' . __( '3. CONTACT' , 'treeson' ) . '</p>' .

                '<br/>' .

                '<p>' . __( 'Here we have three sidebars with default content. These are "Header Front Page Sidebars". If you go to Admin Dashboard &rsaquo; Appearance &rsaquo; Widgets you can see sidebars:' , 'treeson' ) . '</p>' .

                '<br/>' .

                '<p>' . __( '1. Footer - First Sidebar ( use the widget - Blog Details [myThem.es] )' , 'treeson' ) . '</p>' .
                '<p>' . __( '2. Footer - Second Sidebar ( use the sample Text widget )' , 'treeson' ) . '</p>' .
                '<p>' . __( '3. Footer - Third Sidebar ( use the sample Text widget )' , 'treeson' ) . '</p>' .


                '<br/><hr><br/><br/>'.


                '<p><big><strong>' . __( 'BLOG ( MAIN SIDEBAR )' , 'treeson' ) . '</strong></big></p>' .

                '<p>' . __( 'By default is used content from next widgets: "Search", "Tags Cloud" and "Categories".' , 'treeson' ) . '</p>' .


                '<br/><hr><br/><br/>' .


                '<p><big><strong>' . __( 'SINGLE POST ( SINGLE SIDEBAR )' , 'treeson' ) . '</strong></big></p>' .
                
                '<p>' . __( 'By default is used content from next widgets: "Post Meta [myThem.es]", "Post Categories [myThem.es]" and "Post Tags [myThem.es]".' , 'treeson' ) . '</p>' .


                '<br/><hr><br/><br/>'.


                '<p><big><strong>' . __( 'REPLACE CONTENT VS DISABLE DEFAULT CONTENT' , 'treeson' ) . '</strong></big></p>' .

                '<p>' . __( 'If you disable the default content then it will disable all default content from your web site ( sidebars with default content listed above ):' , 'treeson' ) . '</p>' .

                '<br/>' .

                '<p>' . __( '- Front Page Heade Sidebars' , 'treeson' ) . '</p>' .
                '<p>' . __( '- Footer Sidebars' , 'treeson' ) . '</p>' .
                '<p>' . __( '- Main Blog Sidebar' , 'treeson' ) . '</p>' .
                '<p>' . __( '- Single Sidebar' , 'treeson' ) . '</p>' .
                '<p>' . __( '- ...' , 'treeson' ) . '</p>' .

                '<br/>' .

                '<p>' . __( 'Also you can replace the default content with your content. This will allow you to make one or more changes. You will not need to replace all default content.' , 'treeson' ) . '</p>' .

                '<p>' . __( 'To replace the default content you need to add a widget with your content in the sidebar with default content ( listed above). The default content will automatically change with your content (only for this sidebar).' , 'treeson' ) . '</p>'

        ),
        array(
            'title'     => __( 'Custom CSS and Customizations' , 'treeson' ),
            'content'   => 

                '<p>' . __( 'This theme comes with special option. This option allow add custom css to customize your web site to your needs.' , 'treeson' ) . '</p>' .

                '<p>' . __( 'To use it go to Admin Dashboard' , 'treeson' ) . '</p>' .

                '<p>' . __( 'Appearance &rsaquo; Customize &rsaquo; Others - option "Custom css".' , 'treeson' ) . '</p>' .

                '<p>' . __( 'You can use it for multiple case, just is need to add you css in this field.' , 'treeson' ) . '</p>'
        ),
        array(
            'title'     => __( 'Translate the Theme' , 'treeson' ),
            'content'   => 

                '<p>' . __( 'The theme is <b>Translation Ready</b> but not contain the translated files for each language.', 'treeson' ) . '</p>' .
                '<p>' . __( 'Is need to translate the english file to your languge.' , 'treeson' ) . '</p>' .
                '<p><big><strong>' . __( 'Ho to do this ?', 'treeson' ) . '</strong></big></p>' .

                '<p>' . __( 'Firstly you\'ll need a tool allowing you to translate <b>.po</b> file into your language.' , 'treeson' ) . '</p>' .
                '<p>' . __( 'You can use Poedit application, or CodeStyling  WordPress Plugin.' , 'treeson' ) . '</p>' .
                '<p><a href="http://www.poedit.net/">http://www.poedit.net/</a></p>' .
                '<p><a href="http://www.code-styling.de/english/development/wordpress-plugin-codestyling-localization-en">http://www.code-styling.de/english/development/wordpress-plugin-codestyling-localization-en</a></p>' .

                '<br>' .
                '<ol>' .
                '<li>' . __( 'Unzip the archive <b>treeson.zip</b>  you must have folder <b>treeson</b> with theme files.' , 'treeson' ) . '</li>' .
                '<li>' . __( 'Go to <b>treeson/media/ln/</b> here you can see file <b>en_US.po</b>. Now here create new file, for example <b>fr_FR.po</b> and copy content from en_US.po to <b>fr_FR.po</b> ( to copy content use sample text editor ).' , 'treeson' ) . '</li>' .
                '<li>' . __( 'Open <b>fr_FR.po</b> ( using poeditor ) and start translating each word to your language.' , 'treeson' ) . '</li>' .
                '<li>' . __( 'After you finished, click button <b>Save Catalog</b>, and it will create a new <b>.mo</b> file in the same folder.', 'treeson' ) . '</li>' .
                '<li>' . __( 'Then you\'ll need to open <b>wp-config.php</b> file from the root folder of your WordPress install, and replace this line:' , 'treeson' ) .
                '<br><pre>define (\'WPLANG\', \'\');</pre>' .
                __( 'with something like:' , 'treeson' ) .
                '<br><pre>define (\'WPLANG\', \'fr_FR\');</pre>' .
                '</li>' .
                '<li>'  . __( 'Then make sure that <b>.mo</b> file from <b>treeson_/media/ln/</b> folder of our theme has the same name as your language code: "fr_FR.mo"' , 'treeson' ) . '</li>' . 
                '</ol>' .
                '<br>' .

                '<p>' . __( '<b>IMPORTANT</b>: Is need by one <b>.po</b> file for each language, in case you want to use plugin mqTranslate to enable more languages.' , 'treeson' ) . '</p>' .
                '<p>' . sprintf( __( 'More information you can find here: %s' , 'treeson' ), '<a href="http://www.catswhocode.com/blog/how-to-make-a-translatable-wordpress-theme">http://www.catswhocode.com/blog/how-to-make-a-translatable-wordpress-theme</a>' ) . '</p>'
        ),
        array(
            'title'     => __( 'Customize the Theme' , 'treeson' ),
            'content'   =>

                '<p>' . __( 'This theme comes with a set of options what allow you to customize content, header, layouts, social items and others.' , 'treeson' ) . '</p>' .

                '<p>' . __( 'You can see theme options if you go to Admin Dashboard' , 'treeson' ) . '</p>' .

                '<p>' . __( 'Appearance &rsaquo; Customize' , 'treeson' ) . '</p>' .

                '<p>' . __( 'Here you can see:' , 'treeson' ) . '</p>' .

                '<br/>' .

                '<p>' . __( '01. Site Identity' , 'treeson' ) . '</p>' .
                '<p>' . __( '02. Colors' , 'treeson' ) . '</p>' .
                '<p>' . __( '03. Background Image' , 'treeson' ) . '</p>' .
                '<p>' . __( '04. Header Image' , 'treeson' ) . '</p>' .
                '<p>' . __( '05. Header Elements' , 'treeson' ) . '</p>' .
                '<p>' . __( '06. Breadcrumbs' , 'treeson' ) . '</p>' .
                '<p>' . __( '07. Additional' , 'treeson' ) . '</p>' .
                '<p>' . __( '08. Layout' , 'treeson' ) . '</p>' .
                '<p>' . __( '09. Social' , 'treeson' ) . '</p>' .
                '<p>' . __( '10. Others' , 'treeson' ) . '</p>' .
                '<p>' . __( '11. Menu' , 'treeson' ) . '</p>' .
                '<p>' . __( '12. Widgets' , 'treeson' ) . '</p>' .
                '<p>' . __( '13. Static Front Page' , 'treeson' ) . '</p>' .

                '<br/>' .

                '<p>' . __( 'All you have to do is play with them and view live changes.' , 'treeson' ) . '</p>' .

                '<p>' . __( 'Try and you will discover how easy it is to customize your own style.' , 'treeson' ) . '</p>'
        )

    ),
    'diff'          => array(
        array(
            __( 'Paid Customization' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Support' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Premium Support' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Documentation' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Responsive layout' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Full support for multilanguages' , 'treeson' ),
            0,
            1,
        ),
        array(
            sprintf( __( 'Support for Google Fonts [plugin %s]' , 'treeson' ), '<a href="https://wordpress.org/plugins/easy-google-fonts/" target="_blank">' . __( 'Easy Google Fonts', 'treeson' ) . '</a>' ),
            0,
            1,
        ),
        array(
            __( 'Custom colors' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Quick Contact info' , 'treeson' ),
            0,
            1,
        ),
        array(
            __( 'Custom breadcrumbs settings' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Scrollable header menu' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'WP Classic comments' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Facebook comments' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Disqus comments' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'General header settings' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Single post header settings ( each post )' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Single page header settings ( each page )' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Single portfolio Header settings ( each portfolio )' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Fly Effect on header' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Related Posts ( by Tags or Categories )' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Custom Front Page' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Front Page layout' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Custom post Portfolio' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Custom page template for Portfolios' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Portfolios archives' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Portfolios layouts ( page / single / archive )' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'General layout settings' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Posts layout settings' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Single post layout settings ( each post )' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Page layout settings' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Single page layout settings ( each page )' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Sidebar builder ( build unlimited number of sidebars )' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Social settings' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Footer background image' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Footer background color' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Footer link and text colors' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Footer copyright settings' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Footer credit link settings' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Footer Custom Menu' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Custom CSS' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Additional JavaScript settings' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Exclude pages / posts / portfolios / features / testimonials from the search results' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Exclude pages / posts / portfolios / features / testimonials from the RSS Feed' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'External URL for each portfolio / post / page' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Video thumbnail extractor - YouTube &amp; Vimeo for each portfolio / post' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Portfolio slideshow instead of thumbnail' , 'treeson' ),
            0,
            1
        ),
        array(
            __( '2 Addvertising section ( before content and after content ) for each portfolio / post' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Custom post Testimonials' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Custom post Features' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Additional Widgets' , 'treeson' ),
            4,
            14
        ),
        array(
            __( 'Additional Shortcodes' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Shortcodes Manager' , 'treeson' ),
            0,
            1
        ),
        array(
            __( 'Gallery special Effects' , 'treeson' ),
            '1',
            '5'
        ),
        array(
            __( 'jetpack widgets [styled]' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'jetpack related posts [styled]' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'jetpack post numbers of views' , 'treeson' ),
            1,
            1
        ),
        array(
            __( 'Contact Form 7 [styled]' , 'treeson' ),
            1,
            1
        )
    )
);

mythemes_cfg::set( $cfgs );
?>