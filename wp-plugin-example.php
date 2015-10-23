<?php
/*
Plugin Name: WP Plugin Example
Plugin URI: https://github.com/jtighe
Description: A WordPress Plugin Example for the Colorado Springs WordPress Meetup.
Author: John Tighe
Author URI: http://tgtech.com
Version: 1.0
*/


/******************************
* global variables
******************************/

$wppe_prefix = 'wppe_';
$wppe_plugin_name = 'WP Plugin Example';

// retrieve our plugin settings from the options table
$wppe_options = get_option('wppe_settings');

/******************************
* includes
******************************/

include('includes/scripts.php'); // this controls all JS / CSS
include('includes/data-processing.php'); // this controls all saving of data
include('includes/display-functions.php'); // display content functions
include('includes/admin-page.php'); // the plugin options page HTML and save functions
