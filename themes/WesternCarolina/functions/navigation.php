<?php
/***********************************************************************

BakerDesign
All Navigation Settings

/***********************************************************************/

/**
 * Main navigation menu functions
 *
 * @return str
 */
if ( ! function_exists( 'site_menus' ) ) {
    function site_menus($theme_location) {
        $nav_params = array(
          'theme_location' => $theme_location,
          'container' => false,
          'items_wrap' => '%3$s'
        ); 
        wp_nav_menu($nav_params);
    }
}

/**
 * Register site nav menus
 *
 * @return str
 */
register_nav_menus(array(
  'primary-nav' => 'Primary Navigation',
  'utility-nav' => 'Utility Navigation',
  'footer-nav' => 'Footer Navigation'
));