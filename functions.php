<?php 


function bouve_bstrp_scripts() {


	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), false, 'all' );
	wp_enqueue_style( 'Lato-font', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap');
	wp_enqueue_style( 'Patua-font', 'https://fonts.googleapis.com/css?family=Patua+One&display=swap');
	// wp_enqueue_style( 'font2', 'https://fonts.googleapis.com/css?family=Catamaran:700|Cutive+Mono');
	// wp_enqueue_style( 'font3', 'https://fonts.googleapis.com/css?family=Catamaran:700|Cutive+Mono|Josefin+Sans:300,300i,400,400i,700,700i');
	// wp_enqueue_style( 'font4', 'https://fonts.googleapis.com/css?family=Permanent+Marker');
	
	wp_enqueue_style('sm_core', get_stylesheet_directory_uri().'/template-parts/header/smartmenus-1.1.0/css/sm-core-css.css' );
	wp_enqueue_style('sm_clean', get_stylesheet_directory_uri().'/template-parts/header/smartmenus-1.1.0/css/sm-clean/sm-clean.css' );
	wp_enqueue_style('custom-sm-clean', get_stylesheet_directory_uri().'/assets/css/custom-sm-clean.css' );
	wp_enqueue_style('bv-underbar', get_stylesheet_directory_uri().'/assets/css/underbar.css' );
	wp_enqueue_style('theme-style-mobile', get_stylesheet_directory_uri().'/assets/css/bouve_btstrp_mobile.css' );
	wp_enqueue_style('theme-style-desktop', get_stylesheet_directory_uri().'/assets/css/bouve_btstrp_desktop.css' );

	wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'bouve_bstrp_scripts' );


function bouve_bstrp_menu_script(){
	wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/0fb0641db3.js', array(), false, true);	
	wp_enqueue_script('popper-bsp','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array() ,false ,true );
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array() ,false ,true );
	// wp_enqueue_script('sm_jquery_btstrp', get_stylesheet_directory_uri().'/assets/js/jquery.smartmenus.bootstrap-4.min.js', array(), false, false);
	wp_enqueue_script('sm_jquery', get_stylesheet_directory_uri().'/template-parts/header/smartmenus-1.1.0/jquery.smartmenus.min.js', array(), false, true);
	wp_enqueue_script('animated', get_stylesheet_directory_uri().'/assets/js/SmartMenus_animated.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'bouve_bstrp_menu_script');


function bouve_bstrp_custom_logo_setup() {
	$defaults = array(
	 'height'      => 100,
	 'width'       => 400,
	 'flex-height' => true,
	 'flex-width'  => true,
	 'header-text' => array( 'site-title', 'site-description' ),
	 );
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'bouve_bstrp_custom_logo_setup' );


/* Wigets side bars */
    
function bouve_bstrp_sidebars() {
    /* Register the 'footer' sidebars. */
    register_sidebar(
        array(
            'id'            => 'footer',
            'name'          => __( 'Footer' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="card bg-transparent rounded-0 border-0 widget %2$s"><div class="card-body">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    /* Repeat register_sidebar() code for additional sidebars. */
}

add_action( 'widgets_init', 'bouve_bstrp_sidebars' );



function bouve_bstrp_menus() {

    register_nav_menus( 
    	array(
    	'bouve_bs_menu' => __( 'Primary Menu', 'bouvebootstrap' ),
    	'bouve_bs_menu_secl' => __( 'Top secondary menu (left)', 'bouvebootstrap' ),
    	'bouve_bs_menu_secr' => __( 'Top secondary menu (right)', 'bouvebootstrap' ) 
    	)
    );
}
add_action( 'after_setup_theme', 'bouve_bstrp_menus' );