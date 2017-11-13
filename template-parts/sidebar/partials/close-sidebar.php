<?php
/**
 * Sidebar closing tags and after sidebar actions.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

namespace Burcon_Outfitters;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

echo '</aside>', "\r";

do_action( 'cct_after_sidebar' );