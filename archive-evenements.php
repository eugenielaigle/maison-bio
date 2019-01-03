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


<?php
$today = date( 'Y-m-d' );
 $args = array(
  'post_type' => 'evenements',
  'posts_per_page' => '-1',
  'post_status' => 'publish',
  'meta_key' => 'event_date',
  'orderby' => 'meta_value_num',
  'order' => 'asc',
  'meta_query' => array(
    array(
      'key' => 'event_date',
      'value'   => $today,
      'compare' => '>=',
      'type'    => 'DATE'

    )
  )
);
$query = new WP_Query($args);?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php if ( $query->have_posts() ) : ?>

      <header class="page-header">
        <?php
        the_archive_title( '<h1 class="entry-title">', '</h1>' );
        the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
      </header><!-- .page-header -->

      <?php
      /* Start the Loop */
      while (  $query->have_posts() ) :
       $query->the_post();

        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
         */
        get_template_part( 'template-parts/evenements', get_post_type() );

      endwhile;

      the_posts_navigation();

    else :

      get_template_part( 'template-parts/evenements', 'none' );

    endif;
    ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
