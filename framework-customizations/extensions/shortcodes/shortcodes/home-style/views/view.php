<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$title = $atts['title'];
$subtitle = $atts['subtitle'];
$mailchimp = $atts['mailchimp'];
$btn_txt = $atts['btn_txt'];
?>

<!--Home page style-->
<div class="text-center">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="home-content">

                <h1><?php
                    if ($title) {
                        echo wp_kses_post($title);
                    }
                    ?></h1>

                <p><?php
                    if ($subtitle) {
                        echo wp_kses_post($subtitle);
                    }
                    ?></p>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="home-contact">
                           
                            <form id="mailchimpForm" action="<?php echo $mailchimp;?>">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="m2Email1" name="MERGE0" placeholder="<?php _e('Enter your email address'); ?>" required>
                                    <input type="submit" class="form-control" value="<?php echo esc_attr($btn_txt); ?>">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>			


