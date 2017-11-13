<?php
/**
 * Sidebar HTML and widget output.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Sidebar HTML template.
 */
class Burcon_Outfitters_Sidebar {

    /**
	 * Constructor magic method.
	 */
	public function __construct() {

        $this->partials();

    }

    /**
	 * Sidebar partials.
     * 
     * @since Burcon_Outfitters 1.0.0
	 */
    public function partials() {

        // Sidebar opening tags and before sidebar actions.
        get_template_part( 'template-parts/sidebar/partials/open-sidebar' );

        // Site branding and before/after sidebar content actions.
        if ( is_active_sidebar( 'sidebar-widgets' ) ) {
            get_template_part( 'template-parts/sidebar/partials/widgets' );
        }

        // Sidebar closing tags and after sidebar actions.
        get_template_part( 'template-parts/sidebar/partials/close-sidebar' );

    }

}