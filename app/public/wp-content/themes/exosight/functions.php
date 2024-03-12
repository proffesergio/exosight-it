<?php

// Variables

// Functions 


// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));

// Hooks
add_action('wp_enqueue_scripts', 'e_scripts_enqueue');
add_action('wp_head', 'exo_header', 5);


function exo_bootstrapping() {
    load_theme_textdomain('exosight');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

}
add_action('after_setup_theme', 'exo_bootstrapping');

function exo_assets_loading() {
    wp_enqueue_style('exostyle', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
}
add_action('wp_load_scripts', 'exo_assets_loading');




