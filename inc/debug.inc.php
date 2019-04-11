<?php
/**
 * Load plugins for development.
 *
 * @package Blank_Required_Plugins
 */

/**
 * Register the required plugins.
 *
 * @since Blank_Required_Plugins 1.0
 */
function blank_required_plugins_debug() {

	$plugins = array(

		array(
			'name' => 'Debug Bar',
			'slug' => 'debug-bar',
		),

		array(
			'name' => 'Debug Bar Console',
			'slug' => 'debug-bar-console',
		),

		array(
			'slug' => 'debug-bar-cron',
			'name' => 'Debug Bar Cron',
		),
		array(
			'slug' => 'debug-bar-extender',
			'name' => 'Debug Bar Extender',
		),
		array(
			'slug' => 'rewrite-rules-inspector',
			'name' => 'Rewrite Rules Inspector',
		),
		array(
			'slug' => 'log-deprecated-notices',
			'name' => 'Log Deprecated Notices',
		),
		array(
			'slug' => 'log-viewer',
			'name' => 'Log Viewer',
		),
		array(
			'slug' => 'simply-show-ids',
			'name' => 'Simply Show IDs',
		),
		array(
			'slug' => 'theme-test-drive',
			'name' => 'Theme Test Drive',
		),
		array(
			'slug' => 'theme-check',
			'name' => 'Theme Check',
		),
		array(
			'name' => 'Better Search Replace',
			'slug' => 'better-search-replace',
		),
		array(
			'name' => 'Health Check & Troubleshooting',
			'slug' => 'health-check',
		),
		array(
			'name' => 'UsageDD',
			'slug' => 'usagedd',
		),
		array(
			'name' => 'Plugins Garbage Collector',
			'slug' => 'plugins-garbage-collector',
		),
		array(
			'name' => 'WP Health',
			'slug' => 'my-wp-health-check',
		),
		array(
			'name' => 'WordPress Inspector',
			'slug' => 'inspector-wp',
		),
		array(
			'name' => 'Debug Objects',
			'slug' => 'debug-objects',
		),
		array(
			'name' => 'WP Healthcheck',
			'slug' => 'wp-healthcheck',
		),
		array(
			'name' => 'WordPress Assets manager',
			'slug' => 'gonzales',
		),
		array(
			'name' => 'PHP/MySQL CPU performance statistics',
			'slug' => 'mywebtonet-performancestats',
		),
		array(
			'name' => 'Clearfy – WordPress optimization plugin',
			'slug' => 'clearfy',
		),
		array(
			'name' => 'Black Bar',
			'slug' => 'blackbar',
		),
		array(
			'name' => 'Plugin Detective – Troubleshooting',
			'slug' => 'plugin-detective',
		),
	);

	/*
	 * Array of configuration settings.
	 *
	 */
	$config = array(
		'id'           => 'blank_plugins_debug',
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
add_action( 'tgmpa_register', 'blank_required_plugins_debug' );
