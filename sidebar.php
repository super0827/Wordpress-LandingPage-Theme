<?php
/**
 * sidebar.php
 *
 * The primary sidebar.
 */
?>



    <aside id="sidebar" class="sidebar col-md-4" role="complementary">
        <?php
        if (class_exists('woocommerce')) {
            if (is_cart() || is_checkout() || is_account_page()) {
                dynamic_sidebar('sidebar-2');
            } else {
                dynamic_sidebar('sidebar-1');
            }
        } else {
            dynamic_sidebar('sidebar-1');
        }
    ?>
</aside> <!-- end sidebar -->

