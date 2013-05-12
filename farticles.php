<?php
/*
Plugin Name: Farticles
Plugin URI: http://wordpress.org/extend/plugins/farticles/
Description: Gives your WordPress site flatulence.
Author: Michael Atkins
Version: 1.0.1
Author URI: http://cubecolour.co.uk/
License: GPL
*/

// ==============================================
//	ADD LINK IN PLUGINS TABLE
// ==============================================
 
add_filter( 'plugin_row_meta', 'cc_frt_meta_links', 10, 2 );

function cc_frt_meta_links( $links, $file ) {

	$plugin = plugin_basename(__FILE__);
	
// create the links
	if ( $file == $plugin ) {
		return array_merge( $links, array( '<a href="http://cubecolour.co.uk/donate">Donate</a>', '<a href="http://twitter.com/cubecolour">Twitter</a>' ) );
	}
	
	return $links;
}

// ==============================================
//	ENQUEUE SCRIPT WITH JQUERY DEPENDENCY
// ==============================================

function cc_fartscroll_script() {
	wp_enqueue_script('fartscroll', plugins_url( 'fartscroll/fartscroll.js', __FILE__ ), array('jquery'));	
}

function cc_farthead_js() {
	
	$pixeldist= 400;

    echo "
    <script>
        jQuery(document).ready(function($){
            fartscroll(" . $pixeldist . ");
        });
        </script>
    ";
}

// Only attempt to fart on anything that isn't an apple iDevice
if (!(strstr($_SERVER['HTTP_USER_AGENT'],'iPad') && strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') && strstr($_SERVER['HTTP_USER_AGENT'],'iPod'))) {
	add_action('wp_head', 'cc_farthead_js');
	add_action( 'wp_enqueue_scripts', 'cc_fartscroll_script' );
}