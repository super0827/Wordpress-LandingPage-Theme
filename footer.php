<?php
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
$top_title = fw_get_db_settings_option('mailchimp_top_title');
$msg = fw_get_db_settings_option('mailchimp_msg');
$url = fw_get_db_settings_option('mailchimp_url');
$btn_txt = fw_get_db_settings_option('mailchimp_btn_txt');
?>

<section id="footer-menu" class="sections footer-menu">
    <div class="container">
        <div class="row">
            <div class="footer-menu-wrapper">


                <div class="col-md-3 col-sm-6 col-xs-12">

                    <?php if (is_active_sidebar('footer_1')) : ?>
                        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                            <?php dynamic_sidebar('footer_1'); ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <?php if (is_active_sidebar('footer_2')) : ?>
                        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                            <?php dynamic_sidebar('footer_2'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <?php if (is_active_sidebar('footer_3')) : ?>
                        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                            <?php dynamic_sidebar('footer_3'); ?>
                        </div>
                    <?php endif; ?>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="menu-item">
                        <h5><?php echo esc_attr($top_title); ?></h5>
                        <p><?php echo esc_attr($msg); ?></p>
                        <form id="FooterMailchimpForm" action="<?php echo esc_url($url); ?>">
                            <div class="input-group">
                                <input type="email" class="form-control" id="m2Email" name="MERGE0" placeholder="Your Email Address" required>
                                <input type="submit" class="form-control" value="<?php echo esc_attr($btn_txt); ?>">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<?php
$logo = fw_get_db_settings_option('footer_logo');
$footer_heading = fw_get_db_settings_option('footer_heading');
$footer_color = fw_get_db_settings_option('footer_text_color');
$footer_bg = fw_get_db_settings_option('footer_bg_color');
?>

<!-- FOOTER -->
<!--Footer-->
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-wrapper">

                <div class="col-sm-3 col-xs-12">
                    <div class="footer-brand">
                        <img src="<?php echo $logo['url']; ?>" alt="<?php bloginfo('name') ?>" />
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12 text-center">
                    <div class="copyright">
                        <?php if (!empty($footer_heading)) { ?>
                            <?php echo wp_kses_post($footer_heading); ?>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="copyright">
                        <?php
                        /* action hook for any content placed below the footer */
                        do_action('softtech_footer');
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>


<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php wp_footer(); ?>
</body>
</html>