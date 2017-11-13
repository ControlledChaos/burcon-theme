<?php
/**
 * Header closing tags and after header actions.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

namespace Burcon_Outfitters;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

echo '</header>', "\r";

do_action( 'cct_after_header' );