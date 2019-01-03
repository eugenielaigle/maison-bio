<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maison_Biologique
 */


// query_posts('showposts=5');
// $ids = array();
// while (have_posts()) : the_post();
// $ids[] = get_the_ID();
// the_title();
// endwhile;

// query_posts(array('post__not_in' => $ids, 'showposts=5'));
// while (have_posts()) : the_post();
// the_title();
// endwhile;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			else :?>
				<div class="entry-thumbnail">
					<?php  maison_biologique_post_thumbnail();?>
				</div>
				<div class="infos-article">
					<div class="category-date">
					<h3 class="entry-category"><?php the_category(); ?></h3>
					<p class="article-date"><?php  echo get_the_date('j M. Y');?></p>
					</div>
					<div class="bloc-title">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php  the_title();?></a></h2>
					<p class="entry-date"><?php  echo get_the_date('j M. Y');?> par <?php the_field('author'); ?></p>
					</div>
					<div class="entry-excerpt-une"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo wpse_custom_excerpts(30); ?></a></div>
					<div class="entry-excerpt"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo wpse_custom_excerpts(15); ?></a></div>
					<hr>
				</div>
				<?php
			endif;?>

		</header><!-- .entry-header -->



		<div class="entry-content">
			<?php
		// the_content( sprintf(
		// 	wp_kses(
		// 		/* translators: %s: Name of current post. Only visible to screen readers */
		// 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'maison-biologique' ),
		// 		array(
		// 			'span' => array(
		// 				'class' => array(),
		// 			),
		// 		)
		// 	),
		// 	get_the_title()
		// ) );

		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maison-biologique' ),
		// 	'after'  => '</div>',
		// ) );
			?>
		</div><!-- .entry-content -->

	</article><!-- #post-<?php the_ID(); ?> -->

