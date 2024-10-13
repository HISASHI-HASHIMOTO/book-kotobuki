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

<div class="inner">
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>
  </div>
</div>

<!-- campaign-page -->
<div class="campaign-page layout-sub-page fish-icon">
  <div class="campaign-page__inner inner">
    <div class="campaign-page__button-list contents-button-list">
      <a href="" class="contents-button-list__button is-active">all</a>
      <a href="" class="contents-button-list__button">ライセンス講習</a>
      <a href="" class="contents-button-list__button">ファンダイビング</a>
      <a href="" class="contents-button-list__button">体験ダイビング</a>
    </div>
    <div class="campaign-page__contents">
      <div class="campaign-page__content">
        <ul class="campaign-page__items two-column-cards">
          <li class="campaign-page__item campaign-page__item--small">
            <a href="" class="campaign-page-card">
              <figure class="campaign-page-card__img">
                <img src="./assets/images/common/campaign1.jpg" alt="海水の中で煌びやかに光る魚群" />
              </figure>
              <div class="campaign-page-card__body">
                <div class="campaign-page-card__campaign-pagebox ">
                  <div class="campaign-page-card__meta">
                    ライセンス講習
                  </div>
                  <p class="campaign-page-card__title">ライセンス取得</p>
                </div>
                <div class="campaign-page-card__box">
                  <div class="campaign-page-card__menu">
                    全部コミコミ(お一人様)
                  </div>
                  <div class="campaign-page-card__price">
                    <div class="campaign-page-card__original-price">
                      ¥56,000
                    </div>
                    <div class="campaign-page-card__discounted-rate">
                      ¥46,000
                    </div>
                  </div>
                  <p class="campaign-page-card__text u-desktop">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                  <time class="campaign-page-card__time u-desktop" datetime="2023-06-01-09-30">2023/6/1-9/30</time>
                  <p class="campaign-page-card__contact-text u-desktop">
                    ご予約・お問い合わせはコチラ
                  </p>
                  <div class="campaign-page-card__btn u-desktop">
                    <div class="btn">
                      <span class="btn__text">contact&nbsp;us</span>
                      <div class="btn__arrow"></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="campaign-page__item campaign-page__item--small">
            <a href="" class="campaign-page-card">
              <figure class="campaign-page-card__img">
                <img src="./assets/images/common/campaign2.jpg" alt="エメラルドグリーンの海岸に停泊する船" />
              </figure>
              <div class="campaign-page-card__body">
                <div class="campaign-page-card__campaign-pagebox ">
                  <div class="campaign-page-card__meta">
                    体験ダイビング
                  </div>
                  <p class="campaign-page-card__title">貸切体験ダイビング</p>
                </div>
                <div class="campaign-page-card__box">
                  <div class="campaign-page-card__menu">
                    全部コミコミ(お一人様)
                  </div>
                  <div class="campaign-page-card__price">
                    <div class="campaign-page-card__original-price">
                      ¥56,000
                    </div>
                    <div class="campaign-page-card__discounted-rate">
                      ¥46,000
                    </div>
                  </div>
                  <p class="campaign-page-card__text u-desktop">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                  <time class="campaign-page-card__time u-desktop" datetime="2023-06-01-09-30">2023/6/1-9/30</time>
                  <p class="campaign-page-card__contact-text u-desktop">
                    ご予約・お問い合わせはコチラ
                  </p>
                  <div class="campaign-page-card__btn u-desktop">
                    <div class="btn">
                      <span class="btn__text">contact&nbsp;us</span>
                      <div class="btn__arrow"></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="campaign-page__item campaign-page__item--small">
            <a href="" class="campaign-page-card">
              <figure class="campaign-page-card__img">
                <img src="./assets/images/common/campaign3.jpg" alt="海水の中で煌びやかに光る魚群" />
              </figure>
              <div class="campaign-page-card__body">
                <div class="campaign-page-card__campaign-pagebox ">
                  <div class="campaign-page-card__meta">
                    体験ダイビング
                  </div>
                  <p class="campaign-page-card__title">ナイトダイビング</p>
                </div>
                <div class="campaign-page-card__box">
                  <div class="campaign-page-card__menu">
                    全部コミコミ(お一人様)
                  </div>
                  <div class="campaign-page-card__price">
                    <div class="campaign-page-card__original-price">
                      ¥56,000
                    </div>
                    <div class="campaign-page-card__discounted-rate">
                      ¥46,000
                    </div>
                  </div>
                  <p class="campaign-page-card__text u-desktop">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                  <time class="campaign-page-card__time u-desktop" datetime="2023-06-01-09-30">2023/6/1-9/30</time>
                  <p class="campaign-page-card__contact-text u-desktop">
                    ご予約・お問い合わせはコチラ
                  </p>
                  <div class="campaign-page-card__btn u-desktop">
                    <div class="btn">
                      <span class="btn__text">contact&nbsp;us</span>
                      <div class="btn__arrow"></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="campaign-page__item campaign-page__item--small">
            <a href="" class="campaign-page-card">
              <figure class="campaign-page-card__img">
                <img src="./assets/images/common/campaign1.jpg" alt="海水の中で煌びやかに光る魚群" />
              </figure>
              <div class="campaign-page-card__body">
                <div class="campaign-page-card__campaign-pagebox">
                  <div class="campaign-page-card__meta">
                    ファンダイビング
                  </div>
                  <p class="campaign-page-card__title">貸切ファンダイビング</p>
                </div>
                <div class="campaign-page-card__box">
                  <div class="campaign-page-card__menu">
                    全部コミコミ(お一人様)
                  </div>
                  <div class="campaign-page-card__price">
                    <div class="campaign-page-card__original-price">
                      ¥56,000
                    </div>
                    <div class="campaign-page-card__discounted-rate">
                      ¥46,000
                    </div>
                  </div>
                  <p class="campaign-page-card__text u-desktop">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                  <time class="campaign-page-card__time u-desktop" datetime="2023-06-01-09-30">2023/6/1-9/30</time>
                  <p class="campaign-page-card__contact-text u-desktop">
                    ご予約・お問い合わせはコチラ
                  </p>
                  <div class="campaign-page-card__btn u-desktop">
                    <div class="btn">
                      <span class="btn__text">contact&nbsp;us</span>
                      <div class="btn__arrow"></div>
                    </div>
                  </div>
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