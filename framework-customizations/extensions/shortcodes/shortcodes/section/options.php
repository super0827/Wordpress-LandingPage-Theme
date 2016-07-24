<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'is_fullwidth' => array(
        'label' => __('Full Width', 'fw'),
        'type' => 'switch',
    ),
    'default_spacing' => array(
        'type' => 'switch',
        'label' => __('Default Spacing', 'fw'),
        'desc' => __('Use default top and bottom spacing?', 'fw'),
        'value' => 'yes',
        'right-choice' => array(
            'value' => 'yes',
            'label' => __('Yes', 'fw'),
        ),
        'left-choice' => array(
            'value' => 'no',
            'label' => __('No', 'fw'),
        ),
    ),
    'height' => array(
        'label' => __('Height', 'fw'),
        'desc' => __("Select the section's height in px (Ex: 400) (dont include with <b>px</b>)", "fw"),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'fw'),
            'fw-section-height-sm' => __('small', 'fw'),
            'fw-section-height-md' => __('medium', 'fw'),
            'fw-section-height-lg' => __('large', 'fw'),
        ),
        'custom' => 'custom_width',
        'help' => __('This option to set extra height in your section. we have used three classs for extra height which fw-section-height-sm = 350px, fw-section-height-md= 450px , fw-section-height-lg = 650px. you can use your custom height to like just add 400 (dont include with px)', 'fw'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'fw'),
                'desc' => __('Select the background for your section', 'fw'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'fw'),
                    'color' => __('Color', 'fw'),
                    'image' => __('Image', 'fw'),
                    'video' => __('Video', 'fw'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'fw'),
                    'desc' => __('Select the background color', 'fw'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            ),
            'image' => array(
                'background_image' => array(
                    'label' => __('', 'fw'),
                    'type' => 'background-image',
                    'choices' => array(//	in future may will set predefined images
                    )
                ),
                'repeat' => array(
                    'type' => 'switch',
                    'label' => __('Repeat', 'fw'),
                    'desc' => __('Image Repeat Yes or No?', 'fw'),
                    'value' => 'no',
                    'right-choice' => array(
                        'value' => 'repeat',
                        'label' => __('Yes', 'fw'),
                    ),
                    'left-choice' => array(
                        'value' => 'no-repeat',
                        'label' => __('No', 'fw'),
                    ),
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'fw'),
                            'desc' => __('Enable image overlay color?', 'fw'),
                            'value' => 'no',
                            'right-choice' => array(
                                'value' => 'yes',
                                'label' => __('Yes', 'fw'),
                            ),
                            'left-choice' => array(
                                'value' => 'no',
                                'label' => __('No', 'fw'),
                            ),
                        ),
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'fw'),
                                'desc' => __('Select the overlay color', 'fw'),
                                'value' => 'rgba(0,0,0,0.30)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                    ),
                ),
            ),
            'video' => array(
                'video' => array(
                    'label' => __('', 'fw'),
                    'desc' => __('Insert a YouTube or Vimeo video URL', 'fw'),
                    'type' => 'text',
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'fw'),
                            'desc' => __('Enable video overlay color?', 'fw'),
                            'value' => 'no',
                            'right-choice' => array(
                                'value' => 'yes',
                                'label' => __('Yes', 'fw'),
                            ),
                            'left-choice' => array(
                                'value' => 'no',
                                'label' => __('No', 'fw'),
                            ),
                        ),
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'fw'),
                                'desc' => __('Select the overlay color', 'fw'),
                                'value' => 'rgba(0,0,0,0.30)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'fw'),
        'desc' => __('Enter custom CSS class', 'fw'),
        'type' => 'text',
        'value' => '',
    ),
);
