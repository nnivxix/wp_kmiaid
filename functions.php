<?php
function kmiaid_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'kmiaid_theme_support');

// register style
function kmiaid_style()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style( 'kmiaid-twcss', get_template_directory_uri() . '/assets/css/tw.css');
  wp_enqueue_style('kmiaid-style', get_template_directory_uri() . "/style.css", array("kmiaid-tw"), $version, "all");
  wp_enqueue_style('kmiaid-tw', "https://cdn.tailwindcss.com");
  wp_enqueue_style('kmiaid-font-inter', "https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap");
  wp_enqueue_style( 'gfont-static', 'https://fonts.gstatic.com');
  wp_enqueue_style( 'gfont-api', 'https://fonts.googleapis.com' );
  
}

add_action('wp_enqueue_scripts', 'kmiaid_style');

//register script
function kmiaid_script()
{
  // wp_enqueue_script('kmiaid-script', get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", true);
  // wp_enqueue_script('kmiaid-tw', "https://cdn.tailwindcss.com");
  wp_enqueue_script( 'kmiaid-tw', get_template_directory_uri('assets/js/twcss_3.js'));
  wp_enqueue_script( 'wpa-main-js', get_theme_file_uri( 'assets/js/main.js' ), [], null, true );
}

add_action('wp_enqueue_scripts', 'kmiaid_script');