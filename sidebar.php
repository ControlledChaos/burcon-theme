<?php
/**
 * Sidebar HTML template.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

get_template_part( 'template-parts/sidebar/sidebar' );
$cct_sidebar = new Burcon_Outfitters_Sidebar;