<?php
add_action('template_redirect', function() {
    global $wp;
    if ( headers_sent() ) return;

    $current_url = home_url( $wp->request );
    if ( !empty($_SERVER['REDIRECT_URL']) ) {
        $redirected_to = $_SERVER['REDIRECT_URL'];
        error_log('Redirect triggered: ' . $current_url . ' -> ' . $redirected_to);
    }
});


add_action('wp', function() {
  if ( is_page() ) {
      global $post;
      error_log('Current page ID: ' . $post->ID);
      error_log('Page template: ' . get_page_template_slug($post->ID));
  }
});
// Theme setup
function mytheme_setup() {
    // Register a menu location
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'DNSStudio' ),
    ) );

}

add_action( 'after_setup_theme', 'mytheme_setup' );



// Enqueue styles and scripts
function mytheme_enqueue_assets() {
    // Global theme style
    wp_enqueue_style(
        'DNSStudio-style',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version')
    );

    }

add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_assets' );
