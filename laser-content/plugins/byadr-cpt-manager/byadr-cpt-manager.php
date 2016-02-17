<?php
/**
 * Plugin Name: byAdrenaline Custom Post Type Manager 
 * Plugin URI: http://byadrenaline.com
 * Description: Plugin para la creación de CPT
 * Version: 1.0
 * Author: byAdrenaline
 * Author URI: http://byadrenaline.com
 * License: GPL2
 */


define( 'BYADR_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'BYADR_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

// Custom Post Type

include_once( BYADR_PLUGIN_PATH . 'inc/byadr-cpt-register.php' );


register_activation_hook( __FILE__, 'byadr_activacion_inicial' );

function byadr_activacion_inicial() {
	// CPTs
	byadr_register_cpt_faq();
   
	flush_rewrite_rules();

}
