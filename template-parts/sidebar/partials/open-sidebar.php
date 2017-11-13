<?php
/**
 * Sidebar opening tags and before sidebar actions.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

namespace Burcon_Outfitters;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

do_action( 'cct_before_sidebar' );

echo '<aside class="sidebar">', "\r";