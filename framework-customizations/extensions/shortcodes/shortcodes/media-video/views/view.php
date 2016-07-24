<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$video = $atts['video'];
$frame = $atts['frame'];
$width = (int)$atts['width'];
$height = (int)$atts['height'];
$class = $atts['class'];

?>
<?php if(!empty($video)):?>
    <?php
        global $wp_embed;

        $width  = ( is_numeric( $width ) && ($width > 0 ) ) ? $width : '500';
        $height = ( is_numeric( $height ) && ( $height > 0 ) ) ? $height : '315';
        $iframe = $wp_embed->run_shortcode( '[embed  width="' . $width . '" height="' . $height . '"]' . trim( $video ) . '[/embed]' );
    ?>

    <div class="fw-video <?php echo  $frame . ' ' . $class;?>">
        <?php echo do_shortcode($iframe);?>
    </div>
<?php endif;?>
