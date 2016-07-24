<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Theme’s filters and actions
 */
/*
 * Widget register
 */
if (!function_exists('xs_widget_init')) {

    function xs_widget_init() {
        if (function_exists('register_sidebar')) {
            register_sidebar(
                    array(
                        'name' => __('Main Widget Area', 'fw'),
                        'id' => 'sidebar-1',
                        'description' => __('Appears on posts and pages.', 'fw'),
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget' => '</div> <!-- end widget -->',
                        'before_title' => '<h5 class="widget-title">',
                        'after_title' => '</h5>',
                    )
            );

            register_sidebar(array(
                'name' => 'Footer Area 1',
                'id' => 'footer_1',
                'before_widget' => '<div class="menu-item">',
                'after_widget' => '</div>',
                'before_title' => '<h5>',
                'after_title' => '</h5>',
            ));

            register_sidebar(array(
                'name' => 'Footer Area 2',
                'id' => 'footer_2',
                'before_widget' => '<div class="menu-item">',
                'after_widget' => '</div>',
                'before_title' => '<h5>',
                'after_title' => '</h5>',
            ));

            register_sidebar(array(
                'name' => 'Footer Area 3',
                'id' => 'footer_3',
                'before_widget' => '<div class="menu-item">',
                'after_widget' => '</div>',
                'before_title' => '<h5>',
                'after_title' => '</h5>',
            ));
        }
    }

    add_action('widgets_init', 'xs_widget_init');
}







/*
 * TGM REQUIRE PLUGIN
 * require or recommend plugins for your WordPress themes
 */

/** @internal */
function _action_theme_register_required_plugins() {
    tgmpa(array(
        array(
            'name' => 'Unyson',
            'slug' => 'unyson',
            'required' => true,
        ),
        array(
            'name' => 'Simple Link List Widget',
            'slug' => 'simple-link-list-widget',
            'required' => true,
            'external_url' => 'https://wordpress.org/plugins/simple-link-list-widget/',
        ),
    ));
}

add_action('tgmpa_register', '_action_theme_register_required_plugins');

function _action_xs_admin_scripts() {
    wp_enqueue_style('startuploading-theme.css', XS_CSS . '/xs_admin.css', null, XS_VERSION);
    wp_enqueue_style('xs-iconfonts.css', XS_CSS . '/iconfont.css', null, XS_VERSION);
}

add_action('admin_enqueue_scripts', '_action_xs_admin_scripts');
