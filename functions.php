<?php

// Add Theme Support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
add_theme_support('automatic-feed-links');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support( 'align-wide' );

// Load CSS and JS
function copywriter_enqueue_styles()
{
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], wp_get_theme()->get('Version'), 'all');
    wp_enqueue_script( 'copywriter-navigation', get_template_directory_uri() . '/js/navigation.js', [], '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'copywriter_enqueue_styles', 10);

// Register Menu Locations
register_nav_menus([
  'main-menu' => esc_html__('Main Menu', 'copywriter'),
]);

// Register Sidebar
function copywriter_widgets_init()
{
  register_sidebar([
    'name'          => esc_html__('Main Sidebar', 'copywriter'),
    'id'            => 'main-sidebar',
    'description'   => esc_html__('Add widgets for blog posts here', 'copywriter'),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>'
  ]);
}

add_action('widgets_init', 'copywriter_widgets_init');

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_template_directory() . '/includes/advanced-custom-fields/' );
define( 'MY_ACF_URL', get_template_directory_uri() . '/includes/advanced-custom-fields/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return false;
}

// Custom Fields
if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_61691a4dc9546',
    'title' => 'Projects',
    'fields' => array(
      array(
        'key' => 'field_61691a55d8941',
        'label' => 'URL',
        'name' => 'url',
        'type' => 'text',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'https://',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'project',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
  
  endif;		

// Custom Posts and Taxanomies
include_once( get_template_directory() . '/includes/custom-posts.php' );