<?php

function cptui_register_my_cpts()
{

/**
 * Post Type: Projects.
 */

    $labels = [
  "name" => __("Projects", "copywriter"),
  "singular_name" => __("Project", "copywriter"),
  "menu_name" => __("Projects", "copywriter"),
];

    $args = [
  "label" => __("Projects", "copywriter"),
  "labels" => $labels,
  "description" => "Checkout my work",
  "public" => true,
  "publicly_queryable" => true,
  "show_ui" => true,
  "show_in_rest" => true,
  "rest_base" => "",
  "rest_controller_class" => "WP_REST_Posts_Controller",
  "has_archive" => true,
  "show_in_menu" => true,
  "show_in_nav_menus" => true,
  "delete_with_user" => false,
  "exclude_from_search" => false,
  "capability_type" => "post",
  "map_meta_cap" => true,
  "hierarchical" => false,
  "rewrite" => [ "slug" => "project", "with_front" => true ],
  "query_var" => true,
  "supports" => [ "title", "editor", "thumbnail", "excerpt" ],
  "show_in_graphql" => false,
];

    register_post_type("project", $args);
}

add_action('init', 'cptui_register_my_cpts');

function cptui_register_my_taxes()
{

    /**
     * Taxonomy: Skills.
     */

    $labels = [
        "name" => __("Skills", "copywriter"),
        "singular_name" => __("Skill", "copywriter"),
    ];

    
    $args = [
        "label" => __("Skills", "copywriter"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'skills', 'with_front' => true, ],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "skills",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy("skills", [ "project" ], $args);
}
add_action('init', 'cptui_register_my_taxes');
