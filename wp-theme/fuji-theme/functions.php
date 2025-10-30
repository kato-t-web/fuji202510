<?php
/**
 * 居食処富士 テーマ functions.php
 */

// テーマのセットアップ
function fuji_theme_setup() {
    // タイトルタグのサポート
    add_theme_support('title-tag');

    // アイキャッチ画像のサポート
    add_theme_support('post-thumbnails');

    // HTMLのサポート
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // ナビゲーションメニューの登録
    register_nav_menus(array(
        'primary' => 'メインメニュー',
    ));
}
add_action('after_setup_theme', 'fuji_theme_setup');

// CSS/JSの読み込み
function fuji_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@400;500;700&display=swap', array(), null);

    // カスタムCSS
    wp_enqueue_style('fuji-custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0');

    // カスタムJS
    wp_enqueue_script('fuji-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'fuji_enqueue_scripts');

// カスタム投稿タイプ: お知らせ
function fuji_register_news_post_type() {
    $labels = array(
        'name' => 'お知らせ',
        'singular_name' => 'お知らせ',
        'add_new' => '新規追加',
        'add_new_item' => '新しいお知らせを追加',
        'edit_item' => 'お知らせを編集',
        'new_item' => '新しいお知らせ',
        'view_item' => 'お知らせを表示',
        'search_items' => 'お知らせを検索',
        'not_found' => 'お知らせが見つかりませんでした',
        'not_found_in_trash' => 'ゴミ箱にお知らせはありません',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'news'),
    );

    register_post_type('news', $args);
}
add_action('init', 'fuji_register_news_post_type');

// カスタム投稿タイプ: メニュー
function fuji_register_menu_post_type() {
    $labels = array(
        'name' => 'お品書き',
        'singular_name' => 'メニュー',
        'add_new' => '新規追加',
        'add_new_item' => '新しいメニューを追加',
        'edit_item' => 'メニューを編集',
        'new_item' => '新しいメニュー',
        'view_item' => 'メニューを表示',
        'search_items' => 'メニューを検索',
        'not_found' => 'メニューが見つかりませんでした',
        'not_found_in_trash' => 'ゴミ箱にメニューはありません',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-food',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'menu'),
    );

    register_post_type('menu_item', $args);
}
add_action('init', 'fuji_register_menu_post_type');

// メニューカテゴリーのタクソノミー登録
function fuji_register_menu_taxonomy() {
    $labels = array(
        'name' => 'メニューカテゴリー',
        'singular_name' => 'メニューカテゴリー',
        'search_items' => 'カテゴリーを検索',
        'all_items' => 'すべてのカテゴリー',
        'edit_item' => 'カテゴリーを編集',
        'update_item' => 'カテゴリーを更新',
        'add_new_item' => '新しいカテゴリーを追加',
        'new_item_name' => '新しいカテゴリー名',
        'menu_name' => 'カテゴリー',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'menu-category'),
    );

    register_taxonomy('menu_category', array('menu_item'), $args);
}
add_action('init', 'fuji_register_menu_taxonomy');

// 抜粋の文字数制限
function fuji_excerpt_length($length) {
    return 40;
}
add_filter('excerpt_length', 'fuji_excerpt_length');

// 抜粋の最後の文字
function fuji_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'fuji_excerpt_more');

// サムネイル画像のサイズを追加
add_image_size('news-thumbnail', 400, 300, true);
add_image_size('menu-thumbnail', 384, 272, true);
add_image_size('slider-image', 1920, 1080, true);
