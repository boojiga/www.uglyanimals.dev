<?php
    /* SIDEBAR */
    if ( dynamic_sidebar( 'front-page-header-first' ) ){
        /* IF NOT EMPTY */
    }

    else if( (bool)mythemes_mod( 'default-content', true ) ){
        echo '<div class="widget widget_text">';
        echo '<div class="textwidget">';
        echo '<img class="aligncenter" src="' . get_template_directory_uri() . '/media/img/diamond.png"/>';
        echo '<h3 style="text-align: center;">' . __( 'Many Components' , 'treeson' ) . '</h3>';
        echo '<p>' . __( 'There are a lot of different components that will help you to make a perfect suit for startup project with WordPress theme Treeson.' , 'treeson' ) . '</p>';
        echo '</div>';
        echo '</div>';
    }
?>