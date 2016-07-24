<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    
    'icon' => array(
        'type' => 'icon',
        'label' => __('Choose an Icon', 'fw'),
    ),
    'title' => array(
        'type' => 'text',
        'label' => __('Title of the Box', 'fw'),
    ),
    'content' => array(
        'label' => __('Description', 'fw'),
        'desc' => __('Enter the icon box description', 'fw'),
        'type' => 'textarea',
    ),
   
);
