<?php
/**
 * Template Name: woocommerce with sidebar
 *
 * The template for displaying all pages.
 */
?>

<?php get_header(); ?>
<?php page_hero_heading() ?>
<div class="main-content blog-wrap"  role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                       

                        <!-- Article content -->
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div> <!-- end entry-content -->
                    </article>

                   
                <?php endwhile; ?>
            </div> <!-- end main-content -->

            <?php if (is_active_sidebar('sidebar-2')) : ?>
                <aside id="sidebar" class="sidebar col-md-4" role="complementary">
                    <?php dynamic_sidebar('sidebar-2'); ?>
                </aside> <!-- end sidebar -->
            <?php endif; ?>
        </div>
    </div>
</div> 
<?php get_footer(); ?>