<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maison_Biologique
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">

    <?php
    if ( is_singular() ) :
      the_title( '<h1 class="event-title">', '</h1>' );
      else :?>
        <div class="container-thumbnail">
        <div class="event-thumbnail">
          <?php  maison_biologique_post_thumbnail();?>
        </div>
        </div>
        <div class="infos-event">
          <div class="event-group">
          <div class="event-date">
          <p class="article-date"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><?php  echo get_the_date('l j F');?></a></p>
          </div >
          <?php
                $event_title = get_field('titre_de_levenement');
                if( $event_title ): ?>
                  <h4><?php echo $event_title['titre_ligne_1']; ?>
                    <span><?php echo $event_title['titre_ligne_2']['lettres_en_minuscule_italique']; ?></span>
                    <?php echo $event_title['titre_ligne_2']['lettres_en_majuscules']; ?>
                  </h4>
                <?php endif; ?>
          <p class="entry-date"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><?php the_field('lieu'); ?> / <?php the_field('horaires'); ?></a></p>
          </div>
          <div class="event-excerpt"><?php the_content(); ?></div>
          <a class="reservation" href="">
                <p class="resa">RÉSERVER</p>
                <img class="fleche" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg" alt="Réserver">
              </a>
        </div>
        <?php
      endif;?>

    </header><!-- .entry-header -->
  </article><!-- #post-<?php the_ID(); ?> -->

