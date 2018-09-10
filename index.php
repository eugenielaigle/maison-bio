<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maison_Biologique
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main home-main">
		<?php

		$args = array(
			'post_type'             => 'post',
			'post_status'           => 'publish',
			'posts_per_page' 				=> '-1'
		);

		$results_query = new WP_Query($args);

		$count = 1;
		if ( have_posts() ) :
			if ( is_home() && is_front_page() ) :
				while ($results_query->have_posts()) : $results_query->the_post();
					if($count == 11) :
						$count = 1;
					endif;
					if($count == 1 || $count == 6) :
						$seq = $count == 1 ? "1" : "2";
						?>
						<div class="home-articles-<?php echo $count;?> home-articles sequence-<?php echo $seq; ?>">
							<?php
						endif;

						if($count == 1 || $count == 10) : ?>
							<div class="a-la-une">
								<?php
						elseif ($count == 2 || $count == 6) : ?>
								<div class="quatre-articles">
									<?php
									endif;
									get_template_part( 'template-parts/content', get_post_type() );
									if($count == 1 || $count == 10) : ?>
									</div>
									<?php
						elseif ($count == 5 || $count == 9) : ?>
									</div>
									<?php
								endif;

					if($count == 5 || $count == 10) : ?>
								</div>
								<?php
							endif;
							$count++;
						endwhile;?>

						<?php
					else:
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		endif;

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
