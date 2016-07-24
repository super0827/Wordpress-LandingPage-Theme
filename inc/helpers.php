<?php
if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Helper functions used all over the theme
 */

/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package xs
 */
/*
  Return
 * 
 *  */

// simply echos the variable

function startuplanding_return($s) {
    return $s;
}

/*
 * FOR ONE PAGE Section
 * since 1.0
 */

function startuplanding_editor_data($value) {
    return wp_kses_post($value);
}

// Gets unyson option data in safe mode
// since 1.0

function startuplanding_get_option($k, $v = '', $m = 'theme-settings') {
    if (defined('FW')) {
        switch ($m) {
            case 'theme-settings':
                $v = fw_get_db_settings_option($k);
                break;

            default:
                $v = '';
                break;
        }
    }
    return $v;
}

// Gets unyson image url from option data in a much simple way
// sience 1.0

function startuplanding_get_image($k, $v = '', $d = false) {

    if ($d == true) {
        $attachment = $k;
    } else {
        $attachment = startuplanding_get_option($k);
    }

    if (isset($attachment['url']) && !empty($attachment)) {
        $v = $attachment['url'];
    }

    return $v;
}

// Gets original page ID/ Slug
// since 1.0

function startuplanding_main($id, $name = true) {
    if (function_exists('icl_object_id')) {
        $id = icl_object_id($id, 'page', true, 'en');
    }

    if ($name === true) {
        $post = get_post($id);
        return $post->post_name;
    } else {
        return $id;
    }
}

// Creates SEO friendly section ID from page ID. Returns page ID directly if $return = true
// since 2.0
function startuplanding_sectionID($id, $returnID = false) {

    if ($returnID == false) {

        $str = get_the_title($id);
        $patterns = array(
            "/[:#+*+&+!+@+!+\.+?+%+$+\"+'+^+\[+<+{+\(+\)}+>+\]+,+`+;+,+=+\\\\]/", // match unwanted special characters
            "@<(script|style)[^>]*?>.*?</\\1>@si", // match <script>, <style> tags
            "/[~\r\n\t \/_|+ -]+/" // match newline, tab and more unwanted characters
        );

        $replacements = array(
            "", // for 1st match
            "", // for 2nd match
            "-" // for 3rd match
        );

        $str = preg_replace($patterns, $replacements, strip_tags($str));
        return strtolower(trim($str, '-'));
    } else {

        return "section-$id";
    }
}

// Gets post's meta data in a much simplier way.
// since 1.0

function startuplanding_get_post_meta($id, $needle) {
    $data = get_post_meta($id, 'fw_options');
    if (is_array($data) && isset($data[0]['page_sections'])) {
        $data = $data[0]['page_sections'];

        if (is_array($data)) {
            return startuplanding_seekKey($data, $needle);
        }
    }
}

function startuplanding_seekKey($haystack, $needle) {
    foreach ($haystack as $key => $value) {

        if ($key == $needle) {
            return $value;
        } elseif (is_array($value)) {
            return startuplanding_seekKey($value, $needle);
        }
    }
}

/*
 * btn Function
 * since 1.0
 */
//btn function

if (!function_exists('fw_theme_button_class')) :

    function fw_theme_button_class($style) {
        /**
         * Display specific class for buttons - depends on theme
         */
        if ($style == 'default') {
            echo 'btn btn-default btnxs';
        } elseif ($style == 'primary') {
            echo 'btn btn-primary btnxs';
        } else {
            echo 'default';
        }
    }

endif;


/*
 * wpml compatitible 
 */

if (!function_exists('fw_theme_translate')) :

    function fw_theme_translate($content) {
        /**
         * Return the content for translations plugins
         * @param string $content
         */
        $content = html_entity_decode($content, ENT_QUOTES, 'UTF-8');

        if (function_exists('icl_object_id') && strpos($content, 'wpml_translate') == true) {
            $content = do_shortcode($content);
        } elseif (function_exists('qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage')) {
            $content = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($content);
        }

        return $content;
    }

