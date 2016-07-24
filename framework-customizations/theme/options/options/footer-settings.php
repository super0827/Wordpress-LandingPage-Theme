<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'footer_settings' => array(
        'title' => __('Footer Settings', 'fw'),
        'type' => 'tab',
        'options' => array(
            'footer_box' => array(
                'title' => __('Footer Settings', 'fw'),
                'type' => 'box',
                'options' => array(
                    'mailchimp_top_title' => array(
                        'label' => __('Mailchimp Top Title', 'fw'),
                        'type' => 'text',
                        'value' => 'Newsletter',
                        'desc' => __('Enter Footer Newsletter top title text.', 'fw'),
                    ),
                    'mailchimp_msg' => array(
                        'label' => __('Mailchimp Message Text', 'fw'),
                        'type' => 'textarea',
                        'value' => 'Insights await in your companys data. Bring them into focus with BlueLance.',
                        'desc' => __('Enter Footer Newsletter message text.', 'fw'),
                    ),
                    'mailchimp_url' => array(
                        'label' => __('Mailchimp URL', 'fw'),
                        'type' => 'text',
                        'value' => 'http://facebook.us8.list-manage.com/subscribe/post-json?u=85f515a08b87483d03fee7755&id=dff5d2324f',
                        'desc' => __('Enter mailchimp URL', 'fw'),
                    ),
                    'mailchimp_btn_txt' => array(
                        'label' => __('Mailchimp Button Text', 'fw'),
                        'type' => 'text',
                        'value' => 'Use it Free',
                        'desc' => __('Enter mailchimp button text', 'fw'),
                    ),
                    'footer_logo' => array(
                        'type' => 'upload',
                        'label' => __('Footer Logo', 'unyson'),
                    ),
                    'footer_heading' => array(
                        'label' => __('Footer text', 'fw'),
                        'type' => 'wp-editor',
                        'value' => 'Made with  by Bootstrap Themes 2016. All rights reserved.',
                        'desc' => __('Footer text.', 'fw'),
                    ),
                ),
            ),
        ),
    ),
);
