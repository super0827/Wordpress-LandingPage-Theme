<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'height' => array(
        'label' => __('Height', 'fw'),
        'desc' => __('Select the space height in px (Small = 30px, Medium = 60px, Large = 100px) also you can use custom height according to your need.', 'fw'),
        'type' => 'radio-text',
        'choices' => array(
            'space-sm' => __('Small', 'fw'),
            'space-md' => __('Medium', 'fw'),
            'space-lg' => __('Large', 'fw'),
        ),
        'value' => 'space-md',
        'custom' => 'custom_height',
    ),
);
