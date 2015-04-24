<?php
/*
Plugin Name: Generate Legacy Mobile Menu
Plugin URI: http://generatepress.com
Description: Revert back to the legacy version of the mobile navigation in the GeneratePress theme. GeneratePress is required for this plugin to work.
Version: 0.1
Author: Thomas Usborne
Author URI: http://edge22.com
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'GENERATE_LMM_VERSION' ) )
	define( 'GENERATE_LMM_VERSION', '0.1' );

if ( ! function_exists( 'generate_legacy_mobile_scripts' ) ) :
add_action( 'wp_enqueue_scripts', 'generate_legacy_mobile_scripts', 100 );
function generate_legacy_mobile_scripts() {
	wp_dequeue_script( 'generate-navigation' );
	wp_enqueue_script( 'generate-navigation-legacy', plugin_dir_url( __FILE__ ) . '/js/navigation-legacy.js', array('jquery'), GENERATE_LMM_VERSION, true );
	wp_enqueue_style( 'generate-navigation-legacy', plugin_dir_url( __FILE__ ) . 'css/mobile-legacy.css' );
	
	if ( function_exists( 'generate_secondary_nav_setup' ) ) :
		wp_dequeue_script( 'generate-secondary-nav' );
		wp_enqueue_script( 'generate-secondary-navigation-legacy', plugin_dir_url( __FILE__ ) . '/js/secondary-navigation-legacy.js', array('jquery'), GENERATE_LMM_VERSION, true );
	endif;
}
endif;