<?php
/**
 * Partial template for content in room-search.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->
	<div class="entry-content">
			<div class="container">
				<div class="row">			
					<div class="col-md-4 facet-facets">
						<div class="facet-box">
							<h2>Building</h2>
							<?php echo facetwp_display( 'facet', 'building');?>	
							<h2>Room</h2>
							<?php echo facetwp_display( 'facet', 'room_number' );?>
						</div>	
					</div>
					<div class="col-md-8 facet-holder"><!--ALPHA PRIME WORKSHOP LOOP-->
							<div class="row">
								<?php echo facetwp_display( 'template', 'room_data' );?>
							</div>
								<?php echo do_shortcode('[facetwp pager="true"]') ;?>
								<button class="btn btn-alp btn-dark" value="Reset" onclick="FWP.reset()" class="facet-reset" />Reset Filters</button>							
					</div>
				</div>
			</div>	
		</div>

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
