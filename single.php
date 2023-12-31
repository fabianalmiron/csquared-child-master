<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php get_header();?>


<?php 
while ( have_posts() ) :
	the_post();
	?>

<main id="content" class="elementor-container">
	<div class="page-content">
		<?php the_content(); ?>
	</div>

</main>

	<?php
endwhile; ?> 


<?php get_footer();?>
