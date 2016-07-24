<?php
/**
 * template-full-width.php
 *
 * Template Name: Full Width Page
 */
?>

<?php get_header(); ?>
<div class="blog" role="main">
    <?php page_hero_heading() ?>
    <div class="main-content">

        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <!-- Article header -->
                <header class="entry-header"> <?php
                    // If the post has a thumbnail and it's not password protected
                    // then display the thumbnail
                    if (has_post_thumbnail() && !post_password_required()) :
                        ?>
                        <figure class="entry-thumbnail"><?php the_post_thumbnail(); ?></figure>
                    <?php endif; ?>

                    <h1 class="heading"><?php //the_title();  ?></h1>
                </header> <!-- end entry-header -->

                <!-- Article content -->
                <div class="entry-content full-width-content">
                    <?php the_content(); ?>

                    <?php wp_link_pages(); ?>
                </div> <!-- end entry-content -->

                <!-- Article footer -->
                <footer class="entry-footer">
                    <?php
                    if (is_user_logged_in()) {
                        echo '<p>';
                        edit_post_link(__('Edit', 'fw'), '<span class="meta-edit">', '</span>');
                        echo '</p>';
                    }
                    ?>
                </footer> <!-- end entry-footer -->
            </article>


        <?php endwhile; ?>
    </div> <!-- end main-content -->

</div> <!-- end main-content -->
<?php get_footer(); ?>