<?php
/**
 * Post comments form status.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

namespace Burcon_Outfitters;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Post comments form status.
 */
class Burcon_Outfitters_Comments_Status {

    /**
	 * Constructor magic method.
	 */
    public function __construct() {

        // No comments.
        $this->none();

        // Comments closed.
        $this->closed();

    }

    /**
     * No comments.
     * 
     * @since Burcon_Outfitters 1.0.0
     */
    public static function none() {

        $comments_none = apply_filters( 'cct_comments_none', sprintf( '<p class="comments-none-closed"><span class="comments-none">%1s</span></p>', __( 'Be the first to comment!', 'burcon-theme' ) ) );

        return $comments_none;

    }

    /**
     * Comments closed.
     * 
     * @since Burcon_Outfitters 1.0.0
     */
    public static function closed() {

        $comments_closed = apply_filters( 'cct_comments_closed', sprintf( '<p class="comments-none-closed"><span class="comments-closed">%1s</span>.</p>', __( 'Comments are closed for this post', 'burcon-theme' ) ) );

        return $comments_closed;

    }

}

$controlled_chaos_comments_status = new Burcon_Outfitters_Comments_Status;