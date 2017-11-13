<?php
/**
 * Post comments template.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

namespace Burcon_Outfitters;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

if ( post_password_required() ) {
	return;
}

require_once get_theme_file_path( '/includes/comments/class-comments-form.php' );
require_once get_theme_file_path( '/includes/comments/class-comments-heading.php' );
require_once get_theme_file_path( '/includes/comments/class-comments-status.php' );
?>

<section class="comments-section">
<?php comment_form( Burcon_Outfitters_Comments_Form::args() );

if ( have_comments() ) :

	echo '<h3 class="comments-title">' . Burcon_Outfitters_Comments_Heading::heading() . '</h3>';

	if ( ! comments_open() && post_type_supports( get_post_type(), 'comments' ) ) {
		echo Burcon_Outfitters_Comments_Status::closed();
	} ?>

	<div id="comments" class="comments">

		<ol class="comment-list">
			<?php wp_list_comments(); ?>
		</ol>

	</div><!-- comments -->

<?php else :

	if ( comments_open() && post_type_supports( get_post_type(), 'comments' ) ) {
		echo Burcon_Outfitters_Comments_Status::none();
	} elseif ( post_type_supports( get_post_type(), 'comments' ) ) {
		echo Burcon_Outfitters_Comments_Status::closed();
	}

endif; ?>
</section><!-- comments-section -->