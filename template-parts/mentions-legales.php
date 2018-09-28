<?php
/*
*
*
* Template Name: Mentions légales
*
*
*/
get_header();?>

<div class="container-content">
  <div class="container-mentions">
    <div class="row">
      <div>
        <p class="propriete">Le site internet www.maisonbiologique.fr est la propriété de :</p>
        <div class="proprietaire"><?php the_field('proprietaire'); ?></div>
      </div>
    </div>
    <div class="row-infos">
      <div class="mentions-area">
        <p class="sous-titre-mentions">Hébergement</p>
        <h3 class="mentions-name"><?php the_field('hebergement_nom'); ?></h3>
        <div class="mentions-adress"><?php the_field('hebergement_adresse'); ?></div>
      </div>
      <div class="col-md-4 mentions-area mentions-edit">
        <p class="sous-titre-mentions">Design et Ergonomie</p>
        <h3 class="mentions-name"><?php the_field('design_nom'); ?></h3>
        <div class="mentions-adress"><?php the_field('design_adresse'); ?></div>
      </div>


    <?php $infos = get_field('infos_sup_paragraphe');
    if (!empty($infos)):  ?>
      <div class="mentions-area mentions-edit">
        <p class="sous-titre-mentions">Développement</p>
        <h3 class="mentions-name"><?php the_field('editeur_integrateur'); ?></h3>
        <div class="mentions-adress"><?php the_field('editeur_integrateur_adresse'); ?></div>
      </div>

      <div class="mentions area mentions-edit">
        <h3 class="mentions-name"><?php the_field('infos_sup'); ?></h3>
        <div class="mentions-adress"><?php the_field('infos_sup_paragraphe'); ?></div>
      </div>
  <?php else: ?>
     <div class="mentions-area mentions-edit">
        <p class="sous-titre-mentions">Développement</p>
        <h3 class="mentions-name"><?php the_field('editeur_integrateur'); ?></h3>
        <div class="mentions-adress"><?php the_field('editeur_integrateur_adresse'); ?></div>
      </div>

  <?php endif; ?>
  </div>
  </div>
</div>




<?php get_footer(); ?>
