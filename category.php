<?php
/**
 * category.php
 *
 * The template for displaying category pages.
 */
?>

<?php get_header(); ?>

<div class="blog" role="main">
    <?php blog_hero_heading() ?>
    <div class="main-content blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php if (have_posts()) : ?>
                        <header class="page-header">
                            <h1>
                                <?php
                                printf(__('Category Archives for %s', 'fw'), single_cat_title('', false));
                                ?>
                            </h1>

                            <?php
                            // Show an optional category description.
                            if (category_description()) {
                                echo '<p>' . category_description() . '</p>';
                            }
                            ?>
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