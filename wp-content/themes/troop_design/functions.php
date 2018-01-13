<?php

/*
  ****************** ACF ******************
*/

    add_action( 'init', 'acf_init' );
    function acf_init() {
      // Import ACF
      //define( 'ACF_LITE' , false );

      // Rename options page and register subpages
      if( function_exists('acf_add_options_page') ) {
          $page = array(

            'page_title' => 'Instellingen',
            'menu_title' => '',
            'menu_slug' => '',
            'position' => '99.1',
            'parent_slug' => '',
            'icon_url' => false,
            'redirect' => true,
            'post_id' => 'options',
            'autoload' => false,

          );
          acf_add_options_page($page);

      }

      if( function_exists('acf_set_options_page_capability') ) {
          acf_set_options_page_capability('read');
      }
    }




/*
  ****************** Navigation ******************
*/



    // Register nav menu's
    add_action( 'after_setup_theme', 'navigation_registration' );
    function navigation_registration() {
      register_nav_menu( 'primary', __( 'Top menu', 'primary' ) );
      register_nav_menu( 'footer', __( 'Footer menu', 'footer' ) );
    }


/*
  ****************** Remove support ******************
*/

    if ( ! function_exists('solarmade_cleaner_wordpress') ) {      function solarmade_cleaner_wordpress() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'feed_links', 2);
        remove_action('wp_head', 'feed_links_extra', 3);
        remove_action('wp_head', 'index_rel_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'start_post_rel_link', 10, 0);
        remove_action('wp_head', 'parent_post_rel_link', 10, 0);
        remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
        remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
        remove_action( 'admin_print_styles', 'print_emoji_styles' );
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

        // Added by hand
        add_filter( 'emoji_svg_url', '__return_false' );
        remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
        remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
      }
      add_action( 'init', 'solarmade_cleaner_wordpress' );
    }

/*
  ****************** Extra's ******************
*/

    // Add theme support
    function custom_stuff() {
      // post thumbnail
      add_theme_support( 'post-thumbnails' );

      // html5 searchform
      add_theme_support( 'html5', array( 'search-form' ) );
    }
    add_action( 'after_setup_theme', 'custom_stuff' );


    // Add SVG support for media uploader
    function cc_mime_types($mimes) {
      $mimes['svg'] = 'image/svg+xml';
      return $mimes;
    }
    add_filter('upload_mimes', 'cc_mime_types');


    // Change Excerpt length
    function custom_excerpt_length( $length ) {
      return 55;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


    // Change Excerpt ending
    function new_excerpt_more( $more ) {
      return '';
    }
    add_filter('excerpt_more', 'new_excerpt_more');


// MAPS

function my_theme_add_scripts() {
 wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBtBipMhy52sT2g94iIPXSqqEzjH14ABr0', array(), '3', true );
 wp_enqueue_script( 'google-map-init', get_template_directory_uri() . '/js/google-maps.js', array('google-map', 'jquery'), '0.1', true );
}

add_action( 'wp_enqueue_scripts', 'my_theme_add_scripts' );

function my_acf_google_map_api( $api ){

 $api['key'] = 'AIzaSyBtBipMhy52sT2g94iIPXSqqEzjH14ABr0';

 return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>
