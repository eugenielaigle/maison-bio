<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Maison_Biologique
 */

require_once 'Mobile-Detect/Mobile_Detect.php' ;
$detect = new Mobile_Detect ;

get_header();
?>

	<section id="primary" class="content-area">


<?php if ( $detect -> isMobile ()){ ?>
	<main id="main" class="site-main category-main searching-main" style="margin-top: 0">
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>/" style="margin-top: 10vh!important; height: 10vh!important;">
        <label>
          <span class="screen-reader-text" for="s">VOTRE RECHERCHE</span>
          <input type="search" class="search-field" placeholder="VOTRE RECHERCHE" value="<?php the_search_query(); ?>" name="s" id="s" >
        </label>
        <div class="rechercher" style="display:none">
        <input type="submit" id="search-submit" class="search-submit" value="Rechercher"><img class="fleche" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/fleche.svg" alt="Rechercher">
        </div>
      </form>
<?php  }else{?>
	<main id="main" class="site-main category-main searching-main">
	<header class="page-header category-header">
				<h1 class="entry-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( '%s', 'maison-biologique' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
<?php }
		 if ( have_posts() ) : ?>


			<?php
			/* Start the Loop */
			$count = 1;
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				if($count == 11) :
					$count = 1;
				endif;
				if($count == 1) :
					?>
					<div class="category-articles-<?php echo $count;?> category-articles sequence">
						<?php
					endif;

				get_template_part( 'template-parts/content', 'search' );

				if($count == 10) : ?>
				</div>
				<?php
			endif;
			$count++;
		endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
