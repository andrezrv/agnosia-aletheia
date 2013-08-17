<?php

/**
 * NOTICE: This file is part of the Alétheia child theme for the Agnosia framework.
 * Please don't modify this file. If you need to perform modifications, do it through /inc/utils/agnosia-extra-functions.php
 *
 * This file handles custom options for your child theme.
 * Please try not to call any function directly into this file. The recommended method is calling the functions through action and filter hooks.
 * For an example about how this file should work, see wp-content/themes/agnosia/inc/register/agnosia-register-options.php
 * 
 * For further information, visit @link http://codex.wordpress.org/Function_Reference/add_action and @link http://codex.wordpress.org/Function_Reference/add_filter.
 * 
 * @package Alétheia
 */

?>

<?php

/**
 * The following lines are commented by default in order to prevent the execution of unnecessary processes,
 * but provide a practical example of how this file should be used. You can uncomment them to see how it works.
 */

function agnosia_aletheia_reset_options_defaults() {

	agnosia_reset_option_default( 'stylesheet', 'agnosia-aletheia' );
	agnosia_reset_option_default( 'show_header_top_navbar', 'true' );
	agnosia_reset_option_default( 'show_site_description', 'true' );
	agnosia_reset_option_default( 'header_top_navbar_show_brand', 'false' );
	agnosia_reset_option_default( 'header_top_navbar_show_search', 'false' );
	agnosia_reset_option_default( 'header_top_navbar_color_scheme', 'inverse' );
	agnosia_reset_option_default( 'header_branding_section_site_description', 'true' );

}

function agnosia_aletheia_unregister_options() {

	agnosia_unregister_option( 'header_branding_section_show_navigation' );
	agnosia_unregister_option( 'header_branding_section_show_search' );
	agnosia_unregister_option( 'content_show_page_hierarchy' );

}


function agnosia_aletheia_register_options() {

	agnosia_register_option( 'content_show_page_header' , array( 
		'type' => 'checkbox' , 
		'value' => 'true' , 
		'values' => array( 'true' , 'false' ) , 
		'category' => 'content' , 
		'parent' => '' , 
		'html' => array(
			'before' => '<div class="misc-pub-section" style="padding: 0;"><h4>' . __( 'Pages' , 'agnosia' ) . '</h4> ',
			'label' => __( 'Show header' , 'agnosia' ) ,
			'description' => '<em><small>' . __( 'Show title, author and meta data of the currently retrieved page into page header.' , 'agnosia' ) . '</small></em>' ,
			'after' => '' ,
		),
	) );

	agnosia_register_option( 'content_hide_branding_not_frontpage' , array( 
		'type' => 'checkbox' , 
		'value' => 'false' , 
		'values' => array( 'true' , 'false' ) , 
		'category' => 'header' , 
		'parent' => '' , 
		'html' => array(
			'before' => '<div class="misc-pub-section" style="padding: 0;"><h4>' . __( 'Extra options' , 'agnosia' ) . '</h4> ',
			'label' => __( 'Hide branding if not in front page' , 'aletheia' ) ,
			'description' => '<em><small>' . __( 'Hides (via CSS) branding section data when the page being displayed is not the front page, showing the top navigation menu brand instead.' , 'aletheia' ) . '</small></em>' ,
			'after' => '</div>' ,
		),
	) );

}


/* Add action filters. */
add_action( 'agnosia_before_setup', 'agnosia_aletheia_unregister_options' );
add_action( 'agnosia_before_setup', 'agnosia_aletheia_reset_options_defaults' );
add_action( 'agnosia_before_setup', 'agnosia_aletheia_register_options' );

?>