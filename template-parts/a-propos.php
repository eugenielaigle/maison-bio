<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maison_Biologique
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header-a-propos">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->

  <div class="entry-content-a-propos">

    <div class="a-propos-left">
      <?php if( have_rows('colonne_gauche_apropos') ):
        while( have_rows('colonne_gauche_apropos') ): the_row();
          $image1 = get_sub_field('image_1');
          $image2 = get_sub_field('image_2');
          ?>
          <div id="images-apropos">
            <img src="<?php echo $image1; ?>" alt="A propos de Maison Biologique" />
            <img class="xs-invisible" src="<?php echo $image2; ?>" alt="A propos de Maison Biologique" />
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div> <!-- end a propos left -->


    <div class="a-propos-center">
      <div class="a-propos-texte">
        <?php the_field('colonne_centrale_apropos'); ?>
      </div>
    </div> <!-- end a propos center -->


    <div class="a-propos-right">
      <?php if( have_rows('colonne_droite_apropos') ):
        while( have_rows('colonne_droite_apropos') ): the_row();
          $chiffres_cles = get_sub_field('chiffres_cles');
          $image = get_sub_field('image');
          ?>
          <div id="chiffres-cles-apropos">
            <img class="xs-visible" src="<?php echo $image; ?>" alt="A propos de Maison Biologique" />
            <div class="infos-chiffres-cles">
              <h3>Maison Biologique</h3>
              <?php echo $chiffres_cles; ?>
              <a href="https://www.facebook.com/biocoopdouarnenez" target="_blank"><p>facebook/maisonbiologique</p></a>
            </div>
            <img class="xs-invisible" src="<?php echo $image; ?>" alt="A propos de Maison Biologique" />
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div> <!-- end a propos right -->

  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
