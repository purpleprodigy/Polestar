<?php
/**
 * Metadata Module - bootstrap file
 *
 * @package     PurpleProdigy\Metadata
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU-2.0+
 */

namespace PurpleProdigy\PoleStar\MetaData;

use PurpleProdigy\PoleStar\ConfigStore;

/**
 * Autoload the module's configuration models.
 *
 * @since 1.0.0
 *
 * @param array $config_files Array of configuration model files
 *
 * @return void
 */
function autoload_configurations( array $config_files ) {
	$defaults = (array) require __DIR__ . '/defaults/meta-box-config.php';
	$defaults = current( $defaults );

	foreach ( $config_files as $config_file ) {
		$store_key = ConfigStore\loadConfigFromFilesystem( $config_file, $defaults );

		init_custom_fields_configuration( $store_key );
	}
}

/**
 * Initialize the custom fields configurations.
 *
 * @since 1.0.0
 *
 * @param string $store_key Configuration's store key.
 *
 * @return void
 */
function init_custom_fields_configuration( $store_key ) {
	$config = ConfigStore\getConfig( $store_key );

	$default_config = array_shift( $config['custom_fields'] );

	foreach ( $config['custom_fields'] as $meta_key => $custom_field_config ) {
		$config['custom_fields'][ $meta_key ] = array_merge( $default_config, $custom_field_config );
	}

	ConfigStore\loadConfig( $store_key, $config );
}

/**
 * Autoload the module's files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {
	require __DIR__ . '/helpers.php';
	require __DIR__ . '/meta-box.php';
}

autoload();
