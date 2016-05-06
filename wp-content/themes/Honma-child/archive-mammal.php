<?php
/**
 * Template Name: Mammal
 *
 */
get_header(); ?>
            
		<div id="content">
			<div class="container">
				<div class="shadow_block">
					<div class="inner_page clearfix sidebar_right">
						<div class="page_section">
							<div class="gutter">
							    <h2><?php
								if ( is_day() ) :
									printf( __( 'Daily Archives: %s', 'honma' ), '<span>' . get_the_date() . '</span>' );
								elseif ( is_month() ) :
									printf( __( 'Monthly Archives: %s', 'honma' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'honma' ) ) . '</span>' );
								elseif ( is_year() ) :
									printf( __( 'Yearly Archives: %s', 'honma' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'honma' ) ) . '</span>' );
								else :
									_e( 'Mammal', 'honma' );
								endif;
								?></h2><hr>
								<?php while (have_posts()) : the_post(); ?>
									<?php get_template_part( 'content', 'posts');  ?>								
								<?php endwhile; ?>
                                
                         <?php 
                         
                        //Define your custom post type name in the arguments
                        $args = array('post_type' => 'mammal');
                         
                        //Define the loop based on arguments
                        $loop = new WP_Query( $args );
                         
                        //Display the contents
                        while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                        
                        <h3 class="entry-title"><?php the_title(); ?></h3>
                        <div class="entry-content">
                        <?php the_content(); ?>
                        <p class="entry-content"> <?php echo types_render_field("photo", array()); ?> </p>
                        <p class="entry-content"> <?php echo types_render_field("description", array()); ?> </p>
                        <p class="entry-content"> <?php echo types_render_field("scale", array()); ?> </p>
                        </div>
                        <?php endwhile;?>
                                
								<hr class="separe" />
								<span class="prev"><?php next_posts_link(__('Previous Posts', 'honma')) ?></span>
								<span class="next"><?php previous_posts_link(__('Next posts', 'honma')) ?></span>
							</div>
						</div>
						<?php  get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div> 
<?php get_footer(); ?>