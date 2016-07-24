<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package xs
 */
/**
 * ----------------------------------------------------------------------------------------
 * 6.0 - Display navigation to the next/previous set of posts.
 * ----------------------------------------------------------------------------------------
 */
if ( !function_exists( 'xs_paging_nav' ) ) {

	function xs_paging_nav() {
		?>
		<ul>
			<?php if ( get_previous_posts_link() ) : ?>
				<li class="next">
					<?php previous_posts_link( __( 'Newer Posts &rarr;', 'xs' ) ); ?>
				</li>
			<?php endif;
			?>
			<?php if ( get_next_posts_link() ) : ?>
				<li class="previous">
					<?php next_posts_link( __( '&larr; Older Posts', 'xs' ) ); ?>
				</li>
			<?php endif;
			?>
		</ul> <?php
	}

}

if (!function_exists('xs_post_nav')) :

    /**
     * Display navigation to next/previous post when applicable.
     */
    function xs_post_nav() {
        // Don't print empty markup if there's nowhere to navigate.
        $previous = ( is_attachment() ) ? get_post(get_post()->post_parent) : get_adjacent_post(false, '', true);
        $next = get_adjacent_post(false, '', false);

        if (!$next && !$previous) {
            return;
        }
        ?>

        <div class="entry-navigation aligncenter">
            <div class="col-sm-3 col-xs-6">
                <div class="prev-post"><strong><?php previous_post_link('<div class="nav-previous">%link</div>', _x('<i class="fa  fa-angle-left"></i>&nbsp;Previous post', 'Previous post link', 'fw')); ?></strong></div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div id="share"></div>
            </div>
            <div class="col-sm-3  col-xs-6">
                <div class="next-post"><strong><?php next_post_link('<div class="nav-next">%link</div>', _x('Next post&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'fw')); ?></strong></div>
            </div>
        </div>
        <?php
    }

endif;


/**
 * ----------------------------------------------------------------------------------------
 *  - Display meta information for a specific post.
 * ----------------------------------------------------------------------------------------
 */
if ( !function_exists( 'xs_post_meta' ) ) {

	function xs_post_meta() {
		if ( !defined( 'FW' ) ) {
			return;
		}
		echo '<ul class="list-inline entry-meta post-date">';

		if ( get_post_type() === 'post' ) {
			// If the post is sticky, mark it.
			if ( is_sticky() ) {
				echo '<li class="meta-featured-post"><i class="fa fa-thumb-tack"></i> ' . __( 'Featured', 'xs' ) . ' </li>';
			}
			$display_settings = fw_get_db_settings_option( 'blog_display_settings' );



			// Get the post author.
			if ( $display_settings['post_author'] != 'no' ) :
				printf(
						'<li class="meta-author"><a href="%1$s" rel="author">%2$s</a></li>', esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), get_the_author()
				);
			endif;

			if ( $display_settings['post_date'] != 'no' ) :
				// Get the date.
				echo '<li class="meta-date"> ' . get_the_date() . ' </li>';
			endif;



			// The categories.

			$category_list = get_the_category_list( ', ' );
			if ( $category_list && $display_settings['post_categories'] != 'no' ) {
				echo '<li class="meta-categories">' . $category_list . ' </li>';
			}


			// Comments link.
			if ( comments_open() && $display_settings['post_comment'] != 'no' ) :
				echo '<li>';
				echo '<span class="meta-reply">';
				comments_popup_link( __( 'Leave a comment', 'xs' ), __( 'One comment so far', 'xs' ), __( 'View all % comments', 'xs' ) );
				echo '</span>';
				echo '</li>';
			endif;


			// Edit link.
			if ( is_user_logged_in() ) {
				echo '<li>';
				edit_post_link( __( 'Edit', 'xs' ), '<span class="meta-edit">', '</span>' );
				echo '</li>';
			}
		}
	}

}



if ( !function_exists( 'xs_post_tag' ) ) :

	/**
	 * Display tag.
	 */
	function xs_post_tag() {
		$tag_list = get_the_tag_list( '', ', ' );
		if ( $tag_list ) {
			echo '<div class="tagcloud"> ' . get_the_tag_list() . ' </div>';
		}
	}


endif;


