<?php
/**
 * content.php
 *
 * The default template for displaying content.
 */
$display_settings = array();
if (defined('FW')) {
    $display_settings = fw_get_db_settings_option('blog_display_settings');
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- Article header -->
    <header class="entry-header single-header">


        <?php if (has_post_thumbnail() && !post_password_required()) :
            ?>
            <figure class="entry-thumbnail">
                <?php the_post_thumbnail('blog-thumb'); ?>

                <?php
                if (defined('FW')) {
                    $display_settings = fw_get_db_settings_option('blog_display_settings');
                    if ($display_settings['post_date'] != 'no') :
                        ?>
                        <div class="post-date colorsbg blog-date">
                            <span class="day"><?php the_time('j') ?></span>
                            <span class="month"><?php the_time('M') ?></span>
                            <span class="year"><?php the_time('y') ?></span>
                        </div>
                        <?php
                    endif;
                } else {
                    ?>
                    <div class="post-date colorsbg blog-date">
                        <span class="day"><?php the_time('j') ?></span>
                        <span class="month"><?php the_time('M') ?></span>
                        <span class="year"><?php the_time('y') ?></span>
                    </div>
                <?php } ?>
            </figure>
        <?php endif;
        ?>



        <h1 class="blog-heading"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <?php
        xs_post_meta();
        ?>




    </header> <!-- end entry-header -->

    <!-- Article content -->
    <div class="entry-content">
        <?php
        if (is_search()) {
            the_excerpt();
        } else {
            the_content(__('Continue reading &rarr;', 'fw'));

            wp_link_pages();
        }
        ?>
    </div> <!-- end entry-content -->

</article>