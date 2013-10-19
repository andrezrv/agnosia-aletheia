<?php

/**
 * NOTICE: This file is part of the Alétheia child theme for the Agnosia Theme Framework.
 * Please don't modify this file. If you need to perform modifications, do it through /inc/utils/agnosia-extra-functions.php
 *
 * This file handles filters for default WordPress functions and Agnosia functions.
 * Please try not to call any function directly. The recommended method is calling the functions through action and filter hooks.
 * 
 * For further information, visit @link http://codex.wordpress.org/Function_Reference/add_action and @link http://codex.wordpress.org/Function_Reference/add_filter.
 * 
 * @package Alétheia
 * 
 * @author andrezrv
 */


function agnosia_aletheia_filter_page_navigation( $html ) {

	$html = str_replace( '&larr; ', '', $html );
	$html = str_replace( ' &rarr;', '', $html );

	return $html;

}



function agnosia_aletheia_filter_footer_credits( $html ) {

	$filter = '<span class="agnosia">Agnosia</span> Theme</span>';
	$new_html = '<span class="aletheia">' . sprintf( __( 'Al&eacute;theia Theme was built with %1$sAgnosia Theme Framework%2$s', 'aletheia' ), '<a href="http://a.gnosia.com.ar">', '</a>' ) . '</span> ';
	$new_html .= '<span class="wordpress">' . sprintf( __( 'Proudly Powered by %1$sWordPress%2$s', 'aletheia' ), '<a href="http://www.wordpress.org">', '</a>' ) . '</span>';
	$html = str_replace( $filter, $new_html, $html );
	$html = str_replace( '<span>&copy;', '<span class="copyright">&copy;', $html );
	$html = str_replace( '&mdash;', '</span>', $html );

	return $html;

}



function agnosia_aletheia_filter_branding_navbar_class( $text ) {

	if ( agnosia_evaluate( 'content_hide_branding_not_frontpage' ) and !is_front_page() ) {
		$text = $text . ' not-frontpage';
	}

	return $text;

}



function agnosia_aletheia_filter_right_sidebar( $html ) {

	$html = str_replace( 'span3', 'span4', $html );
	return $html;

}



add_filter( 'agnosia_get_template_content_page-navigation', 'agnosia_aletheia_filter_page_navigation' );
add_filter( 'agnosia_get_template_footer_footer-credits', 'agnosia_aletheia_filter_footer_credits' );
add_filter( 'agnosia_branding_navbar_class', 'agnosia_aletheia_filter_branding_navbar_class' );
add_filter( 'agnosia_get_template_sidebar_right-sidebar', 'agnosia_aletheia_filter_right_sidebar' );