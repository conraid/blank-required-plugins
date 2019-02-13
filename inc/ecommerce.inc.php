<?php
/**
 * Load plugin for ecommerce enviroment.
 *
 * @package Blank_Required_Plugins
 */

/**
 * Register the required plugins..
 *
 * @since Blank_Required_Plugins 1.0
 */
function blank_required_plugins_ecommerce() {

	$plugins = array(

		array(
			'name'         => 'Blank Utilities',
			'slug'         => 'blank-utilities',
			'source'       => 'https://github.com/conraid/blank-utilities/archive/2.1.zip',
			'required'     => true,
			'external_url' => 'https://github.com/conraid/blank-utilities',
		),

		array(
			'name'     => 'Blank Footnotes',
			'slug'     => 'blank-footnotes',
			'required' => false,
		),

		array(
			'name'     => 'Woocommerce',
			'slug'     => 'woocommerce',
			'required' => true,
		),
		array(
			'name'     => 'Woocommerce Blocks',
			'slug'     => 'woo-gutenberg-products-block',
			'required' => true,
		),
		array(
			'name'     => 'Woocommerce',
			'slug'     => 'woocommerce',
			'required' => true,
		),
		array(
			'name'     => 'Woocommerce',
			'slug'     => 'woocommerce',
			'required' => true,
		),
		array(
			'name'     => 'Woocommerce',
			'slug'     => 'woocommerce',
			'required' => true,
		),
	);

	/*
	 * Array of configuration settings.
	 *
	 */
	$config = array(
		'id'           => 'blank_plugins_ecommerce',
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
add_action( 'tgmpa_register', 'blank_required_plugins_ecommerce' );
