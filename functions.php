<?php

/*to not display admin bar on website at logged in*/
add_filter('show_admin_bar', '__return_false');
/*to not display admin bar on website at logged in*/

/*contact form filter*/
add_filter( 'wpcf7_validate_configuration', '__return_false' );
/*contact form filter*/

//Add Theme support
add_theme_support ( 'title-tag' );
add_theme_support ( 'post-thumbnails' );
add_theme_support ( 'post-format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support ( 'html5' );
add_theme_support ( 'automatic-feed-links' );
add_theme_support ( 'custom-background' );
add_theme_support ( 'custom-header' );
add_theme_support ( 'custom-logo' );
add_theme_support ( 'customize-selective-refresh-widgets' );
add_theme_support ( 'starter-content' );

// UIStudio css
function uistudio_enqueue_styles () {

    wp_enqueue_style ( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
    wp_enqueue_style ( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', [], time(), 'all' );
    wp_enqueue_style ( 'bootstrap-icons-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', [], time(), 'all' );
    wp_enqueue_style ( 'owl-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', [], time(), 'all' );
    wp_enqueue_style ( 'lightbox-css', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css', [], time(), 'all' );
    wp_enqueue_style ( 'fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', [], time(), 'all' );
    wp_enqueue_style ( 'aos-css', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css', [], time(), 'all' );
    wp_enqueue_style ( 'custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', ['main-css'], time(), 'all' );
}
add_action ( 'wp_enqueue_scripts', 'uistudio_enqueue_styles');

// UIStudio js
function uistudio_enqueue_scripts () {

    wp_enqueue_script ( 'html5-shiv', 'https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js', [], time(), false );
    wp_enqueue_script ( 'respond-min', 'https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js', [], time(), false );

    wp_enqueue_script ( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', [ 'jquery' ], time(), true );

    wp_enqueue_script ( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', [], time(), true );
    wp_enqueue_script ( 'owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', [], time(), true );
    wp_enqueue_script ( 'lightbox-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js', [ 'jquery' ], time(), true );
    // wp_enqueue_script ( 'fontawesome-js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js', [], time(), true );
    wp_enqueue_script ( 'aos-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js', [], time(), true );
    wp_enqueue_script ( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', [ 'jquery' ], time(), true );
}
add_action ( 'wp_enqueue_scripts', 'uistudio_enqueue_scripts' );

// UIStudio logo
function uistudio_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );

    add_theme_support( 'uistudio-logo', $defaults );
}
add_action( 'after_setup_theme', 'uistudio_logo_setup' );

// Regiter Menu Locations
register_nav_menus([
    'main-menu' => esc_html__( 'Main Menu', 'uistudio' ),
]);

// Adding icon for dropdown menu
function add_arrow_dropdown( $output, $item, $depth, $args ){

    //Only add class to 'top level' items on the 'primary' menu.
    if('main-menu' == $args->theme_location && $depth === 0 ){
        if (in_array("menu-item-has-children", $item->classes)) {
            $output .='<i class="bi bi-chevron-down"></i>';
        }
    }
        return $output;
}
    
add_filter( 'walker_nav_menu_start_el', 'add_arrow_dropdown',10,4);
// Adding icon for dropdown menu

// Adding class for li menu
function uistudio_add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'uistudio_add_additional_class_on_li', 1, 3);

// Adding class for anchor menu
function uistudio_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'uistudio_menu_link_class', 1, 3);

// UIStudio Widget Areas
function uistudio_widgets_init() {
    register_sidebar([
        'name'          =>  esc_html__( 'Mobile Menu Details', 'uistudio' ),
        'id'            =>  'mobile-menu',
        'description'   =>  esc_html__( 'Mobile menu widgets', 'uistudio' ),
        'before_widget' =>  '<section class="mobile-menu-widget">',
        'after_widget'  =>  '</section>',
    ]);

    register_sidebar([
        'name'          =>  esc_html__( 'Footer Quick link', 'uistudio' ),
        'id'            =>  'footer-quick-link',
        'description'   =>  esc_html__( 'Footer menu quick links', 'uistudio' ),
        'before_widget' =>  '<section class="footer-quick-links footer-links">',
        'after_widget'  =>  '</section>',
        'before_title'  =>  '<h5 class="footer-heading">',
        'after_title'   =>  '</h5>'
    ]);

    register_sidebar([
        'name'          =>  esc_html__( 'Footer Services link', 'uistudio' ),
        'id'            =>  'footer-services-link',
        'description'   =>  esc_html__( 'Footer menu services links', 'uistudio' ),
        'before_widget' =>  '<section class="footer-services footer-links">',
        'after_widget'  =>  '</section>',
        'before_title'  =>  '<h5 class="footer-heading">',
        'after_title'   =>  '</h5>'
    ]);

    register_sidebar([
        'name'          =>  esc_html__( 'Footer Get in Touch link', 'uistudio' ),
        'id'            =>  'footer-getintouch-link',
        'description'   =>  esc_html__( 'Footer menu Get in Touch links', 'uistudio' ),
        'before_widget' =>  '<section class="footer-getintouch footer-links">',
        'after_widget'  =>  '</section>',
        'before_title'  =>  '<h5 class="footer-heading">',
        'after_title'   =>  '</h5>'
    ]);
}
add_action ( 'widgets_init', 'uistudio_widgets_init' );
?>