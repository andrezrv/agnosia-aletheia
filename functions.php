<?php

/**
 * NOTICE: This file is part of the Alétheia child theme for the Agnosia framework.
 * Please don't modify this file. If you need to perform modifications, do it through /inc/utils/agnosia-extra-functions.php
 *
 * This file handles exclusive visualization functions for the Alétheia child theme.
 * Please try not to call any function directly into this file. The recommended method is calling the functions through action and filter hooks.
 * 
 * For further information, visit @link http://codex.wordpress.org/Function_Reference/add_action and @link http://codex.wordpress.org/Function_Reference/add_filter.
 * 
 * @package Alétheia
 */



/**
 * Load a conditional file for extra functions to prevent overwriting 
 * of child theme's functionality on updates. 
 */

function agnosia_aletheia_load_extra_functions() {

	require_once get_template_directory() . '/inc/utils/agnosia-file-getter.php';

	$file = agnosia_get_path( '/inc/utils/agnosia-extra-functions.php' );

	if ( $file ) :

		include_once $file;

	endif;

}



/* Add action filters. */

add_action( 'agnosia_after_init', 'agnosia_aletheia_load_extra_functions' );


/* Add your own functions after this line. */

?>