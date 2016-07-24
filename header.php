<?php
/**
 * header.php
 *
 * The header for the theme.
 */
?>


<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <!-- Favicon and Apple Icons -->
        <?php fw_favicon(); ?>

        <script type="text/javascript">
            var xsUrl = '<?php echo get_template_directory_uri(); ?>';
            var adminAjax = "<?php echo admin_url('admin-ajax.php') ?>";

        </script>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> data-spy="scroll" data-target="#main-navbar">
        <?php
        $loader = fw_get_db_settings_option('loader');
        if ($loader == 'yes') {
            ?>
            <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <?php } ?>
        <!--[if lt IE 8]>
           <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
       <![endif]-->
        <?php
        $logo = fw_get_db_settings_option('menu_logo');
        ?>

        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <?php
                                $social = fw_get_db_settings_option('socials');

                                foreach ($social as $socials):
                                    ?>
                                    <a target="_blank" href="<?php echo esc_attr($socials['link']); ?>"><i class="<?php echo esc_attr($socials['icon']); ?>"></i></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <?php
                                $contact = fw_get_db_settings_option('contact');

                                foreach ($contact as $info):
                                    ?>
                                    <a href="<?php echo esc_attr($info['link']); ?>"><i class="<?php echo esc_attr($info['icon']); ?>"></i><?php echo esc_attr($info['info']); ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url('/') ?>"><img src="<?php echo esc_url($logo['url']); ?>" alt="<?php bloginfo('name');?>" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <?php
                    wp_nav_menu(array(
                        'menu' => 'primary',
                        'theme_location' => 'primary',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'fallback_cb' => 'xs_navwalker::fallback',
                        'walker' => new xs_navwalker())
                    );
                    ?>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


