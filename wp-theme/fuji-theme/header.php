<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="l-header">
    <div class="l-header__inner">
        <div class="c-logo">
            <h1>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo_header.png" alt="<?php bloginfo('name'); ?>">
                </a>
            </h1>
        </div>
        <button class="c-hamburger" aria-label="メニュー">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="c-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'c-nav__list',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                'fallback_cb' => 'fuji_fallback_menu',
            ));
            ?>
        </nav>
    </div>
</header>

<?php
// デフォルトメニュー（メニューが設定されていない場合）
function fuji_fallback_menu() {
    echo '<ul class="c-nav__list">';
    echo '<li class="c-nav__item"><a class="c-nav__link" href="#news">お知らせ</a></li>';
    echo '<li class="c-nav__item"><a class="c-nav__link" href="#concept">こだわり</a></li>';
    echo '<li class="c-nav__item"><a class="c-nav__link" href="#store">店舗紹介</a></li>';
    echo '<li class="c-nav__item"><a class="c-nav__link" href="#menu">お品書き</a></li>';
    echo '<li class="c-nav__item"><a class="c-nav__link" href="' . esc_url(home_url('/flow')) . '">ご利用の流れ</a></li>';
    echo '<li class="c-nav__item"><a class="c-nav__link" href="#recruit">求人情報</a></li>';
    echo '<li class="c-nav__item"><a class="c-nav__link" href="#info">店舗情報</a></li>';
    echo '<li class="c-nav__item"><a class="c-nav__link" href="#contact">お問い合わせ</a></li>';
    echo '</ul>';
}
?>
