<?php
/**
 * Footer HTML template.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

namespace Burcon_Outfitters;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Footer HTML template.
 */
class Burcon_Outfitters_Footer {

    /**
	 * Constructor magic method.
	 */
	public function __construct() {

        $this->partials();

        wp_footer();

    }

    /**
	 * Footer partials.
     * 
     * @since Burcon_Outfitters 1.0.0
	 */
    public function partials() {

        // Footer opening tags and before footer actions.
        get_template_part( 'template-parts/footer/partials/open-footer' );

        // Site branding and before/after footer content actions.
        get_template_part( 'template-parts/footer/partials/content' );

        // Footer closing tags and after footer actions.
        get_template_part( 'template-parts/footer/partials/close-footer' );

    }

}