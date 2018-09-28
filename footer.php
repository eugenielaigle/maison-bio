<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maison_Biologique
 */

?>

</div><!-- #content -->


<?php if ( is_front_page() && is_home() ) :?>
<footer id="colophon" class="home-footer">


	<div class="partie-evenements">
		<h4>EVENEMENTS</h4>
		<p class="chapeau">Retrouvez l'ensemble des évènements à venir</p>
		<a class="voir-calendrier" href="<?php bloginfo('url'); ?>/evenements/">
			<p class="reserver"><span class="mask global-bg"></span>VOIR LE CALENDRIER</p>
			<img class="fleche" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg" alt="Voir le Calendrier">
		</a>
	</div>




	<div class="footer-home">
		<h3 class="maison-bio">MAISON BIOLOGIQUE</h3>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-Footer',
			'menu_id'        => 'footer-menu',
		) );
		?>
		<div class="biocoop-footer">
			<p>Sociétaire de BIOCOOP SA depuis 2016</p>
			<img class="biocoop" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo-biocoop.png" alt="Biocoop">
		</div>
	</div>
</footer><!-- #colophon -->





<?php else:?>

	<footer id="colophon" class="article-footer">
		<div class="partie-evenements">
			<h4>EVENEMENTS</h4>
			<p class="chapeau">Retrouvez l'ensemble des évènements à venir</p>
			<a class="voir-calendrier" href="<?php bloginfo('url'); ?>/evenements/">
				<p class="reserver"><span class="mask global-bg"></span>VOIR LE CALENDRIER</p>
				<img class="fleche" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg" alt="Voir le Calendrier">
			</a>
		</div>

		<div class="footer-home">
			<h3 class="maison-bio">MAISON BIOLOGIQUE</h3>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-Footer',
				'menu_id'        => 'footer-menu',
			) );
			?>
			<div class="biocoop-footer">
				<p>Sociétaire de BIOCOOP SA depuis 2016</p>
				<img class="biocoop" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo-biocoop.png" alt="Biocoop">
			</div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
