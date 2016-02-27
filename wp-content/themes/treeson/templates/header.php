<?php
    /* BLOG TITLE & DESCRIPTION  */
    $blog_title             = esc_attr( get_bloginfo( 'name' ) );
    $blog_description       = esc_attr( get_bloginfo( 'description' ) );

    /* HEADER HEIGHT */
    $header_height          = absint( mythemes_mod( 'header-height' , 350 ) );

    /* HEADER MASK */
    $header_mask_color      = esc_attr( mythemes_mod( 'header-mask-color', '#000000' ) );
    $header_mask_opacity    = floatval( absint( mythemes_mod( 'header-mask-opacity' , 80 ) ) / 100 );

    /* HEADER FIRST BUTTON */
    $first_btn_url          = esc_url( mythemes_mod( 'first-btn-url', home_url( '#' ) ) );
    $first_btn_label        = esc_html( mythemes_mod( 'first-btn-label', __( 'First Button', 'treeson' ) ) );
    $first_btn_description  = esc_attr( mythemes_mod( 'first-btn-description', __( 'first button link description...', 'treeson' ) ) );
    $first_btn_target       = (bool)mythemes_mod( 'first-btn-target', true );

    /* HEADER SECOND BUTTON */
    $second_btn_url         = esc_url( mythemes_mod( 'second-btn-url', home_url( '#' ) ) );
    $second_btn_label       = esc_html( mythemes_mod( 'second-btn-label', __( 'Second Button', 'treeson' ) ) );
    $second_btn_description = esc_attr( mythemes_mod( 'second-btn-description', __( 'second button link description...', 'treeson' ) ) );
    $second_btn_target      = (bool)mythemes_mod( 'second-btn-target', true );

    /* HEADER LOGO */
    $header_logo_           = esc_url( mythemes_mod( 'logo' ) );
    $header_logo            = !empty( $header_logo_ );

    /* HEADER TITLE */
    $header_title           = (bool)mythemes_mod( 'header-title', true );

    /* HEADER DESCRIPTION */
    $header_desc            = (bool)mythemes_mod( 'header-description', true );

    /* HEADER FIRST BUTTON */
    $first_btn              = (bool)mythemes_mod( 'first-btn', true );

    /* HEADER SECOND BUTTON */
    $second_btn             = (bool)mythemes_mod( 'second-btn', true );
?>

<div class="mythemes-header overflow-wrapper parallax-container" style="height: <?php echo absint( $header_height ); ?>px;">
    <div class="valign-cell-wrapper" style="background: rgba( <?php echo mythemes_tools::hex2rgb( esc_attr( $header_mask_color ) ); ?>, <?php echo floatval( $header_mask_opacity ); ?> );">

        <!-- VERTICAL ALIGN CENTER -->
        <div class="valign-cell">
            
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                            /* HEADER BRANDING  */
                            if( $header_logo ){
                                echo '<a class="mythemes-logo" href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( $blog_title . ' - ' . $blog_description ) . '">';
                                echo '<img src="' . esc_url( $header_logo_ ) . '" title="' . esc_attr( $blog_title . ' - ' . $blog_description ) . '"/>';
                                echo '</a>';
                            }

                            /* HEADER TITLE */
                            if( $header_title ){
                                echo '<a class="header-title" href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( $blog_title . ' - ' . $blog_description ) . '">';
                                bloginfo( 'name' );
                                echo '</a>';
                            }

                            /* HEADER DESCRIPTION */
                            if( $header_desc ){
                                echo '<a class="header-description" href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( $blog_title . ' - ' . $blog_description ) . '">';
                                bloginfo( 'description' );
                                echo '</a>';
                            }
                        ?>
                    </div>
                </div>
                
        </div>
    </div>

    <?php
        if( $first_btn || $second_btn ){
    ?>
            <div class="valign-bottom-cell-wrapper header-button-wrapper">
                <div class="valign-cell">
                <?php
                    /* HEADER FIRST BUTTON */
                    if( $first_btn ){
                        echo '<a href="' . esc_url( $first_btn_url ) . '" ';

                        if( $first_btn_target ){
                            echo 'target="_blank" ';
                        }

                        echo 'class="btn first-btn header-button" title="' . esc_attr( $first_btn_description ) . '">';
                        echo esc_html( $first_btn_label );
                        echo '</a>';
                    }

                    /* HEADER SECOND BUTTON */
                    if( $second_btn ){
                        echo '<a href="' . esc_url( $second_btn_url ) . '" ';

                        if( $second_btn_target ){
                            echo 'target="_blank" ';
                        }

                        echo 'class="btn second-btn header-button" title="' . esc_attr( $second_btn_description ) . '">';
                        echo esc_html( $second_btn_label );
                        echo '</a>';
                    }
                ?>
                </div>
            </div>
    <?php
        }
    ?>

    <?php
        $header_image = esc_url( get_header_image() );

        if( !empty( $header_image ) ){
            echo '<div class="parallax" style="background-image: url(' . esc_url( $header_image ) . ');">';
            echo '<img src="' . esc_url( $header_image ) . '" alt="' . esc_attr( $blog_title . ' - ' . $blog_description ) . '">';
            echo '</div>';
        }
    ?>
</div>