<?php
    /* SIDEBAR */
    if ( dynamic_sidebar( 'special-page' ) ){
        /* IF NOT EMPTY */    
    }

    else if( (bool)mythemes_mod( 'default-content', true ) ){
        echo '<div class="widget widget_text">';
        echo '<h4 class="widget-title">' . __( 'Contact Us' , 'treeson' ) . '</h4>';
        echo '<div class="textwidget">';
        echo sprintf( __( 'facebook: %s' , 'treeson' ) , ' <a href="#">https://facebook.com/#</a>' ) . '<br>';
        echo sprintf( __( 'direct: %s' , 'treeson' ) , ' <a href="#">http://your-website.com/#</a>' ) . '<br>';
        echo '</div>';
        echo '</div>';

        echo '<div class="widget widget_text">';
        echo '<h4 class="widget-title">' . __( 'Working Hours' , 'treeson' ) . '</h4>';
        echo '<div class="textwidget">';
        echo '08:00 - 17:00<br/>';
        echo __( 'Monday to Friday' , 'treeson' );
        echo '</div>';
        echo '</div>';

        echo '<div class="widget widget_text">';
        echo '<h4 class="widget-title">' . __( 'Address' , 'treeson' ) . '</h4>';
        echo '<div class="textwidget">';
        echo '1 Infinite Loop<br/>Cupertino, CA 95014, USA';
        echo '</div>';
        echo '</div>';
    }
?>