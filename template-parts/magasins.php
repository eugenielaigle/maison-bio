<?php
/*
*
*
* Template Name: Magasins
*
*
*/
get_header();?>

<div id="primary" class="content-area">
  <main id="main" class="site-main mag-main">
    <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    <?php
    if(have_rows('magasins')):
      $count = 1;
      while (have_rows('magasins') ) : the_row();
        // <!-- MAGASIN 1 -->
        $nomlieu = get_sub_field('nom_du_lieu');
        if (!empty($nomlieu)):?>
        <div class="magasin-<?php echo $count;?> magasins">
          <div class="magasin">
            <p class="nom-du-lieu"><?php the_sub_field('nom_du_lieu');?></p>
            <h2 class="ville"><?php the_sub_field('ville');?></h2>
            <div class="adresse-horaires">
             <?php the_sub_field('adresse');?>
             <?php the_sub_field('horaires');?>
           </div>
           <p class="tel">Tel. <?php the_sub_field('telephone');?></p>
           <a class="reservation" href="<?php bloginfo('url'); ?>/contact-<?php the_sub_field('ville');?>/">
            <p class="contacter">NOUS CONTACTER PAR MAIL</p>
            <img class="fleche" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg" alt="Réserver">
          </a>
        </div>
        <div class="photo-magasin">
          <img src="<?php the_sub_field('photo_magasin'); ?>">
        </div>
      </div>
      <?php endif; ?>
      <!-- GOOGLE MAP -->
      <?php
      $count++;
      if ($count == 2) {
        $_markers = get_field('map_markers');
        if(is_array($_markers)){
          echo '<div class="acf-map">';
          foreach($_markers as $value){

            $marker_location    = $value['marker']; // map marker data
            $marker_description = $value['description']; // map marker description
            ?>

            <div class="marker" data-lat="<?php echo $marker_location['lat']; ?>" data-lng="<?php echo $marker_location['lng']; ?>">
              <?php echo $marker_description ?>
            </div>
            <?php
          }
        echo '</div>'; // .acf-map
      }?>

    <?php }
  endwhile;

else :

    // no rows found

endif;

?>

</main>
</div>

<?php get_footer(); ?>
