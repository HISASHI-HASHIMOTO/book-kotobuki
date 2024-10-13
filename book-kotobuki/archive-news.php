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
<div class="p-page-news l-sub-page fish-icon">
  <div class="p-page-news__inner l-inner">
    <div class="p-page-news__button-list contents-button-list">
      <a href="" class="contents-button-list__button is-active">all</a>
      <a href="" class="contents-button-list__button">ライセンス講習</a>
      <a href="" class="contents-button-list__button">ファンダイビング</a>
      <a href="" class="contents-button-list__button">体験ダイビング</a>
    </div>
    <div class="p-page-news__contents">
      <div class="p-page-news__content">
        <ul class="p-page-news__items c-cards">
          <li class="p-page-news__item">
            <a href="" class="c-news-card">
              <figure class="c-news-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="そして誰もいなくなった">
              </figure>
              <div class="c-news-card__box">
                <div class="c-news-card__meta-box">
                  <div class="c-news-card__meta">ミステリー</div>
                  <time class="c-news-card__meta-time" datetime="2024-10-06">2024.10.6</time>
                </div>
                <p class="c-news-card__title">そして誰もいなくなった/アガサクリスティ</p>
                <div class="c-news-card__drink">
                  <div class="c-news-card__drink-title">この本に合う一杯</div>
                  <div class="c-news-card__drink-text">ブラックコーヒー</div>
                </div>
              </div>
            </a>
          </li>
          <li class="p-page-news__item campaign-page__item--small">
            <a href="" class="c-news-card">
              <figure class="c-news-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="そして誰もいなくなった">
              </figure>
              <div class="c-news-card__box">
                <div class="c-news-card__meta-box">
                  <div class="c-news-card__meta">ミステリー</div>
                  <time class="c-news-card__meta-time" datetime="2024-10-06">2024.10.6</time>
                </div>
                <p class="c-news-card__title">そして誰もいなくなった/アガサクリスティ</p>
                <div class="c-news-card__drink">
                  <div class="c-news-card__drink-title">この本に合う一杯</div>
                  <div class="c-news-card__drink-text">ブラックコーヒー</div>
                </div>
              </div>
            </a>
          </li>
          <li class="p-page-news__item campaign-page__item--small">
            <a href="" class="c-news-card">
              <figure class="c-news-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="そして誰もいなくなった">
              </figure>
              <div class="c-news-card__box">
                <div class="c-news-card__meta-box">
                  <div class="c-news-card__meta">ミステリー</div>
                  <time class="c-news-card__meta-time" datetime="2024-10-06">2024.10.6</time>
                </div>
                <p class="c-news-card__title">そして誰もいなくなった/アガサクリスティ</p>
                <div class="c-news-card__drink">
                  <div class="c-news-card__drink-title">この本に合う一杯</div>
                  <div class="c-news-card__drink-text">ブラックコーヒー</div>
                </div>
              </div>
            </a>
          </li>
          <li class="p-page-news__item campaign-page__item--small">
            <a href="" class="c-news-card">
              <figure class="c-news-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="そして誰もいなくなった">
              </figure>
              <div class="c-news-card__box">
                <div class="c-news-card__meta-box">
                  <div class="c-news-card__meta">ミステリー</div>
                  <time class="c-news-card__meta-time" datetime="2024-10-06">2024.10.6</time>
                </div>
                <p class="c-news-card__title">そして誰もいなくなった/アガサクリスティ</p>
                <div class="c-news-card__drink">
                  <div class="c-news-card__drink-title">この本に合う一杯</div>
                  <div class="c-news-card__drink-text">ブラックコーヒー</div>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- ページネーション -->
    <div class="campaign-page__pagenation pagenation">
      <div class="pagenation__inner">
        <div class="pagenation__contents">
          <a class="pagenation__link-pre">&nbsp;&nbsp;</a>
          <a class="pagenation__link-page is-active">1</a>
          <a class="pagenation__link-page">2</a>
          <a class="pagenation__link-page">3</a>
          <a class="pagenation__link-page">4</a>
          <a class="pagenation__link-page">5</a>
          <a class="pagenation__link-page">6</a>
          <a class="pagenation__link-post">&nbsp;&nbsp;</a>
        </div>
      </div>
    </div>

  </div>
</div>



<?php get_footer(); ?>