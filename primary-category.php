<?php
/*
 * Plugin Name: Primary Category
 * Description: Enables user to select a primary category for posts and custom posts types and creates a shortcode [primary-category name="CATEGORY NAME" post_type="POST TYPE"] to display a list of posts and custom posts based on their primary categories.
 * Plugin URI: http://www.roberto-bruno.me
 * Author: Roberto Bruno
 * Version: 1.0.1
 * Author URI: http://www.roberto-bruno.me
 * Text Domain: primary-category
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 */


// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Define constant for plugin path
define( 'PC_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

// include files containing meta box and shortcode
include PC_PLUGIN_PATH . 'classes/pri-cat-box.php';
include PC_PLUGIN_PATH . 'classes/pri-cat-shortcode.php';

$meta_box = new Pri_Cat_Box();
$shortcode = new Pri_Cat_Shortcode();
