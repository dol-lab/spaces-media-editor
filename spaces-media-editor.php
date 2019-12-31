<?php
/**
 * Plugin Name:     Spaces Media Editor
 * Plugin URI:      https://github.com/dol-lab/spaces-media-editor
 * Description:     A frontend editor to create media items in the Spaces media space.
 * Author:          Silvan Hagen
 * Author URI:      https://silvanhagen.com
 * Text Domain:     spaces-media-editor
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Spaces_Media_Editor
 */

/**
 * Copyright (c) 2019 Silvan Hagen - Consulting (email: silvan@silvanhagen.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */


/**
 * Namespace definition.
 */
namespace Spaces\Spaces_Media_Editor;

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	include __DIR__ . '/vendor/autoload.php';
}
bootstrap();
