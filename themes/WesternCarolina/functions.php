<?php
/**
 * Baker Design Baseline Theme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link http://bakerdesign.co
 *
 * For more information on hooks, actions, and filters,
 * @link https://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage BakerDesign
 * @since 2.0
 */


 function my_require($path) {
  if( file_exists($path) ) {
      require_once $path;
  }
}


/* General Options and Aditions  */
my_require( dirname( __FILE__ ) . '/functions/theme-options.php' );

/* All things NAV */
my_require( dirname( __FILE__ ) . '/functions/navigation.php' );

/* Loads CSS and JS */
my_require( dirname( __FILE__ ) . '/functions/enqueue.php' );
