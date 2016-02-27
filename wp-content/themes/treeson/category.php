<?php get_header(); ?>

    <?php
        if( (bool)mythemes_mod( 'breadcrumbs', true ) ){
    ?>
            <div class="mythemes-page-header">

                <div class="container">
                    <div class="row">

                        <div class="col-sm-8 col-md-9 col-lg-9">
                    
                            <nav class="mythemes-nav-inline">
                                <ul class="mythemes-menu">
                                    <?php
                                        echo mythemes_breadcrumbs::home();
                                        echo mythemes_breadcrumbs::categories( absint( get_query_var( 'cat' ) ) );
                                    ?>
                                    <li></li>
                                </ul>
                            </nav>
                            <h1><?php _e( 'Category Archives' , 'treeson' ); ?></h1>
                        </div>

                        <div class="col-sm-4 col-md-3 col-lg-3 mythemes-posts-found">
                            <div class="found-details">
                                <?php echo mythemes_breadcrumbs::count( $wp_query ); ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
    <?php
        }
    ?>

    <div class="content">
        <div class="container">
            <div class="row">

                <?php get_template_part( 'templates/loop' ); ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>