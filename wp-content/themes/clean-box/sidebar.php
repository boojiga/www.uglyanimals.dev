<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Clean Box Catch Themes
 * @subpackage Clean Box
 * @since Clean Box 0.1 
 */
?>

<?php
/** 
 * clean_box_before_secondary hook
 */
do_action( 'clean_box_before_secondary' );?>
	
<?php
	global $post, $wp_query;

	$options = clean_box_get_theme_options();
	
	$themeoption_layout = $options['theme_layout'];
	
	// Front page displays in Reading Settings
	$page_on_front = get_option('page_on_front') ;
	$page_for_posts = get_option('page_for_posts'); 

	// Get Page ID outside Loop
	$page_id = $wp_query->get_queried_object_id();	
	
	// Blog Page or Front Page setting in Reading Settings
	if ( $page_id == $page_for_posts || $page_id == $page_on_front ) {
        $layout 		= get_post_meta( $page_id,'clean-box-layout-option', true );
        $sidebaroptions = get_post_meta( $page_id, 'clean-box-sidebar-options', true );
    }
	else if ( is_singular() ) {
		if ( is_attachment() ) { 
			$parent 		= $post->post_parent;
			$layout 		= get_post_meta( $parent, 'clean-box-layout-option', true );
			$sidebaroptions = get_post_meta( $parent, 'clean-box-sidebar-options', true );
			
		} else {
			$layout 		= get_post_meta( $post->ID, 'clean-box-layout-option', true ); 
			$sidebaroptions = get_post_meta( $post->ID, 'clean-box-sidebar-options', true ); 
		}
	}
	else {
		$sidebaroptions = '';
		$layout = 'default';
	}

	//check empty and load default
	if( empty( $layout ) ) {
		$layout = 'default';
	}
	
	if( 'no-sidebar' == $layout ) {
		return;
	}

	if( 'default' == $layout && ( 'no-sidebar' == $themeoption_layout ) ) {
		return;
	}

	do_action( 'clean_box_before_primary_sidebar' ); 
	?>   
		<aside class="sidebar sidebar-primary widget-area" role="complementary">
			<?php
			if ( is_active_sidebar( 'sidebar-optional-one' ) && $sidebaroptions == 'optional-sidebar-one' ) {
	        	dynamic_sidebar( 'sidebar-optional-one' ); 
	   		}
			elseif ( is_active_sidebar( 'sidebar-optional-two' ) && $sidebaroptions == 'optional-sidebar-two' ) {
	        	dynamic_sidebar( 'sidebar-optional-two' ); 
	   		}
			elseif ( is_active_sidebar( 'sidebar-optional-three' ) && $sidebaroptions == 'optional-sidebar-three' ) {
	        	dynamic_sidebar( 'sidebar-optional-three' ); 
	   		}
			elseif ( is_active_sidebar( 'sidebar-optional-homepage' ) && ( is_front_page() || ( is_home() && $page_id != $page_for_posts ) ) ) {
	        	dynamic_sidebar( 'sidebar-optional-homepage' ); 
	   		}
			elseif ( is_active_sidebar( 'sidebar-optional-archive' ) && ( $page_id == $page_for_posts || is_archive() || is_page_template( 'page-blog.php' ) ) ) {
	        	dynamic_sidebar( 'sidebar-optional-archive' ); 
	    	}					
			elseif ( is_page() && is_active_sidebar( 'sidebar-optional-page' ) ) {
				dynamic_sidebar( 'sidebar-optional-page' ); 
			}	
			elseif ( is_single() && is_active_sidebar( 'sidebar-optional-post' ) ) {
				dynamic_sidebar( 'sidebar-optional-post' ); 
			}	
			elseif ( is_active_sidebar( 'primary-sidebar' ) ) {
	        	dynamic_sidebar( 'primary-sidebar' ); 
	   		}	
			else { 
				//Helper Text
				if ( current_user_can( 'edit_theme_options' ) ) { ?>
					<section id="widget-default-text" class="widget widget_text">	
						<div class="widget-wrap">
		                	<h4 class="widget-title"><?php _e( 'Primary Sidebar Widget Area', 'clean-box' ); ?></h4>
		           		
		           			<div class="textwidget">
		                   		<p><?php _e( 'This is the Primary Sidebar Widget Area if you are using a two column site layout option.', 'clean-box' ); ?></p>
		                   		<p><?php printf( __( 'By default it will load Search and Archives widgets as shown below. You can add widget to this area by visiting your <a href="%s">Widgets Panel</a> which will replace default widgets.', 'clean-box' ), admin_url( 'widgets.php' ) ); ?></p>
		                 	</div>
		           		</div><!-- .widget-wrap -->
		       		</section><!-- #widget-default-text -->
				<?php
				} ?>
				<section class="widget widget_search" id="default-search">
					<div class="widget-wrap">
						<?php get_search_form(); ?>
					</div><!-- .widget-wrap -->
				</section><!-- #default-search -->
				<section class="widget widget_archive" id="default-archives">
					<div class="widget-wrap">
						<h4 class="widget-title"><?php _e( 'Archives', 'clean-box' ); ?></h4>
						<ul>
							<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
						</ul>
					</div><!-- .widget-wrap -->
				</section><!-- #default-archives -->
				<?php 
			}
			?>
		</aside><!-- .sidebar sidebar-primary widget-area -->
	<?php
	/** 
	 * clean_box_after_primary_sidebar hook
	 */
	do_action( 'clean_box_after_primary_sidebar' ); ?>

<?php
/** 
 * clean_box_after_secondary hook
 *
 */
do_action( 'clean_box_after_secondary' );
