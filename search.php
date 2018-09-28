<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Maison_Biologique
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main category-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header category-header">
				<h1 class="entry-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( '%s', 'maison-biologique' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			$count = 1;
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				if($count == 11) :
					$count = 1;
				endif;
				if($count == 1) :
					?>
					<div class="category-articles-<?php echo $count;?> category-articles sequence">
						<?php
					endif;

				get_template_part( 'template-parts/content', 'search' );

				if($count == 10) : ?>
				</div>
				<?php
			endif;
			$count++;
		endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
