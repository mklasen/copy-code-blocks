<?php
/**
 * Plugin Name:       Copy Code Block
 * Plugin URI:        https://mklasen.com/plugins/copy-code-blocks/
 * Description:       Copy Code Block
 * Version:           1.0
 * Requires at least: 5.4
 * Requires PHP:      7.2
 * Author:            Marinus Klasen
 * Author URI:        https://mklasen.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://mklasen.com/plugins/elementor-carousel-auto-width/
 * Text Domain:       copy-code-blocks
 */

require 'includes/plugin-update-checker/plugin-update-checker.php';

$update_check = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/mklasen/copy-code-blocks',
	__FILE__,
	'copy-code-blocks'
);

$update_check->setBranch( 'master' );

add_action(
	'wp_enqueue_scripts',
	function() {
		wp_register_script( 'copy-code-blocks', plugin_dir_url( __FILE__ ) . 'js/copy-code-blocks.js', array(), false, true );
		wp_localize_script(
			'copy-code-blocks',
			'copy_code_blocks_object',
			array(
				'copy_success' => __( 'Succesfully copied!', 'copy-code-blocks' ),
			)
		);
		wp_enqueue_script( 'copy-code-blocks' );
		wp_enqueue_style( 'copy-code-blocks', plugin_dir_url( __FILE__ ) . 'css/copy-code-blocks.css', );
	},
	10
);
