<?php 
    /*
    Plugin Name: Bimbler No Menu
    Plugin URI: http://www.bimblers.com
    Description: Plugin to remove WordPress menu for non-admin users.
    Author: Paul Perkins
    Version: 0.1
    Author URI: http://www.bimblers.com
    */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
        die;
} // end if

require_once( plugin_dir_path( __FILE__ ) . 'class-bimbler-nomenu.php' );

Bimbler_NoMenu::get_instance();
