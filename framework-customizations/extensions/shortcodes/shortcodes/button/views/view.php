<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$label = $atts['label'];
$link = $atts['link'];
$target = $atts['target'];

?>

<a href="<?php echo esc_url($link) ?>" target="<?php echo esc_attr($target); ?>"  class="btn btn-default"><?php echo wp_kses_post($label); ?></a>


