<?php
	/* SIDEBAR */
    if ( dynamic_sidebar( 'footer-first' ) ){
        /* IF NOT EMPTY */    
    }

    else if( (bool)mythemes_mod( 'default-content', true ) ){
        echo '<div class="widget widget_blog_details">';
        echo '<h1><a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_option( 'blogname' ) . ' - ' . get_option( 'blogdescription' )  ) . '">' . __( 'treeson' , 'treeson' ) . '</a></h1>';
        echo '<p>' . sprintf( __( 'Treeson is clean white multipurpose WordPress theme with creative design.%s Theme comes with nice flat design concept and responsive layout.' , 'treeson' ) , '<br/>' ) . '</p>';
        echo '</div>';
    }
?>