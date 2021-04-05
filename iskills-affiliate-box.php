<?php

/**
 * Plugin Name: iskills Affiliate Box
 * Plugin URI: https://themeforest.net/
 * Description: The plugin will help you in displaying beautiful things.
 * Author: Hafiz Siddiq
 * Author URI: https://github.com/hafizSiddiq7675
 * Text Domain: iskills-pros-and-cons
 * Version: 1.0.0
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

define('iskillsPC_MORE_THEMES_PLUGINS_URL', 'https://themeforest.net/');
// define('payment_api_end_point', 'http://iskills-api.bitsoftsol.com/');
define('iskillsPC_VER', '1.0.0');
define('iskillsPC_CSS_VER', '1.0.0');

//include_once('include/ibr-test-block.php');
include_once('include/iskillsct-comparison-list-class.php');
include_once('include/shortcodes.php');
include_once('include/setting.php');
include_once('include/custom-style.php');
include_once('include/iskills-popup.php');



if (!function_exists('iskills_pros_cons_block_assets')) {
    function iskills_pros_cons_block_assets()
    { // phpcs:ignore
        // Styles.
        wp_enqueue_style(
            'iskills-pros-cons-block-style-css', // Handle.
            plugins_url('dist/blocks.editor.build.css',  __FILE__),
            array('wp-editor'),
            iskillsPC_VER
        );
        wp_enqueue_style('iskills-pros-and-cons-custom-fonts-icons-style', plugins_url('/dist/fonts/styles.css', __FILE__), null, iskillsPC_CSS_VER);
        wp_enqueue_style('iskills-pros-and-cons-bootstrap', plugins_url('/dist/css/bootstrap.min.css', __FILE__), null, iskillsPC_CSS_VER);
        wp_enqueue_style('iskills-pros-and-cons-custom-styles_fonts_theme3', plugins_url('/dist/css/font-awesome47.min.css', __FILE__), null, iskillsPC_CSS_VER);
        wp_enqueue_style('iskills-pros-and-cons-custom-styles', plugins_url('/dist/css/newstyles.css', __FILE__), null, iskillsPC_CSS_VER);
        wp_enqueue_style('iskills-pros-and-cons-custom-styles_theme2', plugins_url('/dist/css/styles.css', __FILE__), null, iskillsPC_CSS_VER);
        wp_enqueue_style('iskills-pros-and-cons-custom-styles_theme2_cross', plugins_url('/dist/css/cross.css', __FILE__), null, iskillsPC_CSS_VER);
        wp_enqueue_style('iskills-pros-and-cons-custom-styles_theme2_tic', plugins_url('/dist/css/tic.css', __FILE__), null, iskillsPC_CSS_VER);
        wp_enqueue_style('iskills-pros-and-cons-custom-styles_theme7_', plugins_url('/dist/css/newstylestheme.css', __FILE__), null, iskillsPC_CSS_VER);
        wp_enqueue_style('iskills-rating-box-styles', plugins_url('/dist/css/rating-box-styles.css', __FILE__), null, iskillsPC_CSS_VER);
        wp_enqueue_style('iskills-price-box-styles', plugins_url('/dist/css/price-box-styles.css', __FILE__), null, iskillsPC_CSS_VER);
        wp_enqueue_style('iskills-comparison-table-styles', plugins_url('/dist/css/comparison-table-styles.css', __FILE__), null, iskillsPC_CSS_VER);
        wp_enqueue_style('custom-styles1', plugins_url('iskills-affiliate-box/dist/css/custom-styles1.css', __FILE__ ), null, iskillsPC_CSS_VER);
	
        if (!function_exists('load_media_files')) {
            wp_enqueue_media();
        }
    }
}



// Hook: Frontend assets.
add_action('enqueue_block_assets', 'iskills_pros_cons_block_assets');
add_action('wp_head', 'add_font_awesome_to_head');

function add_font_awesome_to_head(){
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
}

if (!function_exists('iskills_pros_cons_setup')) {
    function iskills_pros_cons_setup()
    {
        wp_enqueue_script(
            'iskills_pro_cons_script', // Handle.
            plugins_url('/dist/blocks.build.js',  __FILE__),
            array('wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor'), // Dependencies, defined above.
            iskillsPC_VER,
            true // Enqueue the script in the footer.
        );
 
        $options = get_option('iskills_pros_and_cons', iskills_pros_and_cons_options_default());
        $iskills_pros_cons_icons = array(
            'useIcon' => $options['use_icons'],
            'pros' => $options['pros_icon'],
            'cons' => $options['cons_icon'],
            'useIconInHeader' => $options['use_heading_icon'],
            'prosHeaderIcon' => $options['heading_pros_icon'],
            'consHeaderIcon' => $options['heading_cons_icon']
        );
        wp_localize_script('iskills_pro_cons_script', 'iskills_pro_cons_icons', $iskills_pros_cons_icons);
        wp_enqueue_style('iskills_pro_cons_editor_style', plugins_url('/dist/blocks.editor.build.css', __FILE__), null, iskillsPC_CSS_VER);
    }
}

add_action('enqueue_block_editor_assets', 'iskills_pros_cons_setup');
add_action('init', function () {
    // Skip block registration if Gutenberg is not enabled/merged.
    if (!function_exists('register_block_type')) {
        return;
    }
    register_block_type('iskills-pros-and-cons/basic', array(
        'editor_script' => 'iskills_pro_cons_script',
        'render_callback' => 'iskills_pros_and_cons',
        'attributes' => [
            'pros' => [
                'type' => 'string',
                'default' => ''
            ],
            'cons' => [
                'type' => 'string',
                'default' => ''
            ],
            'pros_title' => [
                'type' => 'string',
                'default' => __('Pros', 'iskills-pros-and-cons')
            ],
            'cons_title' => [
                'type' => 'string',
                'default' => __('Cons', 'iskills-pros-and-cons')
            ],
            'show_button' => [
                'type' => 'boolean',
                'default' => false
            ],
            'link_text' => [
                'type' => 'string',
                'default' => __('Buy on Amazon', 'iskills-pros-and-cons')
            ],
            'link' => [
                'type' => 'string',
                'default' => ''
            ],
            'show_title' => [
                'type' => 'boolean',
                'default' => false
            ],
            'title' => [
                'type' => 'string',
                'default' => __('Pros & Cons', 'iskills-pros-and-cons')
            ],
            'pros_icon' => [
                'type' => 'string',
                'default' => ''
            ],
            'cons_icon' => [
                'type' => 'string',
                'default' => ''
            ],
            'button_icon' => [
                'type' => 'string',
                'default' => ''
            ],
            'heading_pros_icon' => [
                'type' => 'string',
                'default' => ''
            ],
            'heading_cons_icon' => [
                'type' => 'string',
                'default' => ''
            ],
            'use_heading_icon' => [
                'type' => 'string',
                'default' => ''
            ],
            'button_display_block' => [
                'type' => 'boolean',
                'default' => false
            ],
            'className' => [
                'type' => 'string',
                'default' => ''
            ]

        ]
    ));
});

add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'iskills_pros_and_cons_page_settings_link');
function iskills_pros_and_cons_page_settings_link($links)
{
    $links[] = '<a href="' .
        admin_url('admin.php?page=iskills_pros_and_cons') .
        '">' . __('Settings', 'iskills-pros-and-cons') . '</a>';
    return $links;
}

// add_action('rest_api_init', function () {
// 	global $wp_version;
//    if (version_compare($wp_version, '5.5.1', '<')) {
// 		register_rest_route( 'wp/v2/block-renderer', '/iskills-pros-and-cons/basic',array(
// 			'methods'  => 'POST',
// 			'callback' => 'iskills_pros_and_cons'
// 		));
//  	}
// });
