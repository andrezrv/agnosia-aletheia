<?php

/**
 * NOTICE: This file is part of the Alétheia child theme for the Agnosia framework.
 * Please don't modify this file. If you need to perform modifications, do it through /inc/utils/agnosia-extra-functions.php
 *
 * This file handles extra theme support for the Alétheia child theme.
 * You can add or remove theme support features here.
 * For further information, visit @link http://codex.wordpress.org/Function_Reference/add_theme_support.
 * 
 * @package Alétheia
 */

/**
 * Declare a global variable which stores an array of custom theme features to be unsupported.
 * Uncomment the lines for the features you need to unsupport.
 */

function agnosia_aletheia_finalize_custom_theme_support() {

	global $agnosia_aletheia_custom_not_supported;

	$agnosia_aletheia_custom_not_supported = array(

		'agnosia-header-navbar', 

	);

}



/**
 * Remove theme support for previously defined WordPress features.
 */

function agnosia_aletheia_remove_custom_theme_support() {

	global $agnosia_aletheia_custom_not_supported;

	agnosia_remove_theme_support( $agnosia_aletheia_custom_not_supported );

}



/**
 * Initialize extra theme support for WordPress features.
 * Comment the lines for the features you don't need.
 */

function agnosia_aletheia_initialize_wordpress_theme_support() {

	global $agnosia_aletheia_wordpress_theme_support;

	$agnosia_aletheia_wordpress_theme_support = array(

		'custom-background' => false,
		'custom-header' => array( 'default-text-color' => '000000' ),

	);

}



/**
 * Add extra theme support for previously defined WordPress features.
 */

function agnosia_aletheia_add_wordpress_theme_support() {

	global $agnosia_aletheia_wordpress_theme_support;

	agnosia_add_theme_support( $agnosia_aletheia_wordpress_theme_support );

}



/**
 * Initialize extra theme support for Agnosia features.
 * Comment the lines for the features you don't need. 
 */

function agnosia_aletheia_initialize_custom_theme_support() {

	global $agnosia_aletheia_custom_theme_support;

	$agnosia_aletheia_custom_theme_support = array(

		'agnosia-post-formats' => false , /* Allows to manage and support post formats through the Agnosia Options admin page. */
		'agnosia-widget-shortcodes' => false , /* Adds shortcode parsing in widgets. */
		'agnosia-excerpt-shortcodes' => false , /* Adds shortcode parsing in excerpts. */
		'agnosia-term-shortcodes' => false , /* Adds shortcode parsing in taxonomies descriptions. */
		'agnosia-top-navbar' => false , /* Allows to manage an additional navigation bar, by default in the top of the site. */
		'agnosia-left-sidebar' => false , /* Adds options to manage an additional navigation bar, by default to the left of the content. */
		'agnosia-footer-columns-selection' => false , /* Allows to select the number of columns that will be shown in the site footer. */
		'agnosia-page-excerpts' => false , /* Adds the post excerpt metabox into pages. */

	);

}



/**
 * Add extra theme support for previously defined Agnosia features.
 */

function agnosia_aletheia_add_custom_theme_support() {

	global $agnosia_aletheia_custom_theme_support;

	agnosia_add_theme_support( $agnosia_aletheia_custom_theme_support );

}



/**
 * Add action filters. 
 */

add_action( 'agnosia_before_setup', 'agnosia_aletheia_finalize_custom_theme_support' );
add_action( 'agnosia_before_setup', 'agnosia_aletheia_remove_custom_theme_support' );
add_action( 'agnosia_before_setup', 'agnosia_aletheia_initialize_wordpress_theme_support' );
add_action( 'agnosia_before_setup', 'agnosia_aletheia_initialize_custom_theme_support' );
add_action( 'agnosia_before_setup', 'agnosia_aletheia_add_wordpress_theme_support' );
add_action( 'agnosia_before_setup', 'agnosia_aletheia_add_custom_theme_support' );


?>