<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'blog_settings' => array(
        'title' => __('Blog Settings', 'fw'),
        'type' => 'tab',
        'options' => array(
            'header-posts-box' => array(
                'title' => __('Posts Header', 'fw'),
                'type' => 'box',
                'options' => array(
                    'general_posts_header' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'posts_header_group' => array(
                                'type' => 'group',
                                'options' => array(
                                    'header_title' => array(
                                        'type' => 'text',
                                        'label' => 'Blog Title',
                                        'desc' => 'Add your blog hero title',
                                    ),
                                    'header_image' => array(
                                        'label' => __('Header Image', 'fw'),
                                        'desc' => __('Upload a header image', 'fw'),
                                        'help' => __("This default header image will be used for all your posts.", "fw"),
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
            'blog' => array(
                'title' => __('Blog Settings', 'fw'),
                'type' => 'box',
                'options' => array(
                    'blog_display_settings' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'post_date' => array(
                                'label' => __('Post Date', 'fw'),
                                'desc' => __('Show post date?', 'fw'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'fw')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'fw')
                                ),
                                'value' => 'yes',
                            ),
                            'post_author' => array(
                                'label' => __('Post Author', 'fw'),
                                'desc' => __('Show post author?', 'fw'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'fw')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'fw')
                                ),
                                'value' => 'yes',
                            ),
                            'post_categories' => array(
                                'label' => __('Post Categories', 'fw'),
                                'desc' => __('Show post categories?', 'fw'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'fw')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'fw')
                                ),
                                'value' => 'yes',
                            ),
                            'post_comment' => array(
                                'label' => __('Post Comment', 'fw'),
                                'desc' => __('Show post Comment?', 'fw'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'fw')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'fw')
                                ),
                                'value' => 'yes',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
