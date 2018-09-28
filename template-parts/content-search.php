<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maison_Biologique
 */

?>
<?php if ( 'post' === get_post_type() ) : ?>
<article id="post-<?php the_ID(); ?>"  <?php post_class('post'); ?>>
	<header class="entry-header">

					<div class="entry-thumbnail">
					<?php  maison_biologique_post_thumbnail();?>
				</div>
				<div class="infos-article">
					<div class="category-date">
					<h3 class="entry-category"><?php the_category(); ?></h3>
					<p class="article-date"><?php  echo get_the_date();?></p>
					</div>
					<div class="bloc-title">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php  the_title();?></a></h2>
					<p class="entry-date"><?php  echo get_the_date();?> par <?php the_field('author'); ?></p>
					</div>
					<div class="entry-excerpt-une"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo wpse_custom_excerpts(30); ?></a></div>
					<div class="entry-excerpt"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo wpse_custom_excerpts(10); ?></a></div>
					<hr>
				</div>

	</header><!-- .entry-header -->

</article><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>
