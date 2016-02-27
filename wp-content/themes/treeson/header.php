<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
        <header>
            <?php
                $show_header    = false;

                /* FRONT PAGE */
                $on_front_page          = mythemes_mod( 'header-front-page', true );
                $is_enb_front_page      = get_option( 'show_on_front' ) == 'page';
                $is_front_page          = $is_enb_front_page && is_front_page();

                /* BLOG PAGE */
                $on_blog_page           = mythemes_mod( 'header-blog-page', true );

                if( $is_enb_front_page ){
                    $is_blog_page = is_home();
                }
                else{
                    $is_blog_page = is_front_page();
                }

                if( $is_front_page && $on_front_page ){
                    $show_header = true;
                }
                else if( $is_front_page && !$on_front_page ){
                    $show_header = false; 
                }
                else if( $is_blog_page && $on_blog_page ){
                    $show_header = true;
                }
                else if( $is_blog_page && !$on_blog_page ){
                    $show_header = false;
                }
                else if( is_singular( 'post' ) ){
                    $show_header = mythemes_mod( 'header-single-posts', true );
                }
                else if( is_singular( 'page' ) && ! $is_front_page ){
                    $show_header = mythemes_mod( 'header-single-pages', true );
                }
                else{
                    $show_header = mythemes_mod( 'header-templates', true );
                }

                if( $show_header ){
                    get_template_part( 'templates/header' );
                }
            ?>

            <div class="mythemes-poor">
                <div class="container">

                    <div class="row mythemes-nav-small-device">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 mythemes-nav-label">
                            <?php
                                $blog_title         = get_bloginfo( 'name' );
                                $blog_description   = get_bloginfo( 'description' );
                            ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( $blog_title . ' - ' . $blog_description  ) ?>">
                                <?php echo esc_html( $blog_title ); ?>
                            </a>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 mythemes-nav-btn">
                            <button type="button" class="btn-collapse btn-base-nav" data-toggle=".header-nav.base-nav">
                                <i>+</i>
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <nav class="mythemes-nav-inline base-nav header-nav nav-collapse">

                            <?php

                                $args = array(
                                    'theme_location'    => 'header',
                                    'container_class'   => 'nav-wrapper',
                                    'menu_class'        => 'mythemes-menu'
                                );
                                
                                $location = get_nav_menu_locations();
                                if( isset( $location[ 'header' ] ) && $location[ 'header' ] > 0 ){
                                    wp_nav_menu( $args );
                                }else{
                                    $pages = get_posts( array(
                                        'numberposts'   => 7,
                                        'post_type'     => 'page',
                                        'order'         => 'ASC',
                                        'post_parent'   => 0
                                    ) );
                                    
                                    if( !empty( $pages ) ){
                                        echo '<div class="nav-wrapper">';
                                        echo '<ul class="mythemes-menu">';

                                        global $mythemes_curr_ancestor;

                                        foreach( $pages as $p => $item ){
                                            $classes                = '';
                                            $mythemes_curr_ancestor = false;

                                            if( $item -> post_parent > 0 ){
                                                continue;
                                            }

                                            if( is_page( $item -> ID ) ){
                                                $classes = 'current-menu-item';
                                            }

                                            $submenu = mythemes_get_menu_childrens( $item -> ID );

                                            if( !empty( $submenu ) ){
                                                $classes .= 'menu-item-has-children';

                                                if( $mythemes_curr_ancestor  ){
                                                    $classes .= ' current-menu-ancestor';
                                                }
                                            }
                                                
                                            echo '<li class="menu-item ' . esc_attr( $classes ) . '">';
                                            echo '<a href="' . esc_url( get_permalink( $item -> ID ) ) . '" title="' . mythemes_post::title( $item -> ID, true ) . '">' . mythemes_post::title( $item -> ID ) . '</a>';
                                            echo $submenu;
                                            echo '</li>';
                                        }
                                        echo '</ul>';
                                        echo '</div>';
                                    }
                                }
                            ?>
                            </nav>

                        </div>

                    </div>

                </div>
            </div>

        </header>