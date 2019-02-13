<?php
/**
 * External plugins loader with TGM Plugin Activation library
 *
 * PHP version 7
 *
 * @category  Wordpress_Plugin
 * @package   Blank_Required_Plugins
 * @author    Corrado Franco <conraid@linux.it>
 * @copyright 2019 Corrado Franco
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GPL-2
 * @link      https://github.com/conraid/blank-plugins
 * @version   1.0
 */

/*
Plugin Name: Blank Required Plugins
Plugin URI: https://github.com/conraid/blank-required-plugins
Description: External plugins loader with TGM Plugin Activation library
Version: 1.0
Author: Corrado Franco <conraid@linux.it>
Author URI: http://conraid.net
License: GPL-2
Text Domain: blank-required-plugins
*/

/**
 * Copyright 2019 Corrado Franco <conraid@linux.it>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load a plugin’s translated strings.
 *
 * @return void
 * @since Blank_Required_Plugins 1.0
 */
function blank_required_plugins_init() {

	// Load file .mo from subdirectory "languages".
	load_plugin_textdomain( 'blank-required-plugins', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

}
add_action( 'plugins_loaded', 'blank_required_plugins_init' );


/**
 * Include the Options menu page
 *
 * @since Blank_Required_Plugins 1.0
 */
require_once dirname( __FILE__ ) . '/panel.php';

/**
 * Include the TGM_Plugin_Activation class.
 *
 * @since Blank_Required_Plugins 1.0
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';


/**
 * Include the development plugins if set variable.
 *
 * @since Blank_Required_Plugins 1.0
 */
if ( '1' === get_option( 'blank_required_plugins_options_dev' ) ) {
	require_once dirname( __FILE__ ) . '/inc/dev.inc.php';
}

/**
 * Include the development plugins if set variable.
 *
 * @since Blank_Required_Plugins 1.0
 */
if ( '1' === get_option( 'blank_required_plugins_options_debug' ) ) {
	require_once dirname( __FILE__ ) . '/inc/debug.inc.php';
}


/**
 * Include the production plugins if set variable.
 *
 * @since Blank_Required_Plugins 1.0
 */
if ( '1' === get_option( 'blank_required_plugins_options_prod' ) ) {
	require_once dirname( __FILE__ ) . '/inc/production.inc.php';
}

/**
 * Include the ecommerce plugins if set variable.
 *
 * @since Blank_Required_Plugins 1.0
 */
if ( '1' === get_option( 'blank_required_plugins_options_ecommerce' ) ) {
	require_once dirname( __FILE__ ) . '/inc/ecommerce.inc.php';
}
