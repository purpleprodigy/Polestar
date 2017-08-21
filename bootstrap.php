<?php
/**
 * Purple Prodigy Polestar plugin
 *
 * @package     PurpleProdigy\Polestar;
 * @author      Purple Prodigy
 * @licence     GPL-2.0+
 * @link        https://purpleprodigy.com
 */
/*
 * @wordpress-plugin
 * Plugin Name:     Polestar
 * Plugin URI:      https://github.com/purpleprodigy/Polestar
 * Description:     Polestar is a centralized WordPress Plugin for Purple Prodigy website projects.  It provides the framework for custom post types, taxonomies and shortcodes.
 * Version:         1.0.0
 * Author:          Purple Prodigy
 * Author URI:      https://purpleprodigy.com
 * Text Domain:     polestar
 * Requires WP:     4.7
 * Requires PHP:    5.5
 */
/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

namespace PurpleProdigy\Polestar;

if ( !defined( 'ABSPATH' ) ) {
	die( "Nothing to see here." );
}

define( 'POLESTAR_PLUGIN', __FILE__ );
define( 'POLESTAR_DIR', trailingslashit( __DIR__ ) );
$plugin_url = plugin_dir_url( __FILE__ );
if ( is_ssl() ) {
	$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
}
define( 'POLESTAR_URL', $plugin_url );
define( 'POLESTAR_TEXT_DOMAIN', 'polestar' );

include( __DIR__ . '/src/plugin.php');
