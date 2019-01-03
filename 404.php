<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Maison_Biologique
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main not-found-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<p>Il semblerait que<br>
					cette page n’existe plus.<br>
					Nous vous invitons à revenir<br>
				à l’accueil du site.</p>
			</header>
			<a class="reservation" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<p class="resa">REVENIR A L'ACCUEIL</p>
				<img class="fleche" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg" alt="Réserver">
			</a>
		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
