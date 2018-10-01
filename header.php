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
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
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
				<nav id="site-navigation" class="main-navigation top-navigation">
					<div class="border-menu">
						<div class="xs-visible loupe " id="loupe">
									<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/loupe.svg" width="16px" alt="">
								</div>
						<div class="top-menu">
							<a class="nav-home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div class="title-website">
									<!-- <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo-mb.svg" alt="Maison biologique"> -->
									<div class="journal">
										<h2>JOURNAL<sup>#</sup></h2>
									</div>
									<div class="j-article">
										<h2>J<sup>#</sup><span class="maison-bio">MAISON BIOLOGIQUE</span></h2>
										<h3 class="maison-bio xs-visible">MAISON BIOLOGIQUE</h3>
									</div>
									<h3 class="maison-bio mb-article-invisible">MAISON BIOLOGIQUE</h3>
								</div>
							</a>
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/menu-mobile.svg" alt="">
								<p>+</p>
							</button>
							<div class="menu-right">
								<div class="phrase-intro">
									<h3>S'investir sur le territoire du pays de Douarnenez et du Cap Sizun à travers des initiatives responsables.</h3>
									<img class="biocoop" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo-biocoop.png" alt="Biocoop">
								</div>
							</div>
						</div>
						<div class="menu-search">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
							?>
							<div class="recherche">
								<form method="GET" action="<?php echo get_site_url(); ?>">
									<input type="text" placeholder="VOTRE RECHERCHE" value="<?php the_search_query(); ?>" name="s" id="q" autocomplete="off">
								</form>
							</div>
						</div>
					</nav><!-- #site-navigation -->
					<aside class="bandeau-droite">
						<?php
						$args = array(
							'post_type' => ('evenements'),
							'post_status' => 'future',
							'order' => 'asc',
							'showposts' => 3
						);
						$event = new WP_Query($args);
						if ( $event->have_posts() ) : while ( $event->have_posts() ) : $event->the_post();?>
							<div class="event-bloc">
								<a class="link-title" href="<?php the_permalink() ?>">
									<h5 class="the-date"><?php echo get_the_date('j F'); ?></h5>
									<?php
									$event_title = get_field('titre_de_levenement');

									if( $event_title ): ?>
										<h4><?php echo $event_title['titre_ligne_1']; ?></h4>
										<h4>
											<span><?php echo $event_title['titre_ligne_2']['lettres_en_minuscule_italique']; ?></span>
											<?php echo $event_title['titre_ligne_2']['lettres_en_majuscules']; ?>
										</h4>
									<?php endif; ?>
									<h6><?php the_field('horaires'); ?></h6>
								</a>
								<a class="reservation" href="<?php the_permalink(); ?>">
									<p class="reserver"><span class="mask bandeau-bg"></span>RÉSERVER</p>
									<img class="fleche" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg" alt="Réserver">
								</a>
							</div>
						<?php endwhile;
					endif;?>

				</aside>



				<!-- Menu sur les autres pages -->
				<?php else :?>

					<nav id="site-navigation" class="article-navigation main-navigation">
						<div class="border-menu">
							<div class="xs-visible loupe" id="loupe">
									<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/loupe.svg" width="16px" alt="">
								</div>
							<a class="nav-home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">

								<div class="title-website">
									<div class="j-article">
										<h2 id="titre-post-header"><span class="maison-bio"><?php the_title(); ?></span></h2>
										<h2 id="j-post">J<sup>#</sup><span class="maison-bio">MAISON BIOLOGIQUE</span></h2>
										<h3 class="maison-bio xs-visible">MAISON BIOLOGIQUE</h3>
									</div>
								</div>
							</a>
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/menu-mobile.svg" alt="">
							<p>+</p>
						</button>
							<div class="menu-search">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
							?>
							<div class="recherche recherche-post">
								<form method="GET" action="<?php echo get_site_url(); ?>">
									<input type="text" placeholder="VOTRE RECHERCHE" value="<?php the_search_query(); ?>" name="s" id="q" autocomplete="off">
								</form>
							</div>
							</div>
						</div>

					</nav><!-- #site-navigation -->
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
