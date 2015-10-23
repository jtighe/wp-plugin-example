<?php

/******************************
* script control
******************************/

function wppe_load_scripts() {
	
	if(is_home()) {
		wp_enqueue_style('wppe-styles', plugins_url( 'wp-plugin-example' ) . '/css/plugin_styles.css');

	}
}
add_action('wp_enqueue_scripts', 'wppe_load_scripts');