
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <a id="close-recherche" href="javascript:history.go(-1)">+</a>
  <div id="primary" class="content-area">
    <main id="main" class="site-main resa-main contact-main">
      <header class="entry-header">
        <?php
        $event_title = get_field('titre_de_levenement');
        if( $event_title ): ?>
          <h4><?php echo $event_title['titre_ligne_1']; ?>
          <span><?php echo $event_title['titre_ligne_2']['lettres_en_minuscule_italique']; ?></span>
          <?php echo $event_title['titre_ligne_2']['lettres_en_majuscules']; ?>
        </h4>
      <?php endif; ?>
    <p class="article-date"><?php  echo get_the_date('l j F');?></p>
    <p class="entry-date"><?php the_field('lieu'); ?> / <?php the_field('horaires'); ?></p>
   </header>
    <!-- FORMULAIRE DE RESERVATION -->
    <?php echo do_shortcode( '[contact-form-7 id="192" title="Formulaire de réservation"]' ); ?>


  </main>
</div>

<?php wp_footer(); ?>

</body>
</html>
