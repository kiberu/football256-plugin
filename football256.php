<?php
/**
 * Football 256 plugin
 *
 * @package           Football256
 * @author            Kiberu Sharif
 * @copyright         Football256
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Football256 custom functionality
 * Description:       Adds custom functionality to football256.com website
 * Version:           1.0.0
 * Author:            Kiberu Sharif
 * Author URI:        https://twitter.com/sharifkiberu
 * Text Domain:       football-256
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://football256.com
 */


/**
 * Define plugin constants
 */
define( "FOOTBALL_256_PATH",  plugin_dir_path( __FILE__ ) ) ;
define( "FOOTBALL_256_URL",  plugin_dir_url( __FILE__ ) ) ;
define( "FOOTBALL_256_SLUG", 'football-256' );

/**
 * Include plugin class instance file
 */
include_once( plugin_dir_path( __FILE__ ) . '/classes/class-index.php' );

?>