<?php
/**
 * Blog HTML output.
 *
 * @package WordPress
 * @subpackage Burcon_Outfitters
 * @since Burcon_Outfitters 1.0.0
 */

namespace Burcon_Outfitters;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit; ?>

<article class="hentry" id="post-<?php the_ID(); ?>" role="article">
    <header class="entry-header">
        <?php echo apply_filters( 'cct_front_page_title', the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ) ); ?>
    </header>
    <div class="entry-content" itemprop="articleBody">
    <?php
    if ( '' !== get_the_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <?php
            $size = apply_filters( 'cct_blog_thumbnail_size', 'medium' );
            echo get_the_post_thumbnail( $post->ID, $size ); ?>
        </div><!-- post-thumbnail -->
    <?php endif;
        echo apply_filters( 'cct_blog_content', the_content() ); ?>
    </div><!-- entry-content -->
</article>