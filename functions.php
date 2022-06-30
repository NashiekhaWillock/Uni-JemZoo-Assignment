<?php

// function to load stylesheets
function load_stylesheets()
{

    wp_register_style('tailwind', get_template_directory_uri() . '/dist/style.css', array(), 1, 'all');
    wp_enqueue_style('tailwind');

    wp_register_style('tailwind2', get_template_directory_uri() . '/src/style.css', array(), 1, 'all');
    wp_enqueue_style('tailwind2');

    wp_register_style('sass', get_template_directory_uri() . '/ccs/style.css', array(), 1, 'all');
    wp_enqueue_style('sass');
}

// add stylesheets to wordpress actions
add_action('wp_enqueue_scripts', 'load_stylesheets');

// function to load scripts
function addjs()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js', array(), null, true);

    wp_register_script('index', get_template_directory_uri() . '/src/index.js',  array(), 1, 1, 1);
    wp_enqueue_script('index');

    wp_register_script('tickets', get_template_directory_uri() . '/src/tickets.js',  array(), 1, 1, 1);
    wp_enqueue_script('tickets');
}

// add scripts to wordpress actions
add_action('wp_enqueue_scripts', 'addjs');


// menu support
add_theme_support('menus');

register_nav_menus(array(
    'top-menu' => __('Top Menu',      'theme'),
));

// add class to (a) tags in menu
function add_menuclass($ulclass)
{
    return preg_replace('/<a/', '<a class="main-menu__link"', $ulclass, -1);
}
add_filter('wp_nav_menu', 'add_menuclass');


