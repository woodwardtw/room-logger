<?php
/**
 * Partial template for content in page.php
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
		 <?php 
		 if(is_user_logged_in()){
		 	acf_form(array(
		        'post_id'       => 'new_post',
		        'new_post'      => array(
		            'post_type'     => 'room',
		            'post_status'   => 'publish'
		        ),
		        'submit_value'  => 'Create new room evaluation'
		    )); 
		 } else {
		 	echo '<a class="btn btn-primary" href="' . wp_login_url( get_permalink() ) . '">Login</a>';
		 }
		 

    	?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
