<?php
// Prevent direct script access

if (!defined('ABSPATH')) {
    die('No direct script access allowed');
}

define('CALC_URL_CHILD' , get_stylesheet_directory_uri() );
function finbiz_child_enqueue_styles() {
	wp_enqueue_style( 'finbiz-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'finbiz-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'finbiz-parent-style' ), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'finbiz_child_enqueue_styles' );

require_once 'cost-calculator-builder/includes/classes/CCBFrontControllerChild.php';