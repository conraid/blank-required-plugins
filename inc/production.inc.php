<?php
/**
 * Load plugin for production envinroment.
 *
 * @package Blank_Required_Plugins
 */

/**
 * Register the required plugins..
 *
 * @since Blank_Required_Plugins 1.0
 */
function blank_required_plugins_prod() {

	$plugins = array(

		array(
			'name'         => 'Blank Utilities',
			'slug'         => 'blank-utilities',
			'source'       => 'https://github.com/conraid/blank-utilities/archive/2.1.zip',
			'required'     => true,
			'external_url' => 'https://github.com/conraid/blank-utilities',
		),

		array(
			'name' => 'Blank Footnotes',
			'slug' => 'blank-footnotes',
		),

		array(
			'name' => 'Smart Cookie Kit',
			'slug' => 'smart-cookie-kit',
		),

		array(
			'name'        => 'Yoast SEO',
			'slug'        => 'wordpress-seo',
			'is_callable' => 'wpseo_init',
		),

		array(
			'name' => 'Classic Editor',
			'slug' => 'classic-editor',
		),

		array(
			'name'        => 'Advanced Custom Fields',
			'slug'        => 'advanced-custom-fields',
			'is_callable' => 'ACF',
		),

		array(
			'slug' => 'jetpack',
			'name' => 'Jetpack by WordPress.com',
		),

		array(
			'name' => 'Coming Soon Page & Maintenance Mode by SeedProd',
			'slug' => 'coming-soon',
		),

		array(
			'name' => 'Custom Post Type UI',
			'slug' => 'custom-post-type-ui',
		),

		array(
			'name' => 'iThemes Security',
			'slug' => 'better-wp-security',
		),

		array(
			'name' => 'Smush',
			'slug' => 'wp-smushit',
		),

		array(
			'name' => 'TablePress',
			'slug' => 'tablepress',
		),
		array(
			'name' => 'Schema',
			'slug' => 'schema',
		),
		array(
			'name' => 'Autoptimize',
			'slug' => 'autoptimize',
		),
		
		array(
			'name' => 'Async JavaScript',
			'slug' => 'async-javaScript',
		),
		array(
			'name' => 'W3 Total Cache',
			'slug' => 'w3-total-cache',
		),
	);

	/*
	 * Array of configuration settings.
	 *
	 */
	$config = array(
		'id'           => 'blank_plugins_production',
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
add_action( 'tgmpa_register', 'blank_required_plugins_prod' );
