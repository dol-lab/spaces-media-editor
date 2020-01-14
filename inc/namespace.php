<?php
/**
 * Main file for plugin.
 *
 * @since 0.1.0
 *
 * @package Spaces_Media_Editor
 */

namespace Spaces\Spaces_Media_Editor;

/**
 * Bootstrap the plugin.
 *
 * @since 0.1.0
 */
function bootstrap() {
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\register', 100 );
}

/**
 * Register scripts and enqueue them.
 *
 * TODO: needs a way to check if the script is already there, see wp_script_is()
 *
 * @since 0.2.0
 */
function register_scripts() {
	wp_enqueue_script( 'vuejs' );
}
