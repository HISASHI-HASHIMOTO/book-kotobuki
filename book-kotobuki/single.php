<?php get_header(); ?>

<div class="p-page-blog__mv c-sub-mv">
  <div class="c-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img01@2x.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img01@2x.jpg" alt="ブログ記事ページ" />
    </picture>
  </div>
  <h2 class="c-sub-mv__title">ブログ記事</h2>
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
<div class="p-container l-sub-page fish-icon">
  <div class="p-container__inner l-inner">
    <div class="p-container__wrapper">
      <div class="p-container__blog-article blog-article">
        <?php
            if (have_posts()) :
              while (have_posts()) : the_post(); ?>
        <article class="blog-article__body">
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </article>
        <? endwhile; endif;?>
        <!-- ページネーション -->
        <div class="p-container__pagenation c-pagenation">
          <?php
              $prev = get_previous_post();
              $prev_url = $prev ? esc_url(get_permalink($prev->ID)) : '';
              $next = get_next_post();
              $next_url = $next ? esc_url(get_permalink($next->ID)) : '';
              ?>
          <div class="c-pagenation__inner">
            <div class="c-pagenation__contents">
              <?php if ($prev) : ?>
              <a class="c-pagenation__link-pre" href="<?php echo $prev_url; ?>">
                <?php endif; ?></a>
              <?php if ($next) : ?>
              <a class="c-pagenation__link-post" href="<?php echo $next_url; ?>">
                <?php endif; ?></a>
            </div>
          </div>
        </div>
      </div>
      <aside class="p-container__aside p-aside">
        <?php get_sidebar(); ?>
      </aside>

    </div>
  </div>
</div>


<?php get_footer(); ?>