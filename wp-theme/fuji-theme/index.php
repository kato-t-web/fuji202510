<?php
/**
 * デフォルトテンプレート
 */

get_header();
?>

<div class="l-content">
    <div class="l-content__inner">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php
            endwhile;
        else :
        ?>
            <p>コンテンツが見つかりませんでした。</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
