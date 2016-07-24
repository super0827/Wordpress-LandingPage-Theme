<?php if (!defined('FW')) { die('Forbidden');}?>

<?php

$icon = $atts['icon'];
$title = $atts['title'];
$content = $atts['content'];


?>

<div class="portfolio-wrapper text-center">
    <div class="community-edition">
        <i class="<?php echo esc_attr($icon);?>"></i>
        <div class="separator"></div>
        <?php if($title){?>
        <h4><?php echo esc_attr($title);?></h4>
        <?php }?>
        <p><?php echo wp_kses_post($content);?></p>
    </div>
</div>