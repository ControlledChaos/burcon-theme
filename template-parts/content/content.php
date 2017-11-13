<?php
/**
 * Content HTML template.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

namespace Burcon_Outfitters;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Content HTML template.
 */
class Burcon_Outfitters_Content {

    /**
	 * Constructor magic method.
	 */
	public function __construct() {

        $this->partials();

    }

    /**
	 * Content partials.
     * 
     * @since Burcon_Outfitters 1.0.0
	 */
    public static function partials() {

        if ( is_front_page() ) {
            get_template_part( 'template-parts/content/partials/content', 'front-page' );
        } elseif ( is_home() ) {
            get_template_part( 'template-parts/content/partials/content', 'home' );
        } elseif ( is_archive() ) {
            get_template_part( 'template-parts/content/partials/content', 'archive' );
        } elseif ( is_search() ) {
            get_template_part( 'template-parts/content/partials/content', 'search' );
        } else {
            get_template_part( 'template-parts/content/partials/content', 'singular' );
        }

    }

}