<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maison_Biologique
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<?php if(is_page('a-propos')): ?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/a-propos', 'page' );

		endwhile; // End of the loop.
		?>

<?php else: ?>

<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
