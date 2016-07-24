<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'price' => array(
        'label' => esc_html__('Packages', 'fw'),
        'popup-title' => esc_html__('Add/Edit Packages', 'fw'),
        'type' => 'addable-popup',
        'limit' => '3',
        'template' => '{{=category}}',
        'size' => 'large',
        'popup-options' => array(
            'category' => array(
                'label' => esc_html__('Price Category', 'fw'),
                'type' => 'text',
                'desc' => esc_html__('Enter the Price Category  its does not show the front-end' , 'fw'),
            ),
            'monthly' => array(
                'label' => esc_html__('Monthly Packages', 'fw'),
                'desc' => esc_html__('Here you can add, remove and edit your Packages.', 'fw'),
                'popup-title' => esc_html__('Add/Edit Packages', 'fw'),
                'type' => 'addable-popup',
                'limit' => '1',
                'template' => '{{=name}}',
                'size' => 'large',
                'popup-options' => array(
                    'name' => array(
                        'label' => esc_html__('Package Name', 'fw'),
                        'type' => 'text'
                    ),
                    'currency' => array(
                        'label' => esc_html__('Currency', 'fw'),
                        'desc' => esc_html__('Enter the Currency Symbol', 'fw'),
                        'type' => 'text',
                        'value' => '$'
                    ),
                    'price' => array(
                        'label' => esc_html__('Price', 'fw'),
                        'desc' => esc_html__('Enter the Price of the Package', 'fw'),
                        'type' => 'text'
                    ),
                    'unit' => array(
                        'label' => esc_html__('Unit', 'fw'),
                        'desc' => esc_html__('Enter the Price Unit', 'fw'),
                        'type' => 'text',
                        'value' => 'MO'
                    ),
                    'btn_txt' => array(
                        'label' => esc_html__('Button Text', 'fw'),
                        'type' => 'text',
                        'value' => 'Purchase'
                    ),
                    'link' => array(
                        'label' => esc_html__('Button Link', 'fw'),
                        'desc' => esc_html__('Where should your button link to', 'fw'),
                        'type' => 'text',
                        'value' => '#'
                    ),
                    'target' => array(
                        'type' => 'switch',
                        'label' => esc_html__('Open Link in New Window', 'fw'),
                        'desc' => esc_html__('Select here if you want to open the linked page in a new window', 'fw'),
                        'right-choice' => array(
                            'value' => '_blank',
                            'label' => esc_html__('Yes', 'fw'),
                        ),
                        'left-choice' => array(
                            'value' => '_self',
                            'label' => esc_html__('No', 'fw'),
                        ),
                    ),
                    'highlight' => array(
                        'type' => 'switch',
                        'label' => esc_html__('Highlight', 'fw'),
                        'desc' => esc_html__('Make this package Highlight?', 'fw'),
                        'right-choice' => array(
                            'value' => 'highlight',
                            'label' => esc_html__('Yes', 'fw'),
                        ),
                        'left-choice' => array(
                            'value' => '_none',
                            'label' => esc_html__('No', 'fw'),
                        ),
                    ),
                    'item' => array(
                        'label' => esc_html__('Packages Item', 'fw'),
                        'popup-title' => esc_html__('Add/Edit Packages Item', 'fw'),
                        'type' => 'addable-popup',
                        'template' => '{{=items}}',
                        'size' => 'large',
                        'popup-options' => array(
                            'icon' => array(
                                'label' => esc_html__('Icon', 'fw'),
                                'type' => 'icon'
                            ),
                            'items' => array(
                                'label' => esc_html__('Item Title', 'fw'),
                                'desc' => esc_html__('Enter the packages items', 'fw'),
                                'type' => 'text',
                                'value' => '20 Keyword'
                            ),
                        )
                    ),
                )
            ),
            'yearly' => array(
                'label' => esc_html__('Yearly Packages', 'fw'),
                'desc' => esc_html__('Here you can add, remove and edit your Packages.', 'fw'),
                'popup-title' => esc_html__('Add/Edit Packages', 'fw'),
                'type' => 'addable-popup',
                'limit' => '1',
                'template' => '{{=name}}',
                'size' => 'large',
                'popup-options' => array(
                    'name' => array(
                        'label' => esc_html__('Package Name', 'fw'),
                        'type' => 'text'
                    ),
                    'currency' => array(
                        'label' => esc_html__('Currency', 'fw'),
                        'desc' => esc_html__('Enter the Currency Symbol', 'fw'),
                        'type' => 'text',
                        'value' => '$'
                    ),
                    'price' => array(
                        'label' => esc_html__('Price', 'fw'),
                        'desc' => esc_html__('Enter the Price of the Package', 'fw'),
                        'type' => 'text'
                    ),
                    'unit' => array(
                        'label' => esc_html__('Unit', 'fw'),
                        'desc' => esc_html__('Enter the Price Unit', 'fw'),
                        'type' => 'text',
                        'value' => 'MO'
                    ),
                    'btn_txt' => array(
                        'label' => esc_html__('Button Text', 'fw'),
                        'type' => 'text',
                        'value' => 'Purchase'
                    ),
                    'link' => array(
                        'label' => esc_html__('Button Link', 'fw'),
                        'desc' => esc_html__('Where should your button link to', 'fw'),
                        'type' => 'text',
                        'value' => '#'
                    ),
                    'target' => array(
                        'type' => 'switch',
                        'label' => esc_html__('Open Link in New Window', 'fw'),
                        'desc' => esc_html__('Select here if you want to open the linked page in a new window', 'fw'),
                        'right-choice' => array(
                            'value' => '_blank',
                            'label' => esc_html__('Yes', 'fw'),
                        ),
                        'left-choice' => array(
                            'value' => '_self',
                            'label' => esc_html__('No', 'fw'),
                        ),
                    ),
                    'highlight' => array(
                        'type' => 'switch',
                        'label' => esc_html__('Highlight', 'fw'),
                        'desc' => esc_html__('Make this package Highlight?', 'fw'),
                        'right-choice' => array(
                            'value' => 'highlight',
                            'label' => esc_html__('Yes', 'fw'),
                        ),
                        'left-choice' => array(
                            'value' => '_none',
                            'label' => esc_html__('No', 'fw'),
                        ),
                    ),
                    'item' => array(
                        'label' => esc_html__('Packages Item', 'fw'),
                        'popup-title' => esc_html__('Add/Edit Packages Item', 'fw'),
                        'type' => 'addable-popup',
                        'template' => '{{=items}}',
                        'size' => 'large',
                        'popup-options' => array(
                            'icon' => array(
                                'label' => esc_html__('Icon', 'fw'),
                                'type' => 'icon'
                            ),
                            'items' => array(
                                'label' => esc_html__('Item Title', 'fw'),
                                'desc' => esc_html__('Enter the packages items', 'fw'),
                                'type' => 'text',
                                'value' => '20 Keyword'
                            ),
                        )
                    ),
                )
            )
        ),
    ),
);
