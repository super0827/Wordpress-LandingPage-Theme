<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'address' => array(
        'type' => 'text',
        'label' => __('Address Line one', 'fw'),
        'value' => '1600 Pennsylvania Ave NW, Washington'
    ),
    'address2' => array(
        'type' => 'text',
        'label' => __('Address Line two', 'fw'),
        'value' => 'DC 20500, United States of America.'
    ),
    'phone' => array(
        'type' => 'text',
        'label' => __('Phone NO', 'fw'),
        'value' => 'T: (202) 456-1111'
    ),
    'email' => array(
        'type' => 'text',
        'label' => __('Email Address', 'fw'),
        'value' => 'E: bootstrapthemesco.com'
    ),
    'socials' => array(
        'type' => 'addable-popup',
        'label' => __('Social Links', 'fw'),
        'desc' => __('Add social links', 'fw'),
        'template' => '{{=social_name}}',
        'popup-options' => array(
            'social_name' => array(
                'label' => __('Name', 'fw'),
                'desc' => __('Enter a name (it is for internal use and will not appear on the front end)', 'fw'),
                'type' => 'text',
            ),
            'icon' => array(
                'type' => 'icon',
                'value' => 'fa fa-adn',
                'label' => '',
            ),
            'social-link' => array(
                'label' => __('Link', 'fw'),
                'desc' => __('Enter your social URL link', 'fw'),
                'type' => 'text',
                'value' => 'http://www.facebook.com/',
                
            )
        ),
    ),
);
