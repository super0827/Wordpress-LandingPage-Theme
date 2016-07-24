<?php

if (!defined('FW'))
    die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');

//wp_enqueue_style(
//        'fw-backround-video', $shortcodes_extension->get_declared_URI('/shortcodes/section/static/css/jquery.fs.wallpaper.css', null, XS_VERSION)
//);

wp_enqueue_script(
        'fw-backround-video', $shortcodes_extension->get_declared_URI('/shortcodes/section/static/js/jquery.fs.wallpaper.js'), array('jquery'), false, true
);

wp_enqueue_script(
        'fw-shortcode-section', $shortcodes_extension->get_declared_URI('/shortcodes/section/static/js/scripts.js'), array('fw-backround-video'), false, true
);
