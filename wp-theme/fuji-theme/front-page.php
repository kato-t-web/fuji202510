<?php
/**
 * トップページテンプレート
 */

get_header();
?>

<div class="l-mainvisual">
    <div class="c-slider">
        <div class="c-slider__item is-active">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mv01.jpg" alt="メインビジュアル1">
            <div class="c-slider__overlay"></div>
        </div>
        <div class="c-slider__item">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mv02.jpg" alt="メインビジュアル2">
            <div class="c-slider__overlay"></div>
        </div>
        <div class="c-slider__item">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mv03.jpg" alt="メインビジュアル3">
            <div class="c-slider__overlay"></div>
        </div>
        <div class="c-slider__dots">
            <button class="c-slider__dot is-active" data-index="0"></button>
            <button class="c-slider__dot" data-index="1"></button>
            <button class="c-slider__dot" data-index="2"></button>
        </div>
    </div>
    <div class="c-mv-text" data-slide="0">
        <p class="c-mv-text__line">和の温もりに</p>
        <p class="c-mv-text__line">心ほどけるおもてなし</p>
    </div>
    <div class="c-mv-text" data-slide="1">
        <p class="c-mv-text__line">季節の味覚を</p>
        <p class="c-mv-text__line">心ゆくまで堪能する</p>
    </div>
    <div class="c-mv-text" data-slide="2">
        <p class="c-mv-text__line">大切な人と</p>
        <p class="c-mv-text__line">特別なひとときを</p>
    </div>
    <div class="c-mv-buttons">
        <a href="#" class="c-mv-button c-mv-button--youtube" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/button_youtube.png" alt="YouTube">
        </a>
        <a href="#" class="c-mv-button c-mv-button--instagram" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/button_instagram.png" alt="Instagram">
        </a>
        <a href="#contact" class="c-mv-button c-mv-button--contact">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/button_contact.png" alt="お問い合わせ">
        </a>
    </div>
</div>

<section class="l-news" id="news">
    <div class="l-news__inner">
        <h2 class="c-section-title js-fadein">新着情報</h2>
        <div class="c-news">
            <?php
            // お知らせの投稿を取得
            $news_args = array(
                'post_type' => 'news',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $news_query = new WP_Query($news_args);

            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
            ?>
                <a href="<?php the_permalink(); ?>" class="c-news__item js-fadein">
                    <time class="c-news__date"><?php echo get_the_date('Y.m.d'); ?></time>
                    <h3 class="c-news__title"><?php the_title(); ?></h3>
                </a>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <a href="#" class="c-news__item js-fadein">
                    <time class="c-news__date">2025.10.10</time>
                    <h3 class="c-news__title">新メニューを追加しました</h3>
                </a>
                <a href="#" class="c-news__item js-fadein">
                    <time class="c-news__date">2025.10.05</time>
                    <h3 class="c-news__title">営業時間変更のお知らせ</h3>
                </a>
                <a href="#" class="c-news__item js-fadein">
                    <time class="c-news__date">2025.10.01</time>
                    <h3 class="c-news__title">10月の定休日について</h3>
                </a>
            <?php endif; ?>
        </div>
        <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>" class="c-button js-fadein">
            <span class="c-button__text">バックナンバー</span>
            <span class="c-button__arrow">→</span>
        </a>
    </div>
</section>

<section class="l-concept" id="concept">
    <div class="l-concept__inner">
        <h2 class="c-section-title js-fadein">こだわり</h2>
        <div class="c-concept">
            <div class="c-concept__row js-fadein">
                <div class="c-concept__text">
                    <h3 class="c-concept__heading">おもてなしの<span class="c-concept__heading-highlight">心</span></h3>
                    <p class="c-concept__description">昭和53年の創業以来、ここ東北町にお店を構え、地域の皆様だけでなく、遠方から足を運んでくださる方々にも、心から満足いただけるよう、お腹いっぱい食べて笑顔でお帰りいただきたいという思いで、地場の食材をはじめ、季節ごとの旬の味覚を使った料理を提供しております。</p>
                </div>
                <div class="c-concept__image c-concept__image--right">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_concept01.jpg" alt="おもてなしの心">
                </div>
            </div>
            <div class="c-concept__row c-concept__row--reverse js-fadein">
                <div class="c-concept__text">
                    <h3 class="c-concept__heading"><span class="c-concept__heading-highlight">寛</span><span class="c-concept__heading-text">ぎと安らぎが<br>調和する空間</span></h3>
                    <p class="c-concept__description">和風モダンな佇まいをコンセプトに、古民家のような木の梁が特徴的で天井が高く解放感のあるお店の造りとなっております。また幅広いお客様にご来店いただけるよう、大人数でもゆったり過ごせる広々としたお座敷や少人数でも、周りを気にせずお食事ができる個室席、カウンター席など様々なシーンでご利用いただけます。</p>
                </div>
                <div class="c-concept__image c-concept__image--left">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_concept02.jpg" alt="寛ぎと安らぎが調和する空間">
                </div>
            </div>
        </div>
    </div>
    <div class="c-concept__grid js-fadein">
        <div class="c-concept__card">
            <div class="c-concept__card-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_concept03.jpg" alt="座敷席">
            </div>
            <h4 class="c-concept__card-title">座敷席</h4>
            <p class="c-concept__card-text">大小様々な宴会にも対応可能な、和室のお座敷をご用意しております。</p>
        </div>
        <div class="c-concept__card">
            <div class="c-concept__card-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_concept04.jpg" alt="個室">
            </div>
            <h4 class="c-concept__card-title">個室</h4>
            <p class="c-concept__card-text">プライベートな空間で、ゆったりとお食事をお楽しみいただけます。</p>
        </div>
        <div class="c-concept__card">
            <div class="c-concept__card-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_concept05.jpg" alt="カウンター席">
            </div>
            <h4 class="c-concept__card-title">カウンター席</h4>
            <p class="c-concept__card-text">お一人様でもお気軽にご利用いただけるカウンター席をご用意しております。</p>
        </div>
    </div>
</section>

<!-- 以下、他のセクションも同様にWordPress化 -->
<!-- メニューセクション、店舗情報セクション、お問い合わせセクション等は
     現在のindex.htmlから同様の構造で作成可能です -->

<?php get_footer(); ?>
