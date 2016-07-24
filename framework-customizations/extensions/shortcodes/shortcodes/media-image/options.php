<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'type' => 'upload',
        'label' => __('Choose Image', 'fw'),
        'desc' => __('Either upload a new, or choose an existing image from your media library', 'fw')
    ),

    'image_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'select_size' => array(
                'label' => __('Size', 'fw'),
                'desc' => __('Select the image size', 'fw'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'value' => 'auto',
                'choices' => array(
                    'auto' => __('auto', 'fw'),
                    'custom' => __('Custom', 'fw')
                ),
            ),
        ),
        'choices' => array(
            'custom' => array(
                'width' => array(
                    'label' => '',
                    'desc' => __('Image width in pixels', 'fw'),
                    'type' => 'short-text',
                    'value' => '',
                ),
                'position' => array(
                    'label' => '',
                    'desc' => __('Select image position', 'fw'),
                    'type' => 'image-picker',
                    'value' => 'fw-single-image-center',
                    'choices' => array(
                        'fw-single-image-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => XS_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'fw')
                            ),
                        ),
                        'fw-single-image-center' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => XS_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'fw')
                            ),
                        ),
                        'fw-single-image-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => XS_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'fw')
                            ),
                        ),
                    ),
                ),
            ),
        )
    ),
    'image-link-group' => array(
        'type' => 'group',
        'options' => array(
            'link' => array(
                'type' => 'text',
                'label' => __('Image Link', 'fw'),
                'desc' => __('Where should your image link to?', 'fw')
            ),
            'target' => array(
                'type' => 'switch',
                'label' => __('Open Link in New Window', 'fw'),
                'desc' => __('Select here if you want to open the linked page in a new window', 'fw'),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => __('Yes', 'fw'),
                ),
                'left-choice' => array(
                    'value' => '_self',
                    'label' => __('No', 'fw'),
                ),
            ),
        )
    )
);

