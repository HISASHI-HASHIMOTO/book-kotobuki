<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="robots" content="noindex" />
  <!-- googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">
  <!-- スワイパー -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
        <div class="p-drawer-menu__inner">
          <div class="p-drawer-menu__content">
            <ul class="p-drawer-menu__nav-items">
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url(home_url("/news/")) ?>" class="p-drawer-menu__item-link">おすすめの本</a>
              </li>
            </ul>
            <ul class="p-drawer-menu__nav-items">
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url(home_url("/about/")) ?>" class="p-drawer-menu__item-link">当店について</a>
              </li>
            </ul>
            <ul class="p-drawer-menu__nav-items">
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url(home_url("/information/")) ?>" class="p-drawer-menu__item-link">メニュー</a>
              </li>
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url(home_url("/information?id=tab1/")) ?>" id="tab1"
                  class="p-drawer-menu__item-link">カフェメニュー</a>
              </li>
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url(home_url("/information?id=tab3/")) ?>" id="tab2"
                  class="p-drawer-menu__item-link">ブックメニュー</a>
              </li>
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url(home_url("/information?id=tab2/")) ?>" id="tab3"
                  class="p-drawer-menu__item-link">ブッククラブ</a>
              </li>
            </ul>
            <ul class="p-drawer-menu__nav-items">
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url(home_url("/blog/")) ?>" class="p-drawer-menu__item-link">ブログ</a>
              </li>
            </ul>
            <ul class="p-drawer-menu__nav-items">
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url(home_url("/about/")) ?>" class="p-drawer-menu__item-link">よくある質問</a>
              </li>
            </ul>
            <ul class="p-drawer-menu__nav-items">
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url(home_url("/blog/")) ?>" class="p-drawer-menu__item-link">お問い合わせ</a>
              </li>
            </ul>
          </div>
      </nav>

      <!-- pc-nav -->
      <nav class="p-header__pc-nav p-pc-nav u-desktop">
        <ul class="p-pc-nav__items">
          <li class="p-pc-nav__item">
            <a href="<?php echo esc_url(home_url("/news/")) ?>" class="p-pc-nav__item-link">おすすめの本</a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php echo esc_url(home_url("/about/")) ?>" class="p-pc-nav__item-link">当店について</a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php echo esc_url(home_url("/menu/")) ?>" class="p-pc-nav__item-link">メニュー</a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php echo esc_url(home_url("/blog/")) ?>" class="p-pc-nav__item-link"> ブログ</a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php echo esc_url(home_url("/faq/")) ?>" class="p-pc-nav__item-link">よくある質問</a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php echo esc_url(home_url("/contact/")) ?>" class="p-pc-nav__item-link">お問い合わせ </a>
          </li>
        </ul>
      </nav>

    </div>
  </header>