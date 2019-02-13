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
function blank_required_plugins_dev() {

	$plugins = array(

		array(
			'name'         => 'Blank Utilities',
			'slug'         => 'blank-utilities',
			'source'       => 'https://github.com/conraid/blank-utilities/releases/download/2.2/blank-utilities.2.2.zip',
			'required'     => true,
			'external_url' => 'https://github.com/conraid/blank-utilities',
		),

		array(
			'name' => 'Blank Footnotes',
			'slug' => 'blank-footnotes',
		),

		array(
			'name'     => 'Classic Editor',
			'slug'     => 'classic-editor',
			'required' => true,
		),

		array(
			'name'        => 'Advanced Custom Fields',
			'slug'        => 'advanced-custom-fields',
			'is_callable' => 'ACF',
		),

		array(
			'name' => 'Custom Post Type UI',
			'slug' => 'custom-post-type-ui',
		),

		array(
			'slug' => 'jetpack',
			'name' => 'Jetpack',
		),
		array(
			'slug' => 'monster-widget',
			'name' => 'Monster Widget',
		),
		array(
			'slug' => 'user-switching',
			'name' => 'User Switching',
		),
		array(
			'slug' => 'regenerate-thumbnails',
			'name' => 'Regenerate Thumbnails',
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
			'name' => 'Coming Soon Page & Maintenance Mode by SeedProd',
			'slug' => 'coming-soon',
		),
		array(
			'name' => 'Customizer Export/Import',
			'slug' => 'customizer-export-import',
		),
		array(
			'name' => 'Duplicate Menu',
			'slug' => 'duplicate-menu',
		),
	);

	/*
	 * Array of configuration settings.
	 *
	 */
	$config = array(
		'id'           => 'blank_plugins_dev',
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
add_action( 'tgmpa_register', 'blank_required_plugins_dev' );
