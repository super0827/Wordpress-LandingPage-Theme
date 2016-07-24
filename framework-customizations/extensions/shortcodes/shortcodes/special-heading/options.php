<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'title' => array(
        'type' => 'text',
        'label' => __('Heading Title', 'fw'),
        'desc' => __('Write the heading title content', 'fw'),
    ),
    'heading' => array(
        'type' => 'select',
        'label' => __('Heading Size', 'fw'),
        'choices' => array(
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        )
    ),
    'subtitle' => array(
        'type' => 'text',
        'label' => __('Heading Subtitle', 'fw'),
        'desc' => __('Write the heading subtitle content', 'fw'),
    ),
    'centered' => array(
        'type' => 'switch',
        'label' => __('Centered', 'fw'),
//		'left-choice' => array(
//			'value' => 'no',
//			'label' => __('No', 'fw'),
//		),
//		'right-choice' => array(
//			'value' => 'yes',
//			'label' => __('Yes', 'fw'),
//		),
    ),
    'color' => array(
        'type' => 'color-picker',
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
        'label' => __('Heading Color', 'fw'),
        'desc' => __('If you want use diffrent color for parallax or video section', 'fw'),
        'help' => __('If you want use diffrent heading color for parallax or video section. you can easily change from here', 'fw'),
    ),
    'separator' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'show_separator' => array(
                'type' => 'switch',
                'value' => '',
                'label' => __('Separator', 'fw'),
                'desc' => __('Show separator?', 'fw'),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => __('No', 'fw'),
                ),
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => __('Yes', 'fw'),
                )
            ),
        ),
    ),
    'class' => array(
        'type' => 'text',
        'label' => __('Custom Class', 'fw'),
        'desc' => __('Enter a custom CSS class', 'fw'),
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS.', 'fw'),
    ),
);
