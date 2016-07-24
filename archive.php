<?php
/**
 * archive.php
 *
 * The template for displaying archive pages.
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
                                if (is_day()) {
                                    printf(__('Daily Archives for %s', 'fw'), get_the_date());
                                } elseif (is_month()) {
                                    printf(__('Monthly Archives for %s', 'fw'), get_the_date(_x('F Y', 'Monthly archives date format', 'fw')));
                                } elseif (is_year()) {
                                    printf(__('Yearly Archives for %s', 'fw'), get_the_date(_x('Y', 'Yearly archives date format', 'fw')));
                                } else {
                                    _e('Archives', 'fw');
                                }
                                ?>
                            </h1>
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