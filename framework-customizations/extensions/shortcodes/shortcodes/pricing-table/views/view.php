<?php
if (!defined('FW')) {
    die('Forbidden');
}

$price = $atts['price'];
?>
<div class="cd-pricing-container cd-has-margins">
    <div class="cd-pricing-switcher">
        <p class="fieldset">
            <input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
            <label for="monthly-2">MONTHLY</label>
            <input type="radio" name="duration-2" value="yearly" id="yearly-2">
            <label for="yearly-2">YEARLY</label>
            <span class="cd-switch"></span>
        </p>
    </div> <!-- .cd-pricing-switcher -->

    <ul class="cd-pricing-list cd-bounce-invert">
<?php foreach ($price as $prices): ?>



    <?php 
    $monthly = $prices['monthly'];
    $yearly = $prices['yearly'];
    ?>

            <li class="cd-popular">
                <ul class="cd-pricing-wrapper">
                        <?php foreach ( $monthly as $item): ?>
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header <?php echo esc_attr($item['highlight']); ?>">
                                    <h2><?php echo wp_kses_post($item['name']); ?></h2>
                                    <div class="cd-price">
                                        <span class="cd-currency"><?php echo esc_attr($item['currency']); ?></span>
                                        <span class="cd-value"><?php echo esc_attr($item['price']); ?></span>
                                        <span class="cd-duration"><?php echo esc_attr($item['unit']); ?></span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <?php foreach ($item['item'] as $list): ?> 
                                            <li><em><i class="<?php echo esc_attr($list['icon']); ?>"></i></em><?php echo esc_attr($list['items']); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a target="<?php echo esc_attr($item['target']); ?>" class="cd-select <?php echo esc_attr($item['highlight']); ?>" href="<?php echo esc_attr($item['link']); ?>"><?php echo esc_attr($item['btn_txt']); ?></a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        <?php endforeach; ?>
     

              
                        <?php foreach ($yearly as $item): ?>
                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header <?php echo esc_attr($item['highlight']); ?>">
                                    <h2><?php echo wp_kses_post($item['name']); ?></h2>

                                    <div class="cd-price">
                                        <span class="cd-currency"><?php echo esc_attr($item['currency']); ?></span>
                                        <span class="cd-value"><?php echo esc_attr($item['price']); ?></span>
                                        <span class="cd-duration"><?php echo esc_attr($item['unit']); ?></span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <?php foreach ($item['item'] as $list): ?> 
                                            <li><em><i class="<?php echo esc_attr($list['icon']); ?>"></i></em><?php echo esc_attr($list['items']); ?></li>
                                        <?php endforeach; ?>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a target="<?php echo esc_attr($item['target']); ?>" class="cd-select <?php echo esc_attr($item['highlight']); ?>" href="<?php echo esc_attr($item['link']); ?>"><?php echo esc_attr($item['btn_txt']); ?></a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        <?php endforeach; ?>
                 
                </ul> <!-- .cd-pricing-wrapper -->
            </li>
        <?php endforeach; ?>

    </ul> <!-- .cd-pricing-list -->
</div> <!-- .cd-pricing-container -->	