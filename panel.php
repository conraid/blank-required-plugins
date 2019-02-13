<?php
/**
 * Create custom plugin settings menu.
 *
 * @package Blank_Plugins
 * @since Blank_Plugins 1.0
 */

/**
 * Register option settings
 *
 * @since Blank_Plugins 1.0
 */
function register_blank_required_plugins_settings() {
	register_setting( 'blank-plugins-settings-group', 'blank_required_plugins_options_dev' );
	register_setting( 'blank-plugins-settings-group', 'blank_required_plugins_options_debug' );
	register_setting( 'blank-plugins-settings-group', 'blank_required_plugins_options_prod' );
	register_setting( 'blank-plugins-settings-group', 'blank_required_plugins_options_ecommerce' );
}

/**
 * Add submenu to option menu
 *
 * @since Blank_Plugins 1.0
 */
function blank_required_plugins_create_menu() {

	// Create new top-level menu.
	add_options_page( 'Blank Plugins Options', 'Blank Plugins', 'administrator', 'blank_required_plugins_options_page', 'blank_required_plugins_options' );

	// Call register settings function.
	add_action( 'admin_init', 'register_blank_required_plugins_settings' );
}
add_action( 'admin_menu', 'blank_required_plugins_create_menu' );

/**
 * Show form
 *
 * @since Blank_Plugins 1.0
 */
function blank_required_plugins_options() {
	?>
<div class="wrap">
<h1>Blank Plugins</h1>

<form method="post" action="options.php">
	<?php settings_fields( 'blank-plugins-settings-group' ); ?>
	<?php do_settings_sections( 'blank-plugins-settings-group' ); ?>
	<table class="form-table">
		<tr valign="top">
		<th scope="row">Developer</th>
		<td><input name="blank_required_plugins_options_dev" type="checkbox" value="1" <?php checked( '1', get_option( 'blank_required_plugins_options_dev' ) ); ?> />
		</tr>
		<tr valign="top">
		<th scope="row">Debug</th>
		<td><input name="blank_required_plugins_options_debug" type="checkbox" value="1" <?php checked( '1', get_option( 'blank_required_plugins_options_debug' ) ); ?> />
		</tr>
		<tr valign="top">
		<th scope="row">Production</th>
		<td><input name="blank_required_plugins_options_prod" type="checkbox" value="1" <?php checked( '1', get_option( 'blank_required_plugins_options_prod' ) ); ?> />
		</tr>
		<tr valign="top">
		<th scope="row">Ecommerce</th>
		<td><input name="blank_required_plugins_options_ecommerce" type="checkbox" value="1" <?php checked( '1', get_option( 'blank_required_plugins_options_ecommerce' ) ); ?> />
		</tr>
	</table>
	<?php submit_button(); ?>
</form>
</div>
<?php } ?>
