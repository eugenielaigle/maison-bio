<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maison_Biologique
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main category-main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header category-header">
				<?php
				$category = get_the_archive_title();
				$apprendre = get_category(3)->name;
				$apprendre_link = get_category_link(3);
				$explorer = get_category(2)->name;
				$explorer_link = get_category_link(2);
				$agir = get_category(4)->name;
				$agir_link = get_category_link(4);

				if ($category == 'EXPLORER'){?>
					<a class="category-link" href="<?php echo esc_url($apprendre_link); ?>">
						<img class="fleche fleche-switch" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg">
						<p><?php echo $apprendre;?></p>
					</a>
					<div>
						<?php
						the_archive_title( '<h1 class="entry-title">', '</h1>' );
						$count = $GLOBALS['wp_query']->found_posts;
						echo '<div class="archive-description"><p>(' . $count . ' articles)</p></div>';?>
					</div>
					<a class="category-link" href="<?php echo esc_url($agir_link); ?>">
						<p><?php echo $agir;?></p>
						<img class="fleche" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg">
					</a>
					<?php
					$args = array(
						'posts_per_page' => '-1',
						'cat' => 2
					);
				}

				elseif ($category == 'AGIR'){?>
					<a class="category-link" href="<?php echo esc_url($explorer_link); ?>">
						<img class="fleche fleche-switch" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg">
						<p><?php echo $explorer;?></p>
					</a>
					<div>
						<?php
						the_archive_title( '<h1 class="entry-title">', '</h1>' );
						$count = $GLOBALS['wp_query']->found_posts;
						echo '<div class="archive-description"><p>(' . $count . ' articles)</p></div>';
						?>
					</div>
					<a class="category-link" href="<?php echo esc_url($apprendre_link); ?>"><p><?php echo $apprendre;?></p>
						<img class="fleche" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg">
					</a>
					<?php
					$args = array(
						'posts_per_page' 				=> '-1',
						'cat' => 4
					);
				}

				elseif ($category == 'APPRENDRE'){?>
					<a class="category-link"	href="<?php echo esc_url($agir_link); ?>">
						<img class="fleche fleche-switch" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg">
						<p><?php echo $agir;?></p>
					</a>
					<div>
						<?php
						the_archive_title( '<h1 class="entry-title">', '</h1>' );
						$count = $GLOBALS['wp_query']->found_posts;
						echo '<div class="archive-description"><p>(' . $count . ' articles)</p></div>';
						?>
					</div>
					<a class="category-link" href="<?php echo esc_url($explorer_link); ?>">
						<p><?php echo $explorer;?></p>
						<img class="fleche" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg">
					</a>

					<?php
					$args = array(
						'posts_per_page' 				=> '-1',
						'cat' => 3
					);
				}


				?>
			</header><!-- .page-header -->

			<?php


			$results_query = new WP_Query($args);

			$count = 1;
			/* Start the Loop */
			while ($results_query->have_posts()) : $results_query->the_post();
				if($count == 11) :
					$count = 1;
				endif;
				if($count == 1) :
					?>
					<div class="category-articles-<?php echo $count;?> category-articles sequence">
						<?php
					endif;

				get_template_part( 'template-parts/content', get_post_type() );

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
</div><!-- #primary -->

<?php
get_footer();
