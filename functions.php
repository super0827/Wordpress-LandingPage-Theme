<?php

/**
 * functions.php
 *
 * The theme's functions and definitions.
 */
/**
 * 1.0 - Define constants. Current Version number & Theme Name.
 */
define('XS_THEME', 'Soft-Tect Free Landing Page');
define('XS_VERSION', '1.0');
define('XS_THEMEROOT', get_template_directory_uri());
define('XS_THEMEROOT_DIR', get_template_directory());
define('XS_IMAGES', XS_THEMEROOT . '/assets/images');
define('XS_IMAGES_DIR', XS_THEMEROOT_DIR . '/assets/images');
define('XS_CSS', XS_THEMEROOT . '/assets/css');
define('XS_CSS_DIR', XS_THEMEROOT_DIR . '/assets/css');
define('XS_SCRIPTS', XS_THEMEROOT . '/assets/js');
define('XS_SCRIPTS_DIR', XS_THEMEROOT_DIR . '/assets/js');
define('XS_PHPSCRIPTS', XS_THEMEROOT . '/assets/php');
define('XS_PHPSCRIPTS_DIR', XS_THEMEROOT_DIR . '/assets/php');







/**
 * ----------------------------------------------------------------------------------------
 * 3.0 - Set up the content width value based on the theme's design.
 * ----------------------------------------------------------------------------------------
 */
if (!isset($content_width)) {
    $content_width = 800;
}






/**
 * ----------------------------------------------------------------------------------------
 * 4.0 - Set up theme default and register various supported features.
 * ----------------------------------------------------------------------------------------
 */
if (!function_exists('xs_setup')) {

    function xs_setup() {
        /**
         * Make the theme available for translation.
         */
        $lang_dir = XS_THEMEROOT . '/languages';
        load_theme_textdomain('fw', $lang_dir);

        /**
         * Add support for post formats.
         */
        add_theme_support('post-formats', array()
        );

        /**
         * Add support for automatic feed links.
         */
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');


        /**
         * Add support for post thumbnails.
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(770, 335, array('center', 'center')); // Hard crop center center
        add_image_size('blog-thumb', 770, 335, TRUE);
        add_image_size('recent', 360, 200, TRUE);



        /**
         * Register nav menus.
         */
        register_nav_menus(
                array(
                    'primary' => __('Main Menu', 'fw')
                )
        );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));
    }

    add_action('after_setup_theme', 'xs_setup');
}




include_once get_template_directory() . '/inc/init.php';

