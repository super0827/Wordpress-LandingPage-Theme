<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'list_group' => array(
        'type' => 'group',
        'options' => array(
            'list_items' => array(
                'type' => 'addable-popup',
                'label' => __('List Items', 'harmony'),
                'desc' => __('Add list items', 'harmony'),
                'template' => '{{=item}}',
                'popup-options' => array(
                    'sublist_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'item' => array(
                                'label' => __('Item', 'harmony'),
                                'desc' => __('Enter an item in list', 'harmony'),
                                'type' => 'text',
                            ),
                          
                        )
                    ),
                    'btn_link_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'link' => array(
                                'label' => __('Link', 'harmony'),
                                'desc' => __('you can add link if you want', 'harmony'),
                                'type' => 'text',
                            ),
                            'target' => array(
                                'type' => 'switch',
                                'label' => __('', 'harmony'),
                                'desc' => __('Open link in new window?', 'harmony'),
                                'value' => '_self',
                                'right-choice' => array(
                                    'value' => '_blank',
                                    'label' => __('Yes', 'harmony'),
                                ),
                                'left-choice' => array(
                                    'value' => '_self',
                                    'label' => __('No', 'harmony'),
                                ),
                            ),
                        )
                    ),
                ),
            ),
            'separator' => array(
                'type' => 'switch',
                'label' => __('', 'harmony'),
                'desc' => __('Separate each list item by a line?', 'harmony'),
                'value' => '_self',
                'right-choice' => array(
                    'value' => 'list-bordered',
                    'label' => __('Yes', 'harmony'),
                ),
                'left-choice' => array(
                    'value' => '',
                    'label' => __('No', 'harmony'),
                ),
            ),
        )
    ),
    'list_type' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'harmony'),
                'desc' => __('Make a numbered list or add an icon to list items', 'harmony'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'list-default',
                'type' => 'radio',
                'choices' => array(
                    'list-default' => __('None', 'harmony'),
                    'list-numbers' => __('Number', 'harmony'),
                    'list-icon' => __('Icon', 'harmony'),
                ),
            )
        ),
        'choices' => array(
            'list-default' => array(),
            'list-numbers' => array(),
            'list-icon' => array(
                'icon' => array(
                    'type' => 'icon',
                    'label' => __('', 'harmony')
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'harmony'),
        'desc' => __('Enter custom CSS class', 'harmony'),
        'type' => 'text',
        'value' => '',
        'help' => __('You can use this class to further style this shortcode', 'harmony'),
    ),
);
