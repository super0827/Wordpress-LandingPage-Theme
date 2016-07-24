<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
        'label' => __('Video', 'fw'),
        'desc' => __('Enter Youtube or Vimeo video URL', 'fw'),
        'type' => 'text',
    ),
    'width' => array(
        'label' => __('Width', 'fw'),
        'desc' => __('Video width in pixels', 'fw'),
        'type' => 'short-text',
        'value' => '',
    ),
    'height' => array(
        'label' => __('Height', 'fw'),
        'desc' => __('Video height in pixels', 'fw'),
        'type' => 'short-text',
        'value' => '',
    ),
    'frame' => array(
        'type' => 'switch',
        'value' => '',
        'label' => __('Video Border', 'fw'),
        'desc' => __('Add a border to your video?', 'fw'),
        'left-choice' => array(
            'value' => '',
            'label' => __('No', 'fw'),
        ),
        'right-choice' => array(
            'value' => 'fw-video-frame',
            'label' => __('Yes', 'fw'),
        )
    ),
    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => __('Custom Class', 'fw'),
        'desc' => __('Enter custom CSS class', 'fw'),
        'type' => 'text',
        'help' => __('You can use this class to further style this shortcode.', 'fw'),
        'value' => '',
    ),
);
