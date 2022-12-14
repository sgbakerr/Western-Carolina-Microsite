<?php
/***********************************************************************
BakerDesign
Enqueue Scripts
*
* @return void
*
* @uses get_stylesheet_directory_uri()
* @uses wp_enqueue_script()
* @uses wp_enqueue_style()
* @uses wp_register_script()
* @uses wp_register_style()
*/
function register_styles_scripts() {
    wp_register_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/app.css', null, null, 'all' );
    wp_register_style( 'tiny_css', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css', null, null, 'all' );
    wp_register_script( 'formEmbed', 'https://ugadmissions.wcu.edu/register/?id=8b4a5647-ecae-4488-a556-1483f8b22113&output=embed&div=form_embed', null, null, true );
    wp_register_script( 'tinyslider', get_stylesheet_directory_uri() . '/assets/js/lib/tiny-slider.min.js', array( 'jquery' ), null, true );
    wp_register_script( 'app', get_stylesheet_directory_uri() . '/assets/js/app.min.js', array( 'jquery', 'tinyslider', 'formEmbed'), null, true );
        
   
    // wp_register_script( 'axios', 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js', array( 'jquery' ), null, true );
    wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/assets/js/modernizr.js', null, null, false );

    
    if ( ! is_admin() ) {
        wp_enqueue_style( 'styles' );
        wp_enqueue_style( 'tiny_css' );
			
        wp_enqueue_script( 'modernizr' );
        wp_enqueue_script( 'formEmbed' );
			
        wp_enqueue_script( 'tinyslider' );
        wp_enqueue_script( 'app' );
    }
}
/** Register/add filters & actions */
add_action( 'init', 'register_styles_scripts' );