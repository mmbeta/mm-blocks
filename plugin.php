<?php
/**
 * Plugin Name: mm-blocks
 * Plugin URI: https://mediummagazin.de
 * Description: mm-blocks — is a Gutenberg plugin created via create-guten-block.
 * Author: tstrothjohann
 * Author URI: https://codereporter.de
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
