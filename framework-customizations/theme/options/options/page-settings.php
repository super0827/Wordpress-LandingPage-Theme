<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'page_settings' => array(
        'title' => __('Page Settings', 'fw'),
        'type' => 'tab',
        'options' => array(
            'header-page-box' => array(
                'title' => __('Page Settings', 'fw'),
                'type' => 'box',
                'options' => array(
                    'general_page_header' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'page_header_group' => array(
                                'type' => 'group',
                                'options' => array(
                                    'header_title' => array(
                                        'type' => 'text',
                                        'label' => 'Page Title',
                                        'desc' => 'Add your Page hero title',
                                    ),
                                    'header_image' => array(
                                        'label' => __('Page Header Image', 'fw'),
                                        'desc' => __('Upload a Page header image', 'fw'),
                                        'help' => __("This default header image will be used for all your Page.", "fw"),
                                        'type' => 'upload'
                                    ),
                                    'header_overlay_color' => array(
                                        'label' => __('', 'fw'),
                                        'desc' => __('Select the image overlay color', 'fw'),
                                        'help' => __('', 'fw'),
                                        'value' => 'rgba(255,255,255,0.55)',
                                        'type' => 'rgba-color-picker'
                                    ),
                                )
                            ),
                        )
                    )
                )
            ),
        ),
    ),
);
