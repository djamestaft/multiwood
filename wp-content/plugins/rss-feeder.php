<?php 
	/*
	  Plugin Name: rss-feeder - XML email provider
	  Plugin URI: http://wp-rss-feeder.com/
	  Description: rss-feeder makes Google Analytics simple for everything in WordPress (posts,pages etc). It presents the statistics in a beautiful way under the WordPress Posts/Pages at front end, backend and in its own Dashboard. This provides Stats from Country, Referrers, Social media, General stats, New visitors, Returning visitors, Exit pages, Browser wise and Top keywords. This plugin provides the Real Time statistics in a new UI that is easy to understand and looks good.
	  Version: 1.0
	  Author: Muhammad Adnan
	  Author URI: http://twitter.com/hiddenpearls
	  License: GPLv2+
  Text Domain: wp-rss-feeder-simple
	*/
	class WP_Rss_Feeder{

  // Constructor
    function __construct() {

        add_action( 'admin_menu', array( $this, 'wpa_add_menu' ));
        register_activation_hook( __FILE__, array( $this, 'wpa_install' ) );
        register_deactivation_hook( __FILE__, array( $this, 'wpa_uninstall' ) );
    }
    /*
      * Actions perform at loading of admin menu
      */
    function wpa_add_menu() {

        add_menu_page( 'Rss-feeder', 'rss-feeder', 'manage_options', 'rss-feeder-dashboard', array(
                          __CLASS__,
                         'wpa_page_file_path'
                        ), plugins_url('images/wp-analytics-logo.png', __FILE__),'2.2.9');

        add_submenu_page( 'rss-feeder-dashboard', 'Rss-feeder' . ' Dashboard', ' Dashboard', 'manage_options', 'rss-feeder-dashboard', array(
                              __CLASS__,
                             'wpa_page_file_path'
                            ));

        add_submenu_page( 'rss-feeder-dashboard', 'Rss-feeder' . ' Settings', '<b style="color:#f9845b">Settings</b>', 'manage_options', 'rss-feeder-settings', array(
                              __CLASS__,
                             'wpa_page_file_path'
                            ));
    }

    /*
     * Actions perform on loading of menu pages
     */
    function wpa_page_file_path() {
      
    }
?>