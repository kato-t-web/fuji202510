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
    <div class="c-mv-logo">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo_mv.png" alt="<?php bloginfo('name'); ?>">
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

<section class="l-menu" id="menu">
    <div class="l-menu__inner">
        <h2 class="c-section-title js-fadein">お品書き</h2>
        <div class="c-menu-grid c-menu-grid--home">
            <a href="<?php echo esc_url(home_url('/menu/')); ?>#recommended" class="c-menu-item js-fadein">
                <div class="c-menu-item__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_menu01.jpg" alt="おすすめ料理">
                </div>
                <h3 class="c-menu-item__title">おすすめ料理</h3>
            </a>
            <a href="<?php echo esc_url(home_url('/menu/')); ?>#teishoku" class="c-menu-item js-fadein">
                <div class="c-menu-item__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_menu02.jpg" alt="定食">
                </div>
                <h3 class="c-menu-item__title">定食</h3>
            </a>
            <a href="<?php echo esc_url(home_url('/menu/')); ?>#noodles" class="c-menu-item js-fadein">
                <div class="c-menu-item__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_menu03.jpg" alt="麺類">
                </div>
                <h3 class="c-menu-item__title">麺類</h3>
            </a>
            <a href="<?php echo esc_url(home_url('/menu/')); ?>#rice" class="c-menu-item js-fadein">
                <div class="c-menu-item__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_menu04.jpg" alt="ご飯もの">
                </div>
                <h3 class="c-menu-item__title">ご飯もの</h3>
            </a>
            <a href="<?php echo esc_url(home_url('/menu/')); ?>#ippin" class="c-menu-item js-fadein">
                <div class="c-menu-item__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_menu05.jpg" alt="一品料理">
                </div>
                <h3 class="c-menu-item__title">一品料理</h3>
            </a>
            <a href="<?php echo esc_url(home_url('/menu/')); ?>#night" class="c-menu-item js-fadein">
                <div class="c-menu-item__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_menu06.jpg" alt="夜メニュー">
                </div>
                <h3 class="c-menu-item__title">夜メニュー</h3>
            </a>
            <a href="<?php echo esc_url(home_url('/menu/')); ?>#drinks" class="c-menu-item js-fadein">
                <div class="c-menu-item__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_menu07.jpg" alt="ドリンク">
                </div>
                <h3 class="c-menu-item__title">ドリンク</h3>
            </a>
            <a href="<?php echo esc_url(home_url('/menu/')); ?>#dessert" class="c-menu-item js-fadein">
                <div class="c-menu-item__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_menu08.jpg" alt="デザート">
                </div>
                <h3 class="c-menu-item__title">デザート</h3>
            </a>
        </div>
        <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="c-button js-fadein">
            <span class="c-button__text">メニュー一覧へ</span>
            <span class="c-button__arrow">→</span>
        </a>
    </div>
</section>

<section class="l-store" id="store">
    <div class="l-store__overlay"></div>
    <div class="l-store__inner">
        <h2 class="c-section-title c-section-title--white js-fadein">店舗情報</h2>
        <div class="c-store-content">
            <div class="c-store-info js-fadein">
                <h3 class="c-store-info__title">居食処　富士</h3>
                <div class="c-store-info__text">
                    <p>〒039-2654<br>
                    青森県上北郡東北町字塔ノ沢68−1<br>
                    TEL / FAX 0175-63-2908<br>
                    営業時間　昼の部　11:00 〜 14:00<br>
                    　　　　　夜の部　18:00 〜 20:30（LO 20:00）<br>
                    座席　カウンター4席　個室・テーブル24席　お座敷28席<br>
                    定休日　毎週水曜日<br>
                    駐車場　○台</p>
                </div>
                <a href="<?php echo esc_url(home_url('/flow/')); ?>" class="c-button">
                    <span class="c-button__text">ご利用の流れ</span>
                    <span class="c-button__arrow">→</span>
                </a>
            </div>
            <div class="c-store-map js-fadein">
                <div class="c-store-map__embed">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.8905687245656!2d141.2238775!3d40.7810152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f9b636d4824795d%3A0x2c616714e9f4216c!2z5a-M5aOr!5e1!3m2!1sja!2sjp!4v1760506377922!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="c-store-map__images">
                    <div class="c-store-map__image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_store01.jpg" alt="店舗写真1">
                    </div>
                    <div class="c-store-map__image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img_store02.jpg" alt="店舗写真2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="l-contact" id="contact">
    <div class="l-contact__inner">
        <h2 class="c-section-title js-fadein">ご予約・お問い合わせフォーム</h2>
        <p class="c-contact__notice js-fadein">基本的に当日または前日の予約に関しては予約フォームではなく<br>直接電話でのご予約をお願いいたします　TEL 0175-06-2908</p>
        <div class="c-contact-form js-fadein">
            <?php echo do_shortcode('[contact-form-7 id="1" title="お問い合わせフォーム"]'); ?>
        </div>
    </div>
    <div class="c-form-notice">
        <p><strong>注意事項：</strong><br>
        基本的に予約フォームに関しては2日前からのご利用をお願いしておりますので、当日や前日の予約に関しては、予約フォームではなく直接電話でご連絡ください。当店では、お客様の個人情報（氏名・電話番号・メールアドレス等）を、ご予約の確認やご連絡の目的に限り使用いたします。法令に基づく場合を除き、第三者に開示・提供することはございません。情報は厳重に管理し、漏洩・改ざん・不正アクセス等の防止に努めます。</p>
    </div>
</section>

<section class="l-recruit" id="recruit">
    <div class="l-recruit__overlay"></div>
    <div class="l-recruit__inner">
        <h2 class="c-section-title c-section-title--white js-fadein">求人情報</h2>
        <div class="c-recruit-table js-fadein">
            <table>
                <tr>
                    <th>仕事内容</th>
                    <td>料理の配膳、簡易盛り付け作業、店内清掃など</td>
                </tr>
                <tr>
                    <th>時給</th>
                    <td>1,050円</td>
                </tr>
                <tr>
                    <th>年齢・性別</th>
                    <td>問いません</td>
                </tr>
                <tr>
                    <th>経験</th>
                    <td>未経験者歓迎。飲食店経験者は優遇します</td>
                </tr>
                <tr>
                    <th>勤務時間</th>
                    <td>勤務時間、曜日は応相談</td>
                </tr>
                <tr>
                    <th>応募連絡先</th>
                    <td>TEL 0175-63-2908に直接お問い合わせください。</td>
                </tr>
            </table>
        </div>
    </div>
</section>

<div class="l-spacer"></div>

<?php get_footer(); ?>
