<?php get_header(); ?>

<div class="p-page-blog__mv c-sub-mv">
  <div class="c-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img01@2x.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img01@2x.jpg" alt="ブログページ" />
    </picture>
  </div>
  <h2 class="c-sub-mv__title">ブログ</h2>
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

<!-- コンテナーセクション -->
<section class="p-container l-sub-page fish-icon">
  <div class="p-container__inner l-inner">
    <div class="p-container__wrapper">
      <div class="p-container__blog-page p-blog-page">
        <ul class="p-blog-page__cards c-blog-cards c-blog-cards--two-column">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <li class="c-blog-cards__item">
            <a href="<?php the_permalink(); ?>" class="p-blog__slide-card c-blog-card">
              <figure class="c-blog-card__img">
                <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
                <?php else: ?>
                <img src=" <?php echo get_theme_file_uri(); ?>/assets/images/book-icon02@2x.png"
                  alt="<?php the_title(); ?>のアイキャッチ画像" />
                <?php endif; ?>
              </figure>
              <div class="c-blog-card__body">
                <div class="c-blog-card__metabox">
                  <span class="c-blog-card__meta">
                    <?php 
                      $categories = get_the_category();
                      if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name ); // 最初のカテゴリー名を取得して表示
                      }
                    ?></span>
                  <time class="c-blog-card__time"
                    datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                </div>
                <div class="c-blog-card__box">
                  <p class="c-blog-card__title"><?php the_title(); ?></p>
                  <p class="c-blog-card__text">
                    <?php echo wp_trim_words(get_the_content(), 80,); ?>
                  </p>
                </div>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <!-- ページネーション -->
        <div class="p-container__pagenation c-pagenation">
          <div class="c-pagenation__inner">
            <div class="c-pagenation__contents">
              <?php wp_pagenavi(); 
          function custom_posts_per_page($query) {
            if (!is_admin() && $query->is_main_query()) {
                if (wp_is_mobile()) {
                    // SP表示件数
                    $query->set('.wp-pagenavi .page', 4); 
                } else {
                    // PC表示件数
                    $query->set('.wp-pagenavi .page', 6); 
                }
            }
        }
        add_action('pre_get_posts', 'custom_posts_per_page');
        
          ?>
            </div>
          </div>
        </div>
      </div>

      <aside class="p-container__aside p-aside">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</section>


<?php get_footer(); ?>