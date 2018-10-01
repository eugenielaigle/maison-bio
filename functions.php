<?php
/**
 * Maison Biologique functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Maison_Biologique
 */

function my_function_admin_bar(){
	return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

if ( ! function_exists( 'maison_biologique_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function maison_biologique_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Maison Biologique, use a find and replace
		 * to change 'maison-biologique' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'maison-biologique', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'maison-biologique' ),
			'menu-Footer' => esc_html__( 'Footer', 'maison-biologique' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'maison_biologique_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'maison_biologique_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function maison_biologique_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'maison_biologique_content_width', 640 );
}
add_action( 'after_setup_theme', 'maison_biologique_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function maison_biologique_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'maison-biologique' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'maison-biologique' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'maison_biologique_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function maison_biologique_scripts() {
	wp_enqueue_style( 'maison-biologique-style', get_stylesheet_uri() );

	// style.min.css
	wp_register_style('scss-style', get_template_directory_uri().'/assets/css/style.min.css', array());
	wp_enqueue_style('scss-style');

	// wp_enqueue_script( 'basics', get_template_directory_uri() . '/assets/js/basics.js', array(), '20180904', true );

	wp_enqueue_script( 'maison-biologique-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'maison-biologique-basics', get_template_directory_uri() . '/assets/js/basics.js', array(), '20151215', true );

	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/swiper/dist/js/swiper.min.js', array('jquery'), '4.9.6', true );

	wp_register_script('maison-biologique-home', get_template_directory_uri() . '/assets/js/home.js', array(), '20151215', true );

	if( is_front_page() ):
		wp_enqueue_script('maison-biologique-home');
	endif;

	wp_register_script('maison-biologique-single', get_template_directory_uri() . '/assets/js/single.js', array(), '20151215', true );

	if( is_single() ):
		wp_enqueue_script('maison-biologique-single');
	endif;

	if( is_page('magasins') ):
		wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAH1OZAzr0uHVAKxj270Gg3HnPQrK4yOV8', array(), '3', true );
		wp_enqueue_script( 'google', get_template_directory_uri() . '/assets/js/map.js', array('google-map', 'jquery'), '0.1', true );
	endif;

	wp_enqueue_script( 'maison-biologique-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'maison_biologique_scripts' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';



/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// CUSTOM POST TYPE

function cptui_register_my_cpts() {

	/**
	 * Post Type: evenements.
	 */

	$labels = array(
		"name" => __( "evenements", "maison-biologique" ),
		"singular_name" => __( "evenement", "maison-biologique" ),
		"menu_name" => __( "Evènements", "maison-biologique" ),
		"all_items" => __( "Tous les évènements", "maison-biologique" ),
		"add_new" => __( "Ajouter", "maison-biologique" ),
		"add_new_item" => __( "Ajouter nouvel évènement", "maison-biologique" ),
		"edit_item" => __( "Modifier un évènement", "maison-biologique" ),
		"new_item" => __( "Nouvel évènement", "maison-biologique" ),
		"view_item" => __( "Voir un évènement", "maison-biologique" ),
		"view_items" => __( "Voir tous les évènements", "maison-biologique" ),
		"search_items" => __( "Rechercher un évènement", "maison-biologique" ),
		"not_found" => __( "Pas encore d'évènement créé", "maison-biologique" ),
		"featured_image" => __( "Image à la une", "maison-biologique" ),
		"set_featured_image" => __( "Régler l'image à la une", "maison-biologique" ),
		"remove_featured_image" => __( "Supprimer l'image à la une", "maison-biologique" ),
		"use_featured_image" => __( "Utiliser l'image à la une", "maison-biologique" ),
		"archives" => __( "2vènements", "maison-biologique" ),
		"items_list" => __( "Liste des évènements", "maison-biologique" ),
		"attributes" => __( "Attributs", "maison-biologique" ),
	);

	$args = array(
		"label" => __( "evenements", "maison-biologique" ),
		"labels" => $labels,
		"description" => "(Calendrier)",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "evenements", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "http://localhost/maison-bio/wp-content/uploads/2018/08/calendar-icon-1.png",
		"supports" => array( "title", "editor", "thumbnail", "custom-fields" )
	);

	register_post_type( "evenements", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

/* Retirer les préfixes sur les pages d'archives */
function wpc_remove_archive_title_prefix() {
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	}
	return $title;
}
add_filter('get_the_archive_title', 'wpc_remove_archive_title_prefix');


function wpse_custom_excerpts($limit) {
	return wp_trim_words(get_the_excerpt(), $limit, '&nbsp;&hellip;');
}



function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyAH1OZAzr0uHVAKxj270Gg3HnPQrK4yOV8');
}

add_action('acf/init', 'my_acf_init');

add_filter ( 'wpcf7_support_html5_fallback', '__return_true' );

// CONTACT FORM 7 - ENVOYER COPIE - CHOIX
add_filter( 'wpcf7_additional_mail', 'my3_wpcf7_additional_mail', 10, 2 );
function my3_wpcf7_additional_mail( array $mails, WPCF7_ContactForm $form ) {
	$opts = $form->additional_setting( 'send_email_copy' );
	if ( empty( $opts[0] ) ) {
		return $mails;
	}

  /*
   * $opts[0] = Name of the checkbox field.
   * $opts[1] = Name of the user's email field.
   * $opts[2] = Name of the email template.
   */
  $opts = explode( '|', $opts[0] );
  if ( count( $opts ) < 3 ) {
  	return $mails;
  }

  // Check if we're using a valid Mail template.
  if ( ( 'mail' !== $opts[2] )
  	&& ( 'mail_2' !== $opts[2] ) ) {
  	return $mails;
}

$submission = WPCF7_Submission::get_instance();

  // The user may not want a copy of the email.
$values = $submission->get_posted_data( $opts[0] );
if ( ! is_array( $values ) || empty( $values[0] ) ) {
	return $mails;
}

  // The address to be sent a copy of the email.
$email = $submission->get_posted_data( $opts[1] );
if ( ! wpcf7_is_email( $email ) ) {
	return $mails;
}

$mail = $form->prop( $opts[2] );
if ( $mail && is_array( $mail ) ) {
	$mail['recipient'] = $email;
	$mails[ $opts[2] . '_copy' ] = $mail;
}

return $mails;
}


// CUSTOM DATE CONTACT FORM 7 FORMULAIRE DE RESERVATIOn
function cf7_add_post_id(){

	global $post;
	return get_the_date('l j F Y');
}

add_shortcode('CF7_ADD_POST_ID', 'cf7_add_post_id');


// REDIRIGER APRES FORMULAIRE DE CONTACT
function add_this_script_footer(){ ?>
	<script>
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			setTimeout(function(){
				location = history.go(-1);
			}, 1000);
		}, false );
	</script>
	<?php }
	add_action('wp_footer', 'add_this_script_footer');



// RECHERCHE

// AJAX
	function add_js_scripts() {
		wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true );

// pass Ajax Url to script.js
		wp_localize_script('script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
	}
	add_action('wp_enqueue_scripts', 'add_js_scripts');


	add_action( 'wp_ajax_search', 'search' );
	add_action( 'wp_ajax_nopriv_search', 'search' );

	function search() {
		global $wp_query;
		$search = $_POST['search_val'];
  // var_dump($search);
		$args = array(
			's' => $search,
			'posts_per_page' => 10
		);

		$results_query = new WP_Query($args);
		if ( $results_query->have_posts() ) :

			while ($results_query->have_posts()) : $results_query->the_post();
				get_template_part( 'template-parts/content-search', get_post_type() );
			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

		die();
	}


// GOOGLE ANALYTICS
	add_action('wp_head','my_analytics', 20);

	function my_analytics() {
		?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-85103120-2"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-126639402-1');
		</script>


		<?php
	}

