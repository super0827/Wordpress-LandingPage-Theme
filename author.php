<?php
/**
 * author.php
 *
 * The template for displaying author archive pages.
 */
?>

<?php get_header(); ?>

<div class="blog" role="main">
    <?php blog_hero_heading() ?>
    <div class="main-content blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php if (have_posts()) : the_post(); ?>
                        <header class="page-header">
                            <h1>
                                <?php printf(__('All posts by %s.', 'fw'), get_the_author()); ?>
                            </h1>

                            <?php
                            // If the author bio exists, display it.
                            if (get_the_author_meta('description')) {
                                echo '<p>' . the_author_meta('description') . '</p>';
                            }
                            ?>

                            <?php rewind_posts(); ?>
                        </header>

                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('content', get_post_format()); ?>
                        <?php endwhile; ?>

                        <?php xs_paging_nav(); ?>
                    <?php else : ?>
                        <?php get_template_part('content', 'none'); ?>
                    <?php endif; ?>
                </div> <!-- end main-content -->

                <?php get_sidebar(); ?>
            </div>
        </div> 
    </div> 
</div> <!-- end main-content -->
<?php get_footer(); ?>