<?php
/**
 * Plugin Handler
 *
 * @package     PurpleProdigy\Polestar
 * @since       1.3.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */

namespace PurpleProdigy\Polestar;

/**
 * Autoload plugin files.
 *
 * @since 1.2.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'src/custom/module.php',
	);

	foreach ( $files as $file ) {
		include( __DIR__ . '/' . $file );
	}
}

autoload();