<?php
/**
 * Plugin Name:     Hetas Unfiltered HTML
 * Plugin URI:      https://hetas.co.uk
 * Description:     This plugin allows Administrators to save unfiltered HTML over multisites
 * Author:          Elliott Richmond
 * Author URI:      https://squareone.software
 * Text Domain:     hetas-unfiltered-html
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Hetas_Unfiltered_Html
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function hetas_add_unfiltered_html_capability_to_administrators( $caps, $cap, $user_id ) {

    if ( 'unfiltered_html' === $cap && user_can( $user_id, 'administrator' ) ) {
   
        $caps = array( 'unfiltered_html' );
   
    }
   
    return $caps;
}
add_filter( 'map_meta_cap', 'hetas_add_unfiltered_html_capability_to_administrators', 1, 3 );