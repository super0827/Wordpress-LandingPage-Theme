<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'default_padding' => array(
        'type' => 'radio',
        'label' => __('Default Spacing', 'fw'),
        'desc' => __('Use default left and right spacing?', 'fw'),
        'help' => __("Default left and right spacings are set to 15px,  fluid spacing will add more space top left right", "fw"),
        'value' => '',
        'choices' => array(
            'default-space' => __('Default', 'unyson'),
            'fluid-blocks-col' => __('Fluid Spaceing', 'unyson'),
            'fw-col-no-padding' => __('No Space', 'unyson'),
        ),
    ),
    'padding_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Additional Spacing', 'fw'),
                'html' => '',
            ),
            'padding_top' => array(
                'label' => false,
                'desc' => __('top', 'fw'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_right' => array(
                'label' => false,
                'desc' => __('right', 'fw'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'fw'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_left' => array(
                'label' => false,
                'desc' => __('left', 'fw'),
                'type' => 'short-text',
                'value' => '0',
            ),
        )
    ),
    'text_align' => array(
        'type' => 'switch',
        'label' => __('Text Align', 'fw'),
        'desc' => __('Text align for half column', 'fw'),
        'value'=>'left',
        'left-choice' => array(
            'value' => 'left',
            'label' => __('Left', 'fw'),
        ),
        'right-choice' => array(
            'value' => 'half-float-right',
            'label' => __('Right', 'fw'),
        ),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'fw'),
                'desc' => __('Select the background for your column', 'fw'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'fw'),
                    'image' => __('Image', 'fw'),
                    'bgcolor' => __('Color', 'fw'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'fw'),
                    'help' => __('', 'fw'),
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
                    'label' => __('', 'fw'),
                    'desc' => __('Select how will the background repeat', 'fw'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => 'no-repeat',
                    'choices' => array(
                        'no-repeat' => __('No-Repeat', 'fw'),
                        'repeat' => __('Repeat', 'fw'),
                        'repeat-x' => __('Repeat-X', 'fw'),
                        'repeat-y' => __('Repeat-Y', 'fw'),
                    )
                ),
                'bg_position_x' => array(
                    'label' => __('Position', 'fw'),
                    'desc' => __('Select the horizontal background position', 'fw'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'left' => __('Left', 'fw'),
                        'center' => __('Center', 'fw'),
                        'right' => __('Right', 'fw'),
                    )
                ),
                'bg_position_y' => array(
                    'label' => __('', 'fw'),
                    'desc' => __('Select the vertical background position', 'fw'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'top' => __('Top', 'fw'),
                        'center' => __('Center', 'fw'),
                        'bottom' => __('Bottom', 'fw'),
                    )
                ),
                'bg_size' => array(
                    'label' => __('Size', 'fw'),
                    'desc' => __('Select the background size', 'fw'),
                    'help' => __('<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'fw'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'auto' => __('Auto', 'fw'),
                        'cover' => __('Cover', 'fw'),
                        'contain' => __('Contain', 'fw'),
                    )
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
                                'help' => __('', 'fw'),
                                'desc' => __('Select the overlay color', 'fw'),
                                'type' => 'rgba-color-picker',
                                'value' => 'rgba(0,0,0,0.55)'
                            ),
                        ),
                    ),
                ),
            ),
            'bgcolor' => array(
                'background_color' => array(
                    'label' => __('', 'fw'),
                    'help' => __('', 'fw'),
                    'desc' => __('Select the background color', 'fw'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            )
        ),
        'show_borders' => false,
    ),
    'txtcolor' => array(
        'label' => __('Text Color', 'fw'),
        'type' => 'color-picker',
        'desc' => 'You can change color also',
    ),
    'tablet' => array(
        'label' => __('Responsive Layout for Tablet', 'fw'),
        'desc' => __('Choose the responsive tablet display for this column', 'fw'),
        'help' => __('Use this option in order to control how this column behaves on tablets (and devices with the resoution between 768px - 990px). Note that on phones all the columns are 1/1 by default.', 'fw'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Automatically inherit default layout', 'fw'),
            'fw-col-sm-2' => __('Make it a 1/6 column', 'fw'),
            'fw-col-sm-3' => __('Make it a 1/4 column', 'fw'),
            'fw-col-sm-4' => __('Make it a 1/3 column', 'fw'),
            'fw-col-sm-6' => __('Make it a 1/2 column', 'fw'),
            'fw-col-sm-8' => __('Make it a 2/3 column', 'fw'),
            'fw-col-sm-9' => __('Make it a 3/4 column', 'fw'),
            'fw-col-sm-12' => __('Make it a 1/1 column', 'fw'),
        )
    ),
    'offset' => array(
        'label' => __('Layout Offset', 'fw'),
        'desc' => __('Move columns to the right using .fw-col-md-offset-* classes ', 'fw'),
        'help' => __('These classes increase the left margin of a column by * columns. For example, .fw-col-md-offset-4 moves .fw-col-md-4 over four columns.', 'fw'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Nothing', 'fw'),
            'fw-col-sm-offset-2' => __('moves 1 column', 'fw'),
            'fw-col-sm-offset-3' => __('moves 2 column', 'fw'),
            'fw-col-sm-offset-4' => __('moves 3 column', 'fw'),
            'fw-col-sm-offset-6' => __('moves 4 column', 'fw'),
            'fw-col-sm-offset-8' => __('moves 5 column', 'fw'),
            'fw-col-sm-offset-9' => __('moves 6 column', 'fw'),
        )
    ),
    'class' => array(
        'label' => __('Custom Class', 'fw'),
        'desc' => __('Enter custom CSS class', 'fw'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'fw'),
        'type' => 'text',
        'value' => '',
    ),
);
