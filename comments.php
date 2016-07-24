<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package Doors
 * @subpackage Doors
 * @since Doors 1.0
 */
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>

        <h2 class="comments-title">
            <?php
            printf(_n('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'fw'), number_format_i18n(get_comments_number()), get_the_title());
            ?>
        </h2>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e('Comment navigation', 'fw'); ?></h1>
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'fw')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'fw')); ?></div>
            </nav><!-- #comment-nav-above -->
        <?php endif; // Check for comment navigation.  ?>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style' => 'ol',
                'short_ping' => true,
                'avatar_size' => 34,
            ));
            ?>
        </ol><!-- .comment-list -->

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e('Comment navigation', 'fw'); ?></h1>
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'fw')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'fw')); ?></div>
            </nav><!-- #comment-nav-below -->
        <?php endif; // Check for comment navigation.  ?>

        <?php if (!comments_open()) : ?>
            <p class="no-comments"><?php _e('Comments are closed.', 'fw'); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php
    $post_id = '';
    if (null === $post_id)
        $post_id = get_the_ID();
    else
        $id = $post_id;

    $commenter = wp_get_current_commenter();
    $user = wp_get_current_user();
    $user_identity = $user->exists() ? $user->display_name : '';


    $req = get_option('require_name_email');
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields = array(
        'author' => '<div class="comment-info"><input placeholder="Enter Name" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />',
        'email' => '<input Placeholder="Enter Email" id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' />',
        'url' => '<input Placeholder="Enter Website" id="url" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></div>',
    );

    if (is_user_logged_in()) {
        $cl = 'loginformuser';
    } else {
        $cl = '';
    }
    $defaults = array(
        'fields' => $fields,
        'comment_field' => '<div class="commentright ' . $cl . '"><textarea  Placeholder="Enter Message" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div><div class="clearfix"></div>',
        /** This filter is documented in wp-includes/link-template.php */
        'must_log_in' => '<p class="must-log-in">' . sprintf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(apply_filters('the_permalink', get_permalink($post_id)))) . '</p>',
        /** This filter is documented in wp-includes/link-template.php */
        'logged_in_as' => '<p class="logged-in-as">' . sprintf(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'), get_edit_user_link(), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink($post_id)))) . '</p>',
        'id_form' => 'commentform',
        'id_submit' => 'submit',
        'class_submit' => 'btn btn-primary btn-lg',
        'title_reply' => __('Leave a Reply', 'fw'),
        'title_reply_to' => __('Leave a Reply to %s', 'fw'),
        'cancel_reply_link' => __('Cancel reply', 'fw'),
        'label_submit' => __('Post Comment', 'fw'),
        'format' => 'xhtml',
    );

    comment_form($defaults);
    ?>

</div><!-- #comments -->
