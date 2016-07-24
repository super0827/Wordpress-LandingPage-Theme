<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Enqueue all theme scripts and styles
 *

  /** --------------------------------------
 * ** REGISTERING THEME ASSETS
 * ** ------------------------------------ */
/**
 * Enqueue styles.
 */
if (!is_admin()) {
    wp_enqueue_style('bootstrap.min.css', XS_CSS . '/bootstrap.min.css', null, XS_VERSION);
    wp_enqueue_style('admin.css', XS_CSS . '/xs_admin.css', null, XS_VERSION);
    wp_enqueue_style('roboto-webfont', XS_CSS . '/roboto-webfont.css', null, XS_VERSION);
    wp_enqueue_style('xs_main.css', XS_CSS . '/xs_main.css', null, XS_VERSION);
    wp_enqueue_style('plugins.css', XS_CSS . '/plugins.css', null, XS_VERSION);

    wp_enqueue_style('responsive.css', XS_CSS . '/responsive.css', null, XS_VERSION);
    wp_enqueue_style('style.css', XS_CSS . '/style.css', null, XS_VERSION);
    wp_enqueue_style('blog', XS_CSS . '/blog.css', null, XS_VERSION);
}




/**
 * Enqueue scripts.
 */
if (!is_admin()) {
    // load wordpress jquery
    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap.min.js', XS_SCRIPTS . '/vendor/bootstrap.min.js', array('jquery'), XS_VERSION, true);
    wp_enqueue_script('jquery.formchimp', XS_SCRIPTS . '/vendor/jquery.formchimp.min.js', array('jquery'), XS_VERSION, true);
    wp_enqueue_script('fw-form-helpers', XS_SCRIPTS . '/vendor/fw-form-helpers.js', array('jquery'), XS_VERSION, true);
   
    wp_enqueue_script('modernizr', XS_SCRIPTS . '/modernizr.js', array('jquery'), XS_VERSION, true);
    wp_enqueue_script('plugins.js', XS_SCRIPTS . '/plugins.js', array('jquery'), XS_VERSION, true);


    wp_enqueue_script('main', XS_SCRIPTS . '/main.js', array('jquery'), XS_VERSION, true);

    // Load Wordpress Comment js
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


