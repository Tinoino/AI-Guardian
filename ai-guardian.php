<?php
/**
 * Plugin Name: AI Guardian
 * Description: Plugin de seguridad y optimización con IA para WordPress
 * Version: 2.0.1
 * Author: Tino Castro – https://iseoandmarketing.com
 * License: GPLv3
 * Text Domain: ai-guardian
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants.
define( 'AI_GUARDIAN_VERSION', '2.0.1' );
define( 'AI_GUARDIAN_PATH', plugin_dir_path( __FILE__ ) );
define( 'AI_GUARDIAN_URL', plugin_dir_url( __FILE__ ) );

// Autoload dependencies if Composer is used.
if ( file_exists( AI_GUARDIAN_PATH . 'vendor/autoload.php' ) ) {
    require AI_GUARDIAN_PATH . 'vendor/autoload.php';
}

// Basic init hooks.
add_action( 'plugins_loaded', 'ai_guardian_init' );

/**
 * Initialize plugin.
 */
function ai_guardian_init() {
    // Load text domain for translations.
    load_plugin_textdomain( 'ai-guardian', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

    // Initialize modules.
    // For now, placeholder initialization.
    if ( is_admin() ) {
        require_once AI_GUARDIAN_PATH . 'includes/class-ai-guardian-admin.php';
        AI_Guardian_Admin::instance();
    }
}
