<?php

// ==============================================================================
//	Add Cookie notice 
// ==============================================================================

add_action( 'wp_enqueue_scripts', 'nutrabox_enqueue_front_page_scripts_cookie' );
function nutrabox_enqueue_front_page_scripts_cookie() {
    if( is_front_page() )
    {
    	wp_register_script('nutrabox_cookieconsent_script_link', 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js', array('jquery'),'1.2', true);
    	wp_enqueue_script('nutrabox_cookieconsent_script_link');
    	
    	wp_register_script('nutrabox_cookie', get_stylesheet_directory_uri() . '/js/nutraboxCustom.js', array('jquery'),'1.3', true);
    	wp_enqueue_script('nutrabox_cookie');

    	wp_enqueue_style( 'nutrabox_cookieconsent_style_link', 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css', array(), '1.3.0' );
    }
    wp_enqueue_style( 'nutrabox_custom_css', get_stylesheet_directory_uri() . '/css/nutraboxCustom.css' , array(), '1.3.0' );
}
