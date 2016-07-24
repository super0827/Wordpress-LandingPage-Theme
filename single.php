<?php
/**
 * single.php
 *
 * The template for displaying single posts.
 */
$display_settings = array();
if (defined('FW')) {
    $display_settings = fw_get_db_settings_option('blog_display_settings');
}
?>

<?php get_header(); ?>
<div class="blog" role="main">
    <?php blog_hero_heading() ?>
    <div class="main-content container blog-wrap single-blog">
        <div class="col-sm-8">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('content', get_post_format()); ?>
                <?php xs_post_tag(); ?>
                <?php xs_post_nav(); ?>

                <?php
                if (defined('FW')) {
                    if ($display_settings['post_comment'] != 'no') :
                        comments_template();
                    endif;
                }else {
                    comments_template();
                }
                ?>
            <?php endwhile; ?>
        </div> <!-- end main-content -->

        <?php get_sidebar(); ?>
    </div> 
</div> <!-- end main-content -->
<?php get_footer(); ?>