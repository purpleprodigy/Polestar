<?php
/**
 * Plugin Handler
 *
 * @package     PurpleProdigy\Polestar
 * @since       1.0.1
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GPL-2.0+
 */

namespace PurpleProdigy\Polestar;

add_action( 'plugins_loaded', __NAMESPACE__ . '\autoload' );
/**
 * Autoload plugin files.
 *
 * @since 1.0.1
 *
 * @return void
 */
function autoload() {
	$files = array(
		'utility/string-functions.php',
		'asset-versioning/asset-versioning.php',
		'config-store/module.php',
		'custom/module.php',
		'metadata/module.php',
	);

	foreach ( $files as $file ) {
		require __DIR__ . '/' . $file;
	}

	/**
	 * Polestar is loaded event fires to alert all dependent add-on plugins to load.
	 *
	 * @since 1.0.2
	 */
	do_action( 'polestar_is_loaded' );
}
