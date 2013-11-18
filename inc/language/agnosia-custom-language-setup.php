<?php

/**
 * NOTICE: This file is part of the Alétheia child theme for the Agnosia Theme Framework.
 * Please don't modify this file. If you need to perform modifications, do it through /inc/utils/agnosia-extra-functions.php
 *
 * This file handles text domains for the Alétheia child theme.
 * Please try not to call any function directly into this file. The recommended method is calling the functions through action and filter hooks.
 * This file is empty by default. For an example about how it should work, see wp-content/themes/agnosia/inc/languages/agnosia-language-setup.php
 * 
 * @package Alétheia
 * 
 * @author andrezrv
 */

function agnosia_aletheia_language_setup() {

	global $agnosia_child_theme_textdomains;

	$agnosia_child_theme_textdomains = array( 'aletheia' );
	
}


// Add action hooks.
add_action( 'agnosia_load_child_theme_textdomains' , 'agnosia_aletheia_language_setup' );