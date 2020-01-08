<?php
/*
Plugin Name:  Plugins Manager
Plugin URI:   https://github.com/siriusnottin/plugins-manager
Author:       Sirius Nottin
Author URI:   https://nottin.me
Description:  Manage the activation status of the website's plugins
Version:      1.0.0
License:      MIT License
*/
/**
 * More info: https://github.com/PrimeTimeCode/wp-plugin-activation-manifest
 */
if ( defined('WP_ENV') ) {
    require( $root_dir . '/vendor/autoload.php');
    \PrimeTime\WordPress\PluginManifest\Activation::set( $root_dir . '/plugin-manifest.yml', getenv('WP_ENV'));
}
