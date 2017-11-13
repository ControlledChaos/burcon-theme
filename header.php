<?php
/**
 * Head element and header HTML.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

namespace Burcon_Outfitters;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php do_action( 'cct_before_html' ); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<?php
$cct_head = new Burcon_Outfitters_Head;
$cct_body = new Burcon_Outfitters_Body_Element;

/**
 * Use GeneratePress action to add header
 * for removal by theme builders.
 * 
 * @since Burcon_Outfitters 1.0.2
 */
get_template_part( 'template-parts/header/header' );
do_action( 'generate_header' );