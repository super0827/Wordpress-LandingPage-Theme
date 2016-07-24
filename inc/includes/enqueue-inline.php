<?php

add_action('wp_head', '_action_xs_hook_css', 100);

function _action_xs_hook_css() {
    if (defined('FW')) {
        
        $hero_heading = fw_get_db_settings_option('general_posts_header');
        $hero_overlay = $hero_heading['header_overlay_color'];
        $page_hero_heading = fw_get_db_settings_option('general_page_header');
        $page_hero_overlay = $page_hero_heading['header_overlay_color'];


        $blog_hero = $hero_heading['header_image'] != '' ? $hero_heading['header_image']['url'] : '';
        
        $output = "<style type='text/css'>"
                . ".blog-hero-bg {background: url($blog_hero) no-repeat center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;}"
                . ".blog-hero {background: $hero_overlay;width: 100%;}"
                . "</style>";
        echo $output;
        
        $page_hero = $page_hero_heading['header_image'] != '' ? $page_hero_heading['header_image']['url'] : '';
        $output = "<style type='text/css'>"
                . ".page-hero-bg {background: url($page_hero) no-repeat center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;}"
                . ".page-hero {background: $page_hero_overlay;width: 100%;}"
                . "</style>";
        echo $output;

    }
}
