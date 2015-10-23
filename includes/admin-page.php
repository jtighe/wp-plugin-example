<?php

function wppe_options_page() {

	global $wppe_options;

	ob_start(); ?>
	<div class="wrap">
		<h2>WP Plugin Example Options</h2>
		
		<form method="post" action="options.php">
		
			<?php settings_fields('wppe_settings_group'); ?>
		
			<h4><?php _e('Enable', 'wppe_domain'); ?></h4>
			<p>
				<input id="wppe_settings[enable]" name="wppe_settings[enable]" type="checkbox" value="1" <?php checked(1, $wppe_options['enable']); ?> />
				<label class="description" for="wppe_settings[enable]"><?php _e('Show the Example text?', 'wppe_domain'); ?></label>
			</p>
			
			<h4><?php _e('Example Text', 'wppe_domain'); ?></h4>
			<p>
				<input id="wppe_settings[example_text]" name="wppe_settings[example_text]" type="text" value="<?php echo $wppe_options['example_text']; ?>"/>
				<label class="description" for="wppe_settings[example_text]"><?php _e('Enter the Example Text', 'wppe_domain'); ?></label>
			</p>
			
			<h4><?php _e('Color', 'wppe_domain'); ?></h4>
			<p>
				<?php $styles = array('blue', 'red'); ?>
				<select name="wppe_settings[example_text_color]" id="wppe_settings[example_text_color]">
					<?php foreach($styles as $style) { ?>
						<?php if($wppe_options['example_text_color'] == $style) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
						<option value="<?php echo $style; ?>" <?php echo $selected; ?>><?php echo $style; ?></option>
					<?php } ?>
				</select>
			</p>
		
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'wppe_domain'); ?>" />
			</p>
		
		</form>
		
	</div>
	<?php
	echo ob_get_clean();
}

function wppe_add_options_link() {
	add_options_page('WP Plugin Example Options', 'WP Plugin Example', 'manage_options', 'wppe-options', 'wppe_options_page');
}
add_action('admin_menu', 'wppe_add_options_link');

function wppe_register_settings() {
	// creates our settings in the options table
	register_setting('wppe_settings_group', 'wppe_settings');
}
add_action('admin_init', 'wppe_register_settings');