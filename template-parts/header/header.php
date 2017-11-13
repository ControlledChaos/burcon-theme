<?php
/**
 * Header HTML template.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

namespace Burcon_Outfitters;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Header HTML template.
 */
class Burcon_Outfitters_Header {

    /**
	 * Constructor magic method.
	 */
	public function __construct() {

        add_action( 'generate_header', [ $this, 'partials' ] );

    }

    /**
	 * Header partials.
     * 
     * @since Burcon_Outfitters 1.0.0
	 */
    public function partials() {

        // Header opening tags and before header actions.
        get_template_part( 'template-parts/header/partials/open-header' );

        // Site branding and before/after header content actions.
        get_template_part( 'template-parts/header/partials/site-branding' );

        // Header closing tags and after header actions.
        get_template_part( 'template-parts/header/partials/close-header' );

    }

}

$cct_header = new Burcon_Outfitters_Header;