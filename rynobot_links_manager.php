<?php

/*
Plugin Name: Rynobot Link Manager
Plugin URI: http://ryanott.net/wordpress-plugins/rynobot-link-manager/
Description: This plugin activates WordPress Links Manager that was degraded after WordPress 3.5.
Version: 0.1
Author: Ryan Ott
Author URI: http://ryanott.net
License: GPL2
*/

	//Activate the Link Manager built in to the WordPress admin
	add_filter( 'pre_option_link_manager_enabled', '__return_true' );

?>
