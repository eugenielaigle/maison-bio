<?php
/*
*
*
* Template Name: Recherche
*
*
*/
get_header();?>

<div id="primary" class="content-area">
  <main id="main" class="site-main searchform-main">


<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>/">
        <label>
          <span class="screen-reader-text" for="s">VOTRE RECHERCHE</span>
          <input type="search" class="search-field" placeholder="VOTRE RECHERCHE" value="" name="s" id="s">
        </label>
        <div class="rechercher">
        <input type="submit" id="search-submit" class="search-submit" value="Rechercher"><img class="fleche" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg" alt="Rechercher">
        </div>
      </form>

      <div class="search-found"></div>


</main>
</div>

<?php get_footer(); ?>
