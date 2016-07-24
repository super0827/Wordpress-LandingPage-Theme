<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'general' => array(
        'title' => __('General', 'fw'),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => __('General Settings', 'fw'),
                'type' => 'box',
                'options' => array(
                    'menu_logo' => array(
                        'label' => __('Menu Logo', 'fw'),
                        'desc' => __('Add your website menu logo', 'fw'),
                        'type' => 'upload',
                    ),
                    'favicon' => array(
                        'label' => __('Favicon', 'fw'),
                        'desc' => __('Upload a favicon image', 'fw'),
                        'type' => 'upload'
                    ),
                    'loader' => array(
                        'type' => 'switch',
                        'label' => __('Pre Loader', 'getleads'),
                        'desc' => false,
                        'right-choice' => array(
                            'value' => 'yes',
                            'label' => __('Yes', 'getleads'),
                        ),
                        'left-choice' => array(
                            'value' => 'no',
                            'label' => __('No', 'getleads'),
                        ),
                    ),
                    'socials' => array(
                        'type' => 'addable-popup',
                        'limit' => '4',
                        'label' => __('Social Profile', 'fw'),
                        'desc' => __('Add your top social profiles', 'fw'),
                        'template' => '{{=name}}',
                        'popup-options' => array(
                            'name' => array(
                                'label' => __('Name', 'fw'),
                                'desc' => __('Enter a name (it is for internal use and will not appear on the front end)', 'fw'),
                                'type' => 'text',
                            ),
                            'icon' => array(
                                'type' => 'icon',
                                'value' => 'fa fa-adn',
                                'label' => '',
                            ),
                            'link' => array(
                                'label' => __('Link', 'fw'),
                                'desc' => __('Enter your social URL link ( dont forget to add <b>http://</b>)', 'fw'),
                                'type' => 'text',
                                'value' => '#',
                            )
                        ),
                    ),
                    'contact' => array(
                        'type' => 'addable-popup',
                        'limit' => '2',
                        'label' => __('Contact Info', 'fw'),
                        'desc' => __('Add your top contact info', 'fw'),
                        'template' => '{{=info}}',
                        'popup-options' => array(
                            'icon' => array(
                                'type' => 'icon',
                                'value' => 'fa fa-envelope',
                                'label' => 'Icon',
                            ),
                            'info' => array(
                                'label' => __('Name', 'fw'),
                                'desc' => __('Enter Your Top Information like info@gmail.com', 'fw'),
                                'type' => 'text',
                                'value' => 'contact@softech.com',
                            ),
                            'link' => array(
                                'label' => __('Link', 'fw'),
                                'desc' => __('Enter your contact URL link ( dont forget to add <b>http://</b>)', 'fw'),
                                'type' => 'text',
                                'value' => '#'
                            )
                        ),
                    ),
                ),
            ),
        )
    )
);
