<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'title' => array(
        'label' => __('Title', 'fw'),
        'type' => 'text',
        'value' => 'Bring your Big Data to Life With Soft-Tech',
        'desc' => __('Enter Your Home Page Title.', 'fw'),
    ),
    'subtitle' => array(
        'label' => __('Sub Title', 'fw'),
        'type' => 'textarea',
        'value' => 'soft-tech free landing page builder save your tons of time to design your website, Loren ipsum dolar sit amet cool Apps showcase ',
        'desc' => __('Enter Your Home Page Sub Title.', 'fw'),
    ),
    'mailchimp' => array(
        'type' => 'text',
        'label' => __('Mailchimp URL', 'fw'),
        'value' => 'http://facebook.us8.list-manage.com/subscribe/post-json?u=85f515a08b87483d03fee7755&id=dff5d2324f',
        'desc' => __('Add mailchimp OptIn URL. you can check this how to get optin Mailchimp OptIn URL <b>http://goo.gl/vjnzZm</b>', 'fw'),
    ),
    'btn_txt' => array(
        'label' => __('Button Text', 'fw'),
        'type' => 'text',
        'value' => 'Use It Free',
        'desc' => __('Enter Your Home Button Text.', 'fw'),
    ),
);
