<?php
/**
 * Template Name: Menu Page（お品書き）
 * Template Post Type: page
 */

get_header();
?>

<div class="l-menu-mainvisual">
    <div class="l-menu-mainvisual__overlay"></div>
    <h2 class="l-menu-mainvisual__title">お品書き</h2>
</div>

<section class="l-menu-page">
    <div class="l-menu-page__inner">
        <nav class="c-breadcrumb">
            <ul class="c-breadcrumb__list">
                <li class="c-breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                <li class="c-breadcrumb__item">お品書き</li>
            </ul>
        </nav>

        <nav class="c-menu-nav">
            <a href="#recommended" class="c-menu-nav__button">
                <span class="c-menu-nav__text">おすすめ</span>
                <span class="c-menu-nav__arrow">↓</span>
            </a>
            <a href="#teishoku" class="c-menu-nav__button">
                <span class="c-menu-nav__text">定 食</span>
                <span class="c-menu-nav__arrow">↓</span>
            </a>
            <a href="#noodles" class="c-menu-nav__button">
                <span class="c-menu-nav__text">麺 類</span>
                <span class="c-menu-nav__arrow">↓</span>
            </a>
            <a href="#rice" class="c-menu-nav__button">
                <span class="c-menu-nav__text">ご飯類</span>
                <span class="c-menu-nav__arrow">↓</span>
            </a>
            <a href="#ippin" class="c-menu-nav__button">
                <span class="c-menu-nav__text">一品料理</span>
                <span class="c-menu-nav__arrow">↓</span>
            </a>
            <a href="#night" class="c-menu-nav__button">
                <span class="c-menu-nav__text">夜メニュー</span>
                <span class="c-menu-nav__arrow">↓</span>
            </a>
            <a href="#drinks" class="c-menu-nav__button">
                <span class="c-menu-nav__text">ドリンク</span>
                <span class="c-menu-nav__arrow">↓</span>
            </a>
            <a href="#dessert" class="c-menu-nav__button">
                <span class="c-menu-nav__text">デザート</span>
                <span class="c-menu-nav__arrow">↓</span>
            </a>
        </nav>
    </div>
</section>

<section class="l-menu-section" id="recommended">
    <div class="l-menu-section__inner">
        <h3 class="c-menu-section-title">おすすめ</h3>
        <div class="c-menu-grid">
            <!-- 実際のメニュー項目はWordPressの管理画面で編集可能にすることを推奨 -->
            <!-- 今回は静的HTMLとして実装 -->
            <div class="c-menu-card">
                <div class="c-menu-card__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_menu01.jpg" alt="メニュー">
                    <h4 class="c-menu-card__title">メニュー名</h4>
                </div>
                <div class="c-menu-card__content">
                    <p class="c-menu-card__description">メニューの説明文がここに入ります。</p>
                    <p class="c-menu-card__price">¥1,000</p>
                </div>
            </div>
            <!-- 他のメニューカードを追加 -->
        </div>
    </div>
</section>

<section class="l-menu-section l-menu-section--alt" id="teishoku">
    <div class="l-menu-section__inner">
        <h3 class="c-menu-section-title">定食</h3>
        <div class="c-menu-grid">
            <!-- メニューカードを追加 -->
        </div>
    </div>
</section>

<section class="l-menu-section" id="noodles">
    <div class="l-menu-section__inner">
        <h3 class="c-menu-section-title">麺類</h3>
        <div class="c-menu-grid">
            <!-- メニューカードを追加 -->
        </div>
    </div>
</section>

<section class="l-menu-section l-menu-section--alt" id="rice">
    <div class="l-menu-section__inner">
        <h3 class="c-menu-section-title">ご飯もの</h3>
        <div class="c-menu-grid">
            <!-- メニューカードを追加 -->
        </div>
    </div>
</section>

<section class="l-menu-section" id="ippin">
    <div class="l-menu-section__inner">
        <h3 class="c-menu-section-title">一品料理</h3>
        <div class="c-menu-grid">
            <!-- メニューカードを追加 -->
        </div>
    </div>
</section>

<section class="l-menu-section l-menu-section--alt" id="night">
    <div class="l-menu-section__inner">
        <h3 class="c-menu-section-title">夜メニュー</h3>
        <div class="c-menu-grid">
            <!-- メニューカードを追加 -->
        </div>
    </div>
</section>

<section class="l-menu-section" id="drinks">
    <div class="l-menu-section__inner">
        <h3 class="c-menu-section-title">ドリンク</h3>
        <div class="c-menu-grid">
            <!-- メニューカードを追加 -->
        </div>
    </div>
</section>

<section class="l-menu-section l-menu-section--alt" id="dessert">
    <div class="l-menu-section__inner">
        <h3 class="c-menu-section-title">デザート</h3>
        <div class="c-menu-grid">
            <!-- メニューカードを追加 -->
        </div>
    </div>
</section>

<div class="l-spacer"></div>

<?php get_footer(); ?>
