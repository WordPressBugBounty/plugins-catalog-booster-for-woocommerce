<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/**
 * Manages Discounts gateaway includes folder
 *
 * Here includes files are defined and managed.
 *
 * @version        1.0.0
 * @package        woocommerce-catalog-mode/includes
 * @author        Norbert Dreszer
 */

if ( ! function_exists( 'ic_filemtime' ) ) {
	/**
	 * Gets a cache-busting timestamp query string for a file.
	 *
	 * @param string $path File path.
	 *
	 * @return string|null
	 */
	function ic_filemtime( $path, $time_only = false ) {
		if ( file_exists( $path ) ) {
			if ( $time_only ) {
				return filemtime( $path );
			}
			return '?timestamp=' . filemtime( $path );
		}

		return null;
	}
}

require_once( IC_WOOCAT_BASE_PATH . '/includes/pluggable/class-ic-activation-wizard.php' );
require_once( IC_WOOCAT_BASE_PATH . '/includes/pluggable/settings-functions.php' );
