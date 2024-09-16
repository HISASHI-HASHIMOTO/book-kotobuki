<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="robots" content="noindex" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="p-header l-header">
    <div class="p-header__inner i-inner">
      <h1 class="p-header__title">
        <a href="<?php echo esc_url(home_url("/")) ?>" class="p-header__title-link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/site-logo-white.png" alt="book-kotobukiロゴ" />
        </a>
      </h1>

      <!-- ハンバーガーメニュー -->
      <button class="p-header__hamburger p-hamburger u-mobile js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- ドロワーメニュー -->
      <nav class="p-header__drawer-menu p-drawer-menu js-drawer-menu">
        <div class="drawer-menu__inner">
          <div class="drawer-menu__wrapper">
            <div class="drawer-menu__contents">
              <div class="drawer-menu__content">
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo esc_url(home_url("/campaign/")) ?>" class="nav-list__heading-link">お知らせ</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo esc_url(home_url("/about/")) ?>" class="nav-list__heading-link">私たちについて</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo esc_url(home_url("/information/")) ?>"
                      class="nav-list__heading-link">ダイビング情報</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="<?php echo esc_url(home_url("/information?id=tab1/")) ?>" id="tab1"
                      class="nav-list__item-link">ライセンス情報</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="<?php echo esc_url(home_url("/information?id=tab3/")) ?>" id="tab2"
                      class="nav-list__item-link">体験ダイビング</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="<?php echo esc_url(home_url("/information?id=tab2/")) ?>" id="tab3"
                      class="nav-list__item-link">ファンダイビング</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo esc_url(home_url("/blog/")) ?>" class="nav-list__heading-link">ブログ</a>
                  </li>
                </ul>
              </div>
              <div class="drawer-menu__content">
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo esc_url(home_url("/voice/")) ?>" class="nav-list__heading-link">お客様の声</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo esc_url(home_url("/faq/")) ?>" class="nav-list__heading-link">よくある質問</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo esc_url(home_url("/contact/")) ?>" class="nav-list__heading-link">お問い合わせ</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo esc_url(home_url("/sitemap/")) ?>" class="nav-list__heading-link">サイトマップ</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <!-- pc-nav -->
      <nav class="p-header__pc-nav p-pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/campaign/")) ?>" class="pc-nav__item-link">
              <span class="pc-nav__ja-item">お知らせ</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/about/")) ?>" class="pc-nav__item-link">
              <span class="pc-nav__ja-item">当店の思い</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/information/")) ?>" class="pc-nav__item-link">
              <span class="pc-nav__ja-item">メニュー</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/blog/")) ?>" class="pc-nav__item-link">
              <span class="pc-nav__ja-item">ブログ</span>
            </a>
          </li>
          <il class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/voice/")) ?>" class="pc-nav__item-link">
              <span class="pc-nav__ja-item">アクセス</span>
            </a>
          </il>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/faq/")) ?>" class="pc-nav__item-link">
              <span class="pc-nav__ja-item">よくある質問</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/contact/")) ?>" class="pc-nav__item-link">
              <span class="pc-nav__ja-item">お問い合わせ</span>
            </a>
          </li>
        </ul>
      </nav>

    </div>
  </header>