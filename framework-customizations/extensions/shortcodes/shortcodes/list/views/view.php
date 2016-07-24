<?php
if (!defined('FW')) {
    die('Forbidden');

    /**
     * @var array $atts
     */
}
?>
<?php
$list = 'ul';
if ($atts['list_type']['selected_value'] == 'list-numbers') {
    $list = 'ol';
}

?>
<div class="fw-list <?php echo esc_attr($atts['list_type']['selected_value']); ?> <?php echo esc_attr($atts['separator']); ?> <?php echo esc_attr($atts['class']); ?>">
    <<?php echo  $list; ?>>
    <?php if (!empty($atts['list_items'])) : ?>
            <?php foreach ($atts['list_items'] as $list_item) : ?>
                <?php if ($atts['list_type']['selected_value'] == 'list-icon') : ?>
                <li><i class="<?php echo  $atts['list_type']['list-icon']['icon']; ?>"></i>
                    <?php
                    if ($list_item['link'] != '') {
                        echo '<a href="' . esc_url($list_item['link']) . '" target="' . esc_attr($list_item['target']) . '">' . fw_theme_translate(esc_attr($list_item['item'])) . '</a>';
                    } else {
                        echo fw_theme_translate(esc_attr($list_item['item']));
                    }
                    ?>

                    <?php // begin sublist
                    if (isset($list_item['sublist_items']) && !empty($list_item['sublist_items'])) :
                        ?>
                        <<?php echo  $list; ?>>
                       
                        <?php foreach ($list_item['sublist_items'] as $sublist_item) : ?>
                        
                        
                            <?php if ($atts['list_type']['selected_value'] == 'list-icon') : ?>
                            <li><i class="<?php echo  $atts['list_type']['list-icon']['icon']; ?>"></i>
                                <?php
                                if ($sublist_item['link'] != '') {
                                    echo '<a href="' . esc_url($sublist_item['link']) . '" target="' . esc_attr($sublist_item['target_subitem']) . '">' . fw_theme_translate(esc_attr($sublist_item['subitem'])) . '</a>';
                                } else {
                                    echo fw_theme_translate(esc_attr($sublist_item['subitem']));
                                }
                                ?>
                            </li>
                            <?php else : ?>
                            <li><?php
                                if ($sublist_item['link'] != '') {
                                    echo '<a href="' . esc_url($sublist_item['link']) . '" target="' . esc_attr($sublist_item['target_subitem']) . '">' . fw_theme_translate(esc_attr($sublist_item['subitem'])) . '</a>';
                                } else {
                                    echo fw_theme_translate(esc_attr($sublist_item['subitem']));
                                }
                                ?>
                            </li>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </<?php echo  $list; ?>>
                <?php endif; // end sublist ?>
            </li>
            <?php else : ?>
            <li><?php
            if ($list_item['link'] != '') {
                echo '<a href="' . esc_url($list_item['link']) . '" target="' . esc_attr($list_item['target']) . '">' . fw_theme_translate(esc_attr($list_item['item'])) . '</a>';
            } else {
                echo fw_theme_translate(esc_attr($list_item['item']));
            }
                ?>

                <?php // begin sublist
                if (isset($list_item['sublist_items']) && !empty($list_item['sublist_items'])) :
                    ?>
                    <<?php echo  $list; ?>>
                    <?php foreach ($list_item['sublist_items'] as $sublist_item) : ?>
                        <?php if ($atts['list_type']['selected_value'] == 'list-icon') : ?>
                        <li><i class="<?php echo  $atts['list_type']['list-icon']['icon']; ?>"></i>
                        <?php
                        if ($sublist_item['link'] != '') {
                            echo '<a href="' . esc_url($sublist_item['link']) . '" target="' . esc_attr($sublist_item['target_subitem']) . '">' . fw_theme_translate(esc_attr($sublist_item['subitem'])) . '</a>';
                        } else {
                            echo fw_theme_translate(esc_attr($sublist_item['subitem']));
                        }
                        ?>
                        </li>
                    <?php else : ?>
                        <li><?php
                        if ($sublist_item['link'] != '') {
                            echo '<a href="' . esc_url($sublist_item['link']) . '" target="' . esc_attr($sublist_item['target_subitem']) . '">' . fw_theme_translate(esc_attr($sublist_item['subitem'])) . '</a>';
                        } else {
                            echo fw_theme_translate(esc_attr($sublist_item['subitem']));
                        }
                        ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
                </<?php echo  $list; ?>>
            <?php endif; // end sublist  ?>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
</<?php echo  $list; ?>>
</div>