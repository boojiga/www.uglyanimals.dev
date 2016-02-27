<?php
/**
 * The template used for displaying post content in single.php
 *
 * @package Catch Themes
 * @subpackage Clean Box
 * @since Clean Box 0.1 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	/** 
	 * clean_box_before_post_container hook
	 *
	 * @hooked clean_box_single_content_image - 10
	 */
	do_action( 'clean_box_before_post_container' ); ?>

	<div class="entry-container">

		<?php the_time(); ?>

		<div class="entry-content">
			 <div class="lunchsoon change"> <?php the_content(); ?> </div>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links"><span class="pages">' . __( 'Pages:', 'clean-box' ) . '</span>',
					'after'  => '</div>',
					'link_before' 	=> '<span>',
                    'link_after'   	=> '</span>',
				) );
			?>
		</div><!-- .entry-content -->
        
        
        <header class="entry-header">
			<h1 class="entry-title change"><?php the_title(); ?></h1>

			<?php clean_box_entry_meta(); ?>
		</header><!-- .entry-header -->
        
        

		<footer class="entry-footer">
			<?php clean_box_tag_category(); ?>
		</footer><!-- .entry-footer -->
	</div><!-- .entry-container -->
</article><!-- #post-## -->
