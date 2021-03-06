<?php

add_theme_support( 'woocommerce' );

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	load_template( get_template_directory() . '/includes/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'estore_register_custom_fields' );
function estore_register_custom_fields() {
	require get_template_directory() . '/includes/custom-fields-options/metabox.php';
	require get_template_directory() . '/includes/custom-fields-options/theme-options.php';
}
/* Load Styles */
function crea_load_styles()
{
  wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
  wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');
}
 
add_action('wp_enqueue_scripts', 'crea_load_styles', 10);

/* Load Scripts */
function crea_load_scripts() {
  wp_enqueue_script( 'jquery' );
  // подключаем скрипт mfp в <head>
  
  wp_enqueue_script('magnific-popup.js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery'), NULL, true);
  wp_enqueue_script('main' , get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
  wp_enqueue_script( 'jquery-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array(), NULL, false);  
  wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), NULL, false);
  wp_enqueue_script( 'magnific', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array('jquery'), NULL, false);
  
}
add_action('wp_enqueue_scripts', 'crea_load_scripts', 10);
/*
 * Подключение настроек темы
 */
require get_template_directory() . '/includes/theme-settings.php';
/*
 * Подключение области виджетов
 */
require get_template_directory() . '/includes/widget-areas.php';
/*
 * Подключение скриптов и стилей
 */
require get_template_directory() . '/includes/enqueue-script-style.php';
/*
 * Вспомогательные функции
 */
require get_template_directory() . '/includes/helpers.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-footer.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/ajax.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/navigations.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	//require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-cart.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-single.php';
	require get_template_directory() . '/woocommerce/includes/wc-function-archive.php';
}

add_action('init', 'create_global_variable');
function create_global_variable() {
  global $emerem;
  $emerem = [
    'phone' => carbon_get_theme_option( 'site_phone' ),
    'phone_digits' => carbon_get_theme_option( 'site_phone_digits' ),
    'phone2' => carbon_get_theme_option( 'site_phone2' ),
    'phone_digits2' => carbon_get_theme_option( 'site_phone_digits2' ),
    'call' => carbon_get_theme_option( 'site_call' ),
    'call_modal' => carbon_get_theme_option( 'site_call_modal' ),
    'address' => carbon_get_theme_option( 'site_address' ),
    'map_coordinates' => carbon_get_theme_option( 'site_map_coordinates' ),
    'email' => carbon_get_theme_option( 'site_email' ),
    'copyright' => carbon_get_theme_option( 'site_copyright' ),
  ];
}

?>
