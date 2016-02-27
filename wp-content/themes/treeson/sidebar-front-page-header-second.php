<?php
    /* SIDEBAR */
    if ( dynamic_sidebar( 'front-page-header-second' ) ){
        /* IF NOT EMPTY */    
    }

    else if( (bool)mythemes_mod( 'default-content', true ) ){
        echo '<div class="widget widget_text">';
        echo '<div class="textwidget">';
        echo '<img class="aligncenter" src="' . get_template_directory_uri() . '/media/img/hand.png"/>';
        echo '<h3 style="text-align: center;">' . __( 'Block Model' , 'treeson' ) . '</h3>';
        echo '<p>' . __( 'With Treeson free WordPress theme you can easily combine components in a variety ways for different design projects. It\'s easy!' , 'treeson' ) . '</p>';
        echo '</div>';
        echo '</div>';
    }
?>