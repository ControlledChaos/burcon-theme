<?php
/**
 * Header opening tags and before header actions.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

namespace Burcon_Outfitters;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

do_action( 'cct_before_header' );

echo '<header class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/Organization">', "\r";