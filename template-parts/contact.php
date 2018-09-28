<?php
/*
*
*
* Template Name: Contact
*
*
*/?>
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
  <main id="main" class="site-main contact-main">
    <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>



<?php echo do_shortcode( '[contact-form-7 id="243" title="Formulaire de contact"]' ); ?>
</main>
</div>

<?php wp_footer(); ?>

</body>
</html>
