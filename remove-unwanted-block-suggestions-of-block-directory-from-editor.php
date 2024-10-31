<?php
/*
Plugin Name: Remove Unwanted Block Suggestions of Block Directory From Editor
Plugin URI: https://www.gtarafdar.com/Remove-Unwanted-Block-Suggestions-of-Block-Directory-From-Editor
Description: <strong>Remove Unwanted Block Suggestions of Block Directory From Editor</strong> is a simple lightweight plug & play plugin. It will help you to Remove Block Directory From your Block Editor. No Settings Page.
Author: Gtarafdar
Version: 1.2
Author URI: https://www.gtarafdar.com
Requires at least: 5.0
Tested Up to: 5.9
Stable Tag: 1.0
License: GPL v2
*/

// Remove Unwanted Block Suggestions of Block Directory From Editor - RUBSBDFE

function rubsbdfe_remove_block_directory() {
	wp_add_inline_script(
		'wp-block-editor',
		"wp.domReady( () => wp.plugins.unregisterPlugin( 'block-directory' ) )"
	);
}
add_action( 'admin_enqueue_scripts', 'rubsbdfe_remove_block_directory' );
