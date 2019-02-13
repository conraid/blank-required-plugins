<?php
/**
 * Load plugins template.
 *
 * @package Blank_Required_Plugins
 */

/**
 * Register the required plugins.
 *
 * @since Blank_Required_Plugins 1.0
 */
function blank_required_plugins_template() {

	$plugins = array(

		// Plugin (see example.php).
		array(
			'name'               => '',
			'slug'               => '',
			'source'             => '',
			'required'           => true,
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),

	);

	/*
	 * Array of configuration settings.
	 *
	 */
	$config = array(
		'id'           => 'blank_plugins_template',
		'default_path' => '',
		'menu'         => 'blank-install-plugins',
		'parent_slug'  => 'plugins.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);
	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'blank_required_plugins_template' );
