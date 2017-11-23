<?php
/**
 * ConfigStore Module - bootstrap file
 *
 * @package     PurpleProdigy\ConfigStore
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GPL-2.0+
 */

namespace PurpleProdigy\PoleStar\ConfigStore;

/**
 * Autoload the module's files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {
	require __DIR__ . '/internals.php';
	require __DIR__ . '/api.php';
}

autoload();
