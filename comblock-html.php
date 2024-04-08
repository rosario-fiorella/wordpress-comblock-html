<?php

/**
 * @link              https://github.com/rosario-fiorella/wordpress-comblock-html/
 * @since             1.0.0
 * @package           wordpress-comblock-html
 * @author            Rosario Fiorella
 *
 * @wordpress-plugin
 * Plugin Name:       Comblock HTML UI
 * Plugin URI:        https://github.com/rosario-fiorella/wordpress-comblock-html/
 * Description:       WordPress plugin that provides a service class to generate html 
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            Rosario Fiorella
 * Author URI:        https://github.com/rosario-fiorella/
 * Text Domain:       comblock-html
 * Update URI:        /
 * Domain Path:       /languages
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if (!defined('WPINC')) {
    die;
}

if (defined('WP_CLI') && WP_CLI) {
    return;
}

/**
 * @see https://semver.org
 */
define('COMBLOCK_HTML_VERSION', '1.0.0');
define('COMBLOCK_HTML_DOMAIN', 'comblock-html');
define('COMBLOCK_HTML_PLUGIN_FILE', __FILE__);

require_once plugin_dir_path(__FILE__) . 'includes/class-comblock-html.php';

$comblock_html = new Comblock_Html();
$comblock_html->run();
