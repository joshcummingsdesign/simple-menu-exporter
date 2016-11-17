<?php
/*
Plugin Name: Simple Menu Exporter
Plugin URI:  http://joshcummingsdesign.com
Description: Import and Export your WordPress menus
Version:     1.0
Author:      Josh Cummings
Plugin URI:  http://joshcummingsdesign.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: smux
Domain Path: /languages
*/

/*****************************************
* Installation
/****************************************/

function smux_install() {

	$default_options = array();

	update_option( 'smux_options', $default_options );
}
register_activation_hook( __FILE__, 'smux_install' );

/*****************************************
* Includes
/****************************************/

include ( 'public/smux-public.php' );
include ( 'admin/smux-admin.php' );
