<?php

/**
 * NOTICE: This file is part of the Alétheia child theme for the Agnosia Theme Framework.
 * Please don't modify this file. If you need to perform modifications, do it through /inc/utils/agnosia-extra-functions.php
 *
 * This file handles registration of custom javascript files.
 * Please try not to call any function directly into this file. The recommended method is calling the functions through action and filter hooks.
 * 
 * For further information, visit @link http://codex.wordpress.org/Function_Reference/add_action and @link http://codex.wordpress.org/Function_Reference/add_filter.
 * 
 * @package Alétheia
 * 
 * @author andrezrv
 */



/**
 * Load a conditional file for extra scripts to prevent overwriting 
 * of child theme's functionality on updates. 
 */

function agnosia_aletheia_enqueue_scripts() {

	$file = agnosia_get_uri( '/js/agnosia-extra-scripts.js' );

	if ( $file ) {    
		wp_enqueue_script( 'agnosia.extra.scripts' , $file , array() , '1.0' );     
	}

}



/* Add action hooks. */
add_action( 'wp_enqueue_scripts', 'agnosia_aletheia_enqueue_scripts' );