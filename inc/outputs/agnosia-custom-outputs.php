<?php

/**
 * NOTICE: This file is part of the Agnosia Starter Kit child theme for the Agnosia Theme Framework.
 * Please don't modify this file. If you need to perform modifications, do it through /inc/utils/agnosia-extra-functions.php
 *
 * This file handles functions that return or echo little dynamic pieces of HTML.
 * Please try not to call any function directly. The recommended method is calling the functions through action and filter hooks.
 * 
 * For further information, visit @link http://codex.wordpress.org/Function_Reference/add_action and @link http://codex.wordpress.org/Function_Reference/add_filter.
 * 
 * @package Alétheia
 * 
 * @author andrezrv
 */

function agnosia_aletheia_get_content_colspan() {

    global $post;

    $span = 0;

    if ( !is_404() or !is_search() ) {

        if ( 
            agnosia_evaluate_show( 'content_show_page_hierarchy' , 'content_hide_page_hierarchy' , $post ) 
            and agnosia_has_page_hierarchy( $post ) 
        ) {
            $span = $span + 4;
        }

    }

    if ( current_theme_supports( 'agnosia-left-sidebar' ) 
        and agnosia_evaluate_show( 'show_left_sidebar' , 'hide_left_sidebar' , $post ) 
    ) {
        $span = $span + 4;
    }
        
    if ( current_theme_supports( 'agnosia-right-sidebar' ) 
        and agnosia_evaluate_show( 'show_right_sidebar' , 'hide_right_sidebar' , $post ) 
    ) {
        $span = $span + 4;
    }

    $span = 12 - $span;
    $span = 'span' . $span;

    $span = apply_filters( __FUNCTION__, $span );

    return $span;

}


function agnosia_aletheia_top_brand_container() {

    $output = agnosia_aletheia_get_top_brand_container();
    $output = apply_filters( __FUNCTION__, $output );
    
    echo $output;

}


function agnosia_aletheia_get_top_brand_container() {

    $html = '';

    if ( agnosia_evaluate( 'header_top_navbar_show_brand' ) 
        or ( agnosia_evaluate( 'content_hide_branding_not_frontpage' ) 
            and !is_front_page() 
        )
    ) {
        $html .= agnosia_get_template( 'top-brand-container', 'header' );
    }

    $html = apply_filters( __FUNCTION__, $html );

    return $html;

}

add_filter( 'agnosia_get_content_colspan', 'agnosia_aletheia_get_content_colspan' );