<?php
if (!defined('FW'))
    die('Forbidden');
/**
 * @var string $title
 * @var string $subtitle
 */
if (empty($title)) {
    return;
}
?>
<div class="fw-heading fw-heading-h1  text-center wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
    <h1 class="fw-special-title"><?php echo esc_attr($title); ?></h1>
    <?php if (!empty($subtitle)) : ?>
        <div class="fw-special-subtitle text-center "><?php echo esc_attr($subtitle); ?> </div>
    <?php endif ?>
    <div class="separator text-center"></div>
</div>