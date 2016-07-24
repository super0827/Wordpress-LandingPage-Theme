<?php
if (!defined('FW')) {
    die('Forbidden');
}
$add1 = $atts['address'];
$add2 = $atts['address2'];
$phone = $atts['phone'];
$email = $atts['email'];
$social = $atts['socials'];
?>
<div class="single_right_contact">

    <div class="contact_address margin-top-40">
        <span><?php echo esc_attr($add1); ?></span>
        <span><?php echo esc_attr($add2); ?></span> 
        <span class="margin-top-20"><?php echo esc_attr($phone); ?></span> 
        <span><?php echo esc_attr($email); ?></span> 
    </div>

    <div class="contact_socail_bookmark">
        <?php foreach ($social as $network): ?>
        <a target="_blank" href="<?php echo $network['social-link']; ?>"><i class="<?php echo $network['icon']; ?>"></i></a>
        <?php endforeach; ?>
    </div>

</div>