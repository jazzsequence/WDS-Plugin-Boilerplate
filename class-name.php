<?php
/**
 * Class description
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Class_Name' ) ) {

	class Class_Name {

		/**
		 * Construct function to get things started.
		 */
		public function __construct() {
			// Setup some base variables for the plugin
			// TODO this stuff should probably be pulled from the parent class or just removed
			// $this->basename       = plugin_basename( __FILE__ );
			// $this->directory_path = plugin_dir_path( __FILE__ );
			// $this->directory_url  = plugins_url( dirname( $this->basename ) );
		}

		/**
		 * Run our hooks
		 */
		public function do_hooks() {
		}

	}

	$_GLOBALS['Class_Name'] = new Class_Name;
	$_GLOBALS['Class_Name']->do_hooks();
}

/**
 * Optional wrapper function for calling this class
 */
function class_name() {
	return new Class_Name;
}