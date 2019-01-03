<?php
/*
*
*
* Template Name: Contributeurs
*
*
*/
get_header();?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <header class="entry-header-a-propos width-contributeurs">
      <?php the_title( '<h1 class="entry-title contributeurs-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content-contributeurs">
      <div class="swiper-container">
      <div class="trombi swiper-wrapper">
        <?php if( have_rows('contributeur') ):
          while ( have_rows('contributeur') ) : the_row();?>
           <div class="contributeur swiper-slide">
            <div class="container-photo">
            <img src="<?php the_sub_field('photo');?>" alt="<?php the_sub_field('nom');?>">
            </div>
            <p class="nom-contributeur">
              <?php the_sub_field('nom');?>
            </p>
            <p class="profession-contributeur">
              <?php the_sub_field('profession');?>
            </p>
          </div>

        <?php endwhile;
      endif;?>
    </div>
    </div>
    <div class="contributeurs-infos">
      <?php the_field('devenir_contributeur'); ?>
      <a class="devenir-contributeur" href="<?php bloginfo('url'); ?>/contact-contributeurs/">
      <p class="reserver"><span class="mask"></span>DEVENEZ CONTRIBUTEUR TERRITORIAL</p>
      <img class="fleche" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg" alt="Devenir contributeur">
    </a>
    </div>


  </div><!-- .entry-content -->
</main>
</div>

<?php get_footer(); ?>

