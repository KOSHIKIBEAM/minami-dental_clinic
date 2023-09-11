<?php
function my_script_init() {
    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");

    wp_enqueue_script("js", get_template_directory_uri() . "/js/script.js", array(), filemtime(get_theme_file_path("/js/script.js")), true);
}
add_action("wp_enqueue_scripts", "my_script_init");

if (!function_exists('sampletheme_setup')) :
    function sampletheme_setup() {

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        set_post_thumbnail_size(1568, 9999);

        register_nav_menus(
            [
                'menu-1' => 'メイン',
                'menu-2' => 'ドロワー',
            ]
        );

        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        );

        add_theme_support(
            'custom-logo',
            [
                'height'      => 30,
                'width'       => 270,
                'flex-width'  => false,
                'flex-height' => false,
            ]
        );
    }
endif;
add_action('after_setup_theme', 'sampletheme_setup');


add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);
function description_in_nav_menu($item_output, $item) {
    return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<span>{$item->attr_title}</span><", $item_output);
}


// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type) {
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

if (!function_exists('bj_register_sidebars')) {

    function bj_register_sidebars() {

        register_sidebar(array(
            'id'            => 'sidebar_1', //ウィジェットのID
            'name'          => 'サイドバー1', //ウィジェットの名前
            'description'   => 'ウィジェットをドラッグして編集してください。', //ウィジェットの説明文
            'before_widget' => '<div>', //ウィジェットを囲う開始タグ
            'after_widget'  => '</div>', //ウィジェットを囲う終了タグ
            'before_title'  => '<h4>', //タイトルを囲う開始タグ
            'after_title'   => '</h4>', //タイトルを囲う終了タグ
        ));
        register_sidebar(array(
            'id'            => 'sidebar_2', //ウィジェットのID
            'name'          => 'サイドバー2', //ウィジェットの名前
            'description'   => 'ウィジェットをドラッグして編集してください。', //ウィジェットの説明文
            'before_widget' => '<div>', //ウィジェットを囲う開始タグ
            'after_widget'  => '</div>', //ウィジェットを囲う終了タグ
            'before_title'  => '<h4>', //タイトルを囲う開始タグ
            'after_title'   => '</h4>', //タイトルを囲う終了タグ
        ));
        register_sidebar(array(
            'id'            => 'sidebar_3', //ウィジェットのID
            'name'          => 'サイドバー3', //ウィジェットの名前
            'description'   => 'ウィジェットをドラッグして編集してください。', //ウィジェットの説明文
            'before_widget' => '<div>', //ウィジェットを囲う開始タグ
            'after_widget'  => '</div>', //ウィジェットを囲う終了タグ
            'before_title'  => '<h4>', //タイトルを囲う開始タグ
            'after_title'   => '</h4>', //タイトルを囲う終了タグ
        ));
    }

    add_action('widgets_init', 'bj_register_sidebars');
}
