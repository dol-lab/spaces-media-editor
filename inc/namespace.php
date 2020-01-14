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
function register() {
	register_scripts( get_scripts() );
	register_styles( get_styles() );
}

/**
 * Register the individual scripts with WP.
 *
 * @since 0.2.0
 *
 * @param array $scripts needed to run.
 */
function register_scripts( $scripts ) {
	foreach ( $scripts as $handle => $script ) {
		$deps      = isset( $script['deps'] ) ? $script['deps'] : false;
		$in_footer = isset( $script['in_footer'] ) ? $script['in_footer'] : false;
		$version   = isset( $script['version'] ) ? $script['version'] : VERSION;

		wp_register_script( $handle, $script['src'], $deps, $version, $in_footer );
	}
}

/**
 * Register the stylesheets with WP.
 *
 * @since 0.2.0
 *
 * @param array $styles needed to style.
 */
function register_styles( $styles ) {
	foreach ( $styles as $handle => $style ) {
		$deps = isset( $style['deps'] ) ? $style['deps'] : false;

		wp_register_style( $handle, $style['src'], $deps, PLUGIN_VERSION );
	}
}

function get_scripts() {

	$scripts = array(
		'spaces-media-editor-runtime'  => array(
			'src'       => PLUGIN_ASSETS . '/js/runtime.js',
			'version'   => filemtime( PLUGIN_PATH . '/assets/js/runtime.js' ),
			'in_footer' => true,
		),
		'spaces-media-editor-vendor'   => array(
			'src'       => PLUGIN_ASSETS . '/js/vendors.js',
			'version'   => filemtime( PLUGIN_PATH . '/assets/js/vendors.js' ),
			'in_footer' => true,
		),
		'spaces-media-editor-frontend' => array(
			'src'       => PLUGIN_ASSETS . '/js/frontend.js',
			'deps'      => array( 'spaces-media-editor-vendor', 'spaces-media-editor-runtime' ),
			'version'   => filemtime( PLUGIN_PATH . '/assets/js/frontend.js' ),
			'in_footer' => true,
		),
	);

	return $scripts;
}

function get_styles() {

	$styles = array(
		'spaces-media-editor-style'    => array(
			'src' => PLUGIN_ASSETS . '/css/style.css',
		),
		'spaces-media-editor-frontend' => array(
			'src' => PLUGIN_ASSETS . '/css/frontend.css',
		),
	);

	return $styles;
}
