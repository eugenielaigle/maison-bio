<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maison_Biologique
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'maison-biologique' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">

				<!-- Menu sur page home -->
				<?php if ( is_front_page() && is_home() ) :?>
				<nav id="site-navigation" class="main-navigation">
					<a class="nav-home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div class="brand-image">
						<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo.svg" alt="Maison biologique">
					</div>
					</a>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/menu-mobile.svg" alt=""></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->



				<!-- Menu sur les autres pages -->
				<?php else :?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$maison_biologique_description = get_bloginfo( 'description', 'display' );
			if ( $maison_biologique_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $maison_biologique_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
