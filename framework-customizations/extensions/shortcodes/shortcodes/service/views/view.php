<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>


<?php
$image = $atts['image']['url'];
$title = $atts['title'];
$content = $atts['content'];
?>

<div class="service_content">
    <div class="single_service2">
        <div class="single_service_left">
            <img src="<?php
            if ($image) {
                echo esc_url($image);
            }
            ?>" alt="" />
        </div>
        <div class="single_service_right">
            
            <h2><?php
            if ($title) {
                echo wp_kses_post($title);
            }
            ?></h2>
            
            <p><?php
                if ($content) {
                    echo wp_kses_post($content);
                }
            ?></p>
        </div>
    </div>
</div>


