<?php

/**
 * NOTICE: This file is part of the Agnosia Starter Kit child theme for the Agnosia framework.
 * Please don't modify this file. If you need to perform modifications, do it through /inc/utils/agnosia-extra-functions.php
 *
 * Please try not to call any function directly into this file. The recommended method is calling the functions through action and filter hooks.
 * This file is empty by default. For an example about how it should work, see wp-content/themes/agnosia/inc/register/agnosia-register-stylesheets.php
 * 
 * For further information, visit @link http://codex.wordpress.org/Function_Reference/add_action and @link http://codex.wordpress.org/Function_Reference/add_filter.
 * 
 * @package Alétheia
 */


/**
 * Load a conditional file for extra style to prevent overwriting 
 * of child theme's appearence on updates. 
 */

function agnosia_aletheia_enqueue_styles() {

	$file = agnosia_get_uri( '/css/agnosia-extra-styles.css' );

	if ( $file ) :         
		wp_enqueue_style( 'agnosia.extra.styles' , $file , array() , '1.0' );     
	endif;

}



/* Add action hooks. */
add_action( 'wp_enqueue_styles', 'agnosia_aletheia_enqueue_styles' );


?>