<?php
/**
 * Plugin Name: Bestwebsite Static Menus
 * Description: Cache navigation menus in static HTML for big performance gains.
 * Version: 1.0.0
 * Author: Bestwebsite
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Setup the plugin constants
 */
define( 'BESTWEBSITE_STATIC_MENUS_VERSION', '1.0.0' );
define( 'BESTWEBSITE_STATIC_MENUS_SLUG', 'wp-static-menus' );
define( 'BESTWEBSITE_STATIC_MENUS_FILE', __FILE__ );
define( 'BESTWEBSITE_STATIC_MENUS_DIR', plugin_dir_path( BESTWEBSITE_STATIC_MENUS_FILE ) );
define( 'BESTWEBSITE_STATIC_MENUS_URL', untrailingslashit( plugins_url( basename( plugin_dir_path( BESTWEBSITE_STATIC_MENUS_FILE ) ), basename( BESTWEBSITE_STATIC_MENUS_FILE ) ) ) );

/**
 * Require Plugin Files
 */
require_once 'includes/class-bestwebsite-static-menus.php';

/**
 * Start the engines
 */
BESTWEBSITE_static_menus();

/**
 * Wrapper for getting global $BESTWEBSITE_static_menus and ensuring it is an instance of BESTWEBSITE_Static_Menus
 *
 * @return BESTWEBSITE_Static_Menus
 */
function BESTWEBSITE_static_menus() {
    global $BESTWEBSITE_static_menus;

    if( ! $BESTWEBSITE_static_menus instanceof BESTWEBSITE_Static_Menus ) {
        $BESTWEBSITE_static_menus = new BESTWEBSITE_Static_Menus;
    }

    return $BESTWEBSITE_static_menus;
}