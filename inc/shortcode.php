<?php
/**
 * Shortcode to render the media editor.
 *
 * @since 0.2.0
 *
 * @package Spaces_Media_Editor
 */

namespace Spaces\Spaces_Media_Editor;

add_shortcode( 'spaces-media-editor', __NAMESPACE__ . '\render_app' );

/**
 * Render the frontend app.
 *
 * @since 0.2.0
 *
 * @param array  $atts shortcode attributes.
 * @param string $content raw content.
 * @return string $content with the rendered shortcode.
 */
function render_app( $atts, $content = '' ) {
	wp_enqueue_style( 'spaces-media-editor-frontend' );
	wp_enqueue_script( 'spaces-media-editor-frontend' );

	$content .= '<div id="spaces-media-editor"></div>';

	return $content;
}
