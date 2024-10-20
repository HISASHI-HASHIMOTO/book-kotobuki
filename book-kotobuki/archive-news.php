<?php get_header(); ?>

<!-- メインビュー -->
<div class="p-page-news__mv c-sub-mv">
  <div class="c-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="夫婦のように向かい合う2匹のチョウチョウウオ" />
    </picture>
  </div>
  <h2 class="c-sub-mv__title">news</h2>
</div>

<!-- <div class="l-inner"> -->
<div class="breadcrumb l-breadcrumb">
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
  </div>
</div>
<!-- </div> -->

<!-- campaign-page -->
<div class="p-page-news l-sub-page">
  <div class="p-page-news__inner l-inner">
    <div class="p-page-news__button-list contents-button-list">
      <a href="<?php echo esc_url(home_url('/news/')); ?>" class="contents-button-list__button is-active">all</a>
      <?php
    $terms = get_terms('news_category');
    foreach ($terms as $term) :
    ?>
      <a href="<?php echo esc_url(get_term_link($term->term_id)); ?>"
        class="contents-button-list__button"><?php echo $term->name; ?></a>
      <?php endforeach; ?>
    </div>
    <div class="p-page-news__contents">
      <div class="p-page-news__content">
        <ul class="p-page-news__items c-cards">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <li class="p-page-news__item">
            <a href="" class="c-news-card">
              <figure class="c-news-card__img">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
                <img src=" <?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-image画像" />
                <?php endif; ?>
              </figure>
              <div class="c-news-card__box">
                <div class="c-news-card__meta-box">
                  <div class="c-news-card__meta">
                    <?php
                    $taxonomy_terms = get_the_terms(get_the_ID(), 'news_category');
                    if (!empty($taxonomy_terms)) {
                      foreach ($taxonomy_terms as $taxonomy_term) {
                        echo '<span>' . esc_html($taxonomy_term->name) . '</span>';
                      }
                    }
                    ?></div>
                  <time class="c-news-card__meta-time"
                    datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m/d'); ?></time>
                </div>

                <p class="c-news-card__title">
                  <?php the_title(); ?> /
                  <!-- 著者情報の取得と出力 -->
                  <?php 
                    // 著者フィールドを取得
                    $news_card_author = get_field('news-card__author'); 
                    // 値が存在する場合に表示
                    if (!empty($news_card_author)) : 
                      echo esc_html($news_card_author); 
                    endif; 
                  ?>
                </p>

                <p class="c-news-card__text">
                  <?php the_content(); ?>
                </p>

                <!-- 本に合う一杯の表示 -->
                <div class="c-news-card__drink">
                  <div class="c-news-card__drink-title">この本に合う一杯</div>
                  <!-- ドリンク情報の取得と出力 -->
                  <?php 
                    // ドリンクフィールドを取得
                    $news_drink = get_field('news-card__drink'); 
                    // 値が存在する場合に表示
                    if (!empty($news_drink)) : 
                  ?>
                  <div class="c-news-card__drink-text">
                    <?php echo esc_html($news_drink); ?>
                  </div>
                  <?php endif; ?>
                </div>


                <!-- <p class="c-news-card__title">
                  <?php the_title(); ?>/<?php $news_card = get_field('news-card__author'); ?>
                  <?php if (!empty($news_card['news-card__author'])) : ?>
                  <?php echo $news_card['news-card__author']; ?>
                </p>
                <?php endif; ?>
                <?php  $news_text = get_field('news-card__text'); ?>
                <?php if (!empty($news_text['news-card'])) : ?>
                <p class="c-news-card__text">
                  <?php echo esc_html($news_card);?>
                </p>
                <?php endif; ?>
                <div class="c-news-card__drink">
                  <div class="c-news-card__drink-title">この本に合う一杯</div>
                  <?php $news_drink = the_field('news-card__drink'); ?>
                  <?php if (!empty($news_drink['news-card__drink'])) : ?>
                  <div class="c-news-card__drink-text"><?php echo $news_drink['news-card__drink']; ?></div>
                  <?php endif; ?>
                </div> -->

              </div>
            </a>
          </li>
          <? endwhile; endif;?>
        </ul>
      </div>
    </div>

    <!-- ページネーション -->
    <div class="campaign-page__pagenation c-pagenation">
      <div class="c-pagenation__inner">
        <div class="c-pagenation__contents">
          <?php wp_pagenavi(); 
          function custom_posts_per_page($query) {
            if (!is_admin() && $query->is_main_query()) {
                if (wp_is_mobile()) {
                    // SP表示件数
                    $query->set('.c-wp-pagenavi .page', 4); 
                } else {
                    // PC表示件数
                    $query->set('.c-wp-pagenavi .page', 6); 
                }
            }
        }
        add_action('pre_get_posts', 'custom_posts_per_page');
        
          ?>
        </div>
      </div>
    </div>

  </div>
</div>



<?php get_footer(); ?>