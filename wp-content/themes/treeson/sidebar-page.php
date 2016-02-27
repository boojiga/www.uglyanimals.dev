<?php
    /* SIDEBAR */
    if ( dynamic_sidebar( 'page' ) ){
        /* IF NOT EMPTY */    
    }

    else if( (bool)mythemes_mod( 'default-content', true ) ){
        echo '<div class="widget widget_text">';
        echo '<div class="textwidget">';
        echo '<h4 class="widget-title">' . __( 'Default Content' , 'treeson' ) . '</h4>';
        echo '<p>' . __( 'You can hide all default content from sidebars if you go to Admin Dashboard &rsaquo; Appearance &rsaquo; Customize &rsaquo; Additional and disable option "Display default content".' , 'treeson' ) . '</p>';
        echo '</div>';
        echo '</div>';
    }
?>