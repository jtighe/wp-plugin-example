<?php

/*our display functions for outputting information*/

function wppe_add_example_text() {

	global $wppe_options;

	if(is_home() && $wppe_options['enable'] == true) {
		$output = '<p class="wppe_example ' . $wppe_options['example_text_color'] . '">'. $wppe_options['example_text'] .'</p>';
	}
	echo $output;
}
add_action('genesis_before_content', 'wppe_add_example_text');