endif;


/*
 * This fucntion for recent post shortcode.
 * people can select show from one category or from all category
 * since 1.0
 */



/*
 * THis function for favicon
 * since 1.0
 */


if (!function_exists('startuplanding_get_header_icons')) {

    function startuplanding_get_header_icons() {


        if (!defined('FW')) {
            return;
        }

        $favicon = startuplanding_get_image('favicon', XS_IMAGES . '/ico/favicon.png');
        $apple52 = startuplanding_get_image('apple_touch_icon52', XS_IMAGES . '/ico/apple-52.png');
        $apple72 = startuplanding_get_image('apple_touch_icon72', XS_IMAGES . '/ico/apple-72.png');
        $apple114 = startuplanding_get_image('apple_touch_icon114', XS_IMAGES . '/ico/apple-114.png');
        $apple144 = startuplanding_get_image('apple_touch_icon144', XS_IMAGES . '/ico/apple-144.png');


        if (!empty($favicon)) {
            echo '<meta property="og:image" content="' . esc_url($favicon) . '"/>' . "\n";
        }
        if (!empty($favicon)) {
            echo '<link rel="shortcut icon" type="image/png" href="' . esc_url($favicon) . '">' . "\n";
        }
        if (!empty($apple52)) {
            echo '<link rel="apple-touch-icon-precomposed" sizes="52x52" href="' . esc_url($apple52) . '">' . "\n";
        }
        if (!empty($apple72)) {
            echo '<link rel="apple-touch-icon-precomposed" sizes="72x72" href="' . esc_url($apple72) . '">' . "\n";
        }
        if (!empty($apple114)) {
            echo '<link rel="apple-touch-icon-precomposed" sizes="114x114" href="' . esc_url($apple114) . '">' . "\n";
        }
        if (!empty($apple144)) {
            echo '<link rel="apple-touch-icon-precomposed" sizes="144x144" href="' . esc_url($apple144) . '">' . "\n";
        }
    }

}




/*
 * Section Edit option
 * 
 * This function for show section edit option in every section in one page 
 * 
 * Since 1.0
 *  */

function startuplanding_edit_section($section_id) {
    ?>
    <div class="edit-section">
        <?php
        if (is_user_logged_in()) {
            $id = $section_id != '' ? $section_id : '';
            edit_post_link(__("Edit " . $id, 'startuplanding'), '<span class="meta-edit">', '</span>');
        }
        ?>
    </div> 
    <?php
}

if (!function_exists('blog_hero_heading')) :

    function blog_hero_heading() {
        $heading = '';
        if (defined('FW')) {
            $hero_heading = fw_get_db_settings_option('general_posts_header');
            $heading = $hero_heading['header_title'];
        }
        ?>
        <div class="blog-hero-bg">
            <div class="blog-hero">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h1 class="text-center text-white"><?php echo esc_attr($heading); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

endif;

if (!function_exists('page_hero_heading')) :

    function page_hero_heading() {
        $heading = '';
        if (defined('FW')) {
            $hero_heading = fw_get_db_settings_option('general_page_header');
            $heading = $hero_heading['header_title'];
        }
        ?>
        <div class="page-hero-bg">
            <div class="blog-hero page-hero">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h1 class="text-center  white-text"><?php echo esc_attr($heading); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

endif;

if (!function_exists('fw_favicon')) :

    function fw_favicon($return = false) {
        /**
         * Display theme favicon
         */
        if (!defined('FW')) {
            return;
        }

        $favicon = fw_get_db_settings_option('favicon');
        if ($return) {
            return $favicon['url'];
        } else {
            if (!empty($favicon)) :
                ?>
                <link rel="icon" type="image/png" href="<?php echo esc_url($favicon['url']); ?>">
                <?php
            endif;
        }
    }



endif;



