<?php
/**
 * Admin functionality for AI Guardian.
 */
class AI_Guardian_Admin {
    /**
     * Singleton instance.
     */
    private static $instance;

    /**
     * Get instance.
     */
    public static function instance() {
        if ( null === self::$instance ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Constructor.
     */
    private function __construct() {
        add_action( 'admin_menu', [ $this, 'add_menu' ] );
    }

    /**
     * Add plugin menu page.
     */
    public function add_menu() {
        add_menu_page(
            __( 'AI Guardian', 'ai-guardian' ),
            __( 'AI Guardian', 'ai-guardian' ),
            'manage_options',
            'ai-guardian',
            [ $this, 'render_dashboard' ],
            'dashicons-shield-alt'
        );
    }

    /**
     * Render dashboard page.
     */
    public function render_dashboard() {
        echo '<div class="wrap"><h1>' . esc_html__( 'AI Guardian Dashboard', 'ai-guardian' ) . '</h1></div>';
    }
}
