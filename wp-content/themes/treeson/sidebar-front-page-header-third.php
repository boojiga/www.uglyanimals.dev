<?php
    /* SIDEBAR */
    if ( dynamic_sidebar( 'front-page-header-third' ) ){
        /* IF NOT EMPTY */    
    }

    else if( (bool)mythemes_mod( 'default-content', true ) ){
        echo '<div class="widget widget_text">';
        echo '<div class="textwidget">';
        echo '<img class="aligncenter" src="' . get_template_directory_uri() . '/media/img/rocket.png"/>';
        echo '<h3 style="text-align: center;">' . __( 'Responsive Layout' , 'treeson' ) . '</h3>';
        echo '<p>' . __( 'We haven\'t forgotten about responsive layout. With Treeson free WordPress theme, you can create a website with full mobile support.' , 'treeson' ) . '</p>';
        echo '</div>';
        echo '</div>';
    }
?>