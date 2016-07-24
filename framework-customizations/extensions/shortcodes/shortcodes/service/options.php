<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    
    'image' => array(
        'type' => 'upload',
        'label' => __('Image', 'fw'),
        'desc' => __('Select Your Service Image', 'fw'),
    ),
    'title' => array(
        'type' => 'text',
        'label' => __('Title', 'fw'),
        'label' => __('Title Of The Service', 'fw'),
    ),
    'content' => array(
        'label' => __('Description', 'fw'),
        'desc' => __('Enter the Service description', 'fw'),
        'type' => 'textarea',
    ),
    
);
