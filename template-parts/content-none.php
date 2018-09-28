<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maison_Biologique
 */

?>

<section class="no-results not-found">
	<!-- <header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'maison-biologique' ); ?></h1>
	</header> --><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Prêt(e) à publier votre premier article? <a href="%1$s">Allons-y</a>.', 'maison-biologique' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p class="recherche-none"><?php esc_html_e( 'Il n\'y a pas de résultat pour votre recherche.', 'maison-biologique' ); ?></p>
			<?php


		else :
			?>

			<p class="recherche-none"><?php esc_html_e( 'Il n\'y a pas de résultat pour votre recherche.', 'maison-biologique' ); ?></p>
			<?php


		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
