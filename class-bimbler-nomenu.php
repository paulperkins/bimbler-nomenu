<?php
/**
 * Bimbler NoMenu
 *
 * @package   Bimbler_NoMenu
 * @author    Paul Perkins <paul@paulperkins.net>
 * @license   GPL-2.0+
 * @link      http://www.paulperkins.net
 * @copyright 2014 Paul Perkins
 */

/**
 * Include dependencies necessary... (none at present)
 *
 */

/**
 * Bimbler No Menu
 *
 * @package Bimbler_NoMenu
 * @author  Paul Perkins <paul@paulperkins.net>
 */
class Bimbler_NoMenu {

        /*--------------------------------------------*
         * Constructor
         *--------------------------------------------*/

        /**
         * Instance of this class.
         *
         * @since    1.0.0
         *
         * @var      object
         */
        protected static $instance = null;

        /**
         * Return an instance of this class.
         *
         * @since     1.0.0
         *
         * @return    object    A single instance of this class.
         */
        public static function get_instance() {

                // If the single instance hasn't been set, set it now.
                if ( null == self::$instance ) {
                        self::$instance = new self;
                } // end if

                return self::$instance;

        } // end get_instance

        /**
         * Initializes the plugin by setting localization, admin styles, and content filters.
         */
        private function __construct() {

		add_action( 'init', array ($this, 'bimbler_hide_admin_bar'));
        	         	
		} // End constructor.
	
	/**
	 * Remove menu bar.
	 *
	 */
	function bimbler_hide_admin_bar() {
		if (!current_user_can('edit_posts')) {
    			show_admin_bar(false);
  		}
	}
	
		
} // End class
