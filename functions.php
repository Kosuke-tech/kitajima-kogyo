<?php

/*----------------------------------------------------------------------------
    cssファイルとjsファイルをfunctions.phpで管理。
-----------------------------------------------------------------------------*/

// css,js
function theme_files()
{
    wp_enqueue_style('style.css', get_theme_file_uri('/css/style.css'), ['min.css'], '6.7.2');
    wp_enqueue_style('min.css', get_theme_file_uri('/css/style.min.css'),);
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null);

    wp_enqueue_script('jquery',);
    wp_enqueue_script('script.js', get_theme_file_uri('js/script.js'), ['jquery', 'swiper.js'], '6.7.2', true);
    wp_enqueue_script('swiper.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);

}

add_action('wp_enqueue_scripts', 'theme_files');

// font awesome (プラグインで読み込み。)
// function enqueue_font_awesome() {
//     wp_enqueue_style('font-awesome', 'https://kit.fontawesome.com/4b1ecdf8a5.js', array(), '6.5.1', 'all');
// }
// add_action('wp_enqueue_scripts', 'enqueue_font_awesome');


/*----------------------------------------------------------------------------
    エラーの解消
-----------------------------------------------------------------------------*/

// PHP Intelephenseによるget_filedの未定義の関数エラーの解消。

if (!function_exists('get_field')) {
    function get_field($field_name, $post_id = false) {
        return ''; // ダミーの戻り値
    }
}

if (!function_exists('the_field')) {
    function the_field($field_name, $post_id = false) {
        return ''; // ダミーの戻り値
    }
}
