<?php get_header(); ?>

<!-- メインビュー -->
<div class="p-page-news__mv c-sub-mv">
  <div class="c-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img08.webp" media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img08.webp" alt="当店説明ページ" width="720"
        height="960" />
    </picture>
  </div>
  <h2 class="c-sub-mv__title">当店について</h2>
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

<section class="p-about l-sub-page">
  <div class="p-about__inner l-inner">
    <div class="p-about__title-box">
      <h2 class="p-about__title">book&nbsp;<br class="u-mobile">kotobuki</h2>
      <div class="p-about__title-area">
        <p class="p-about__title-text">
          「本のページをめくる瞬間、<br>
          あなたは物語の世界へと旅立つ。」 </p>
        <p class="p-about__title-text"> 静かで落ち着いた
          空間の中で心を解き放ち、<br>
          本の世界に没頭できる場所。</p>
        <p class="p-about__title-text"> 美味しいコーヒーとともに、<br>
          ゆったりとした時間が流れるこの場所は、<br>
          ただのカフェではなく、<br>
          日常から一歩離れた特別な体験を提供します。</p>
        <p class="p-about__title-text"> 訪れるたびに新しい発見があり、<br>
          いつでもあなただけの「物語」と「一杯」に<br>
          出会える場所であり続けたいと考えています。</p>
        <p class="p-about__title-text"> あなたの日常に、少しの「非日常」を。<br>
          ブックカフェで、物語の旅を楽しんでください。</p>
      </div>
    </div>

    <div class="p-about__content">
      <figure class="p-about__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-img01.png" alt="机の上に勉強の作業をしている画像">
      </figure>
      <div class="p-about__box">
        <p class="p-about__sub-title">物語の中に没入しながら、一杯のコーヒーを<br>ゆったりと味わう至福のひとときを提供します</p>
        <div class="p-about__text-box">
          <p class="p-about__text">
            物語に没入しながら、香り豊かなコーヒーを片手に、時間を忘れて過ごすことができるブックカフェ。
          </p>
          <p class="p-about__text">
            店内には様々なジャンルの本が並び、落ち着いた雰囲気の中で、ゆっくりと読書の時間を楽しむことができます。
          </p>
          <p class="p-about__text">
            こだわりのコーヒーは、一杯一杯丁寧に淹れられ、その深い味わいが心を和ませます。
          </p>
        </div>
      </div>
    </div>

    <div id="slide2" class="swiper mySwiper p-about__swiper">
      <div class="p-about__swiper-wrapper swiper-wrapper">
        <div class="p-about__swiper-slide swiper-slide">
          <picture class="p-about__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/about-img01.jpg" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-img01.jpg" alt="机にランプと本を広げている様子" />
          </picture>
        </div>
        <div class="p-about__swiper-slide swiper-slide">
          <picture class="p-about__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/about-img03.jpg" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-img03.jpg" alt="お店の看板が置いている" />
          </picture>
        </div>
        <div class="p-about__swiper-slide swiper-slide">
          <picture class="p-about__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/menu-img04.jpg" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/menu-img04.jpg" alt="香り豊かなコーヒー豆とコーヒーカップ" />
          </picture>
        </div>
        <div class="p-about__swiper-slide swiper-slide">
          <picture class="p-about__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/about-img05.jpg" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-img05.jpg" alt="ブックカフェの店内の椅子と机の様子" />
          </picture>
        </div>
        <div class="p-about__swiper-slide swiper-slide">
          <picture class="p-about__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/about-img06.jpg" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-img06.jpg" alt="コーヒーカップと香り豊かなコーヒー豆"
              width="315" height="213" />
          </picture>
        </div>
        <div class="p-about__swiper-slide swiper-slide">
          <picture class="p-about__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/about-img07.jpg" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-img07.jpg" alt="厳選されたコーヒー豆を集めてみました"
              width=" 315" height="213" />
          </picture>
        </div>
        <div class="p-about__swiper-slide swiper-slide">
          <picture class="p-about__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/about-img08.jpg" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-img08.jpg" alt="日差しを浴びているコーヒーカップ" />
          </picture>
        </div>
        <div class="p-about__swiper-slide swiper-slide">
          <picture class="p-about__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/about-img09.jpg" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-img09.jpg" alt="本手を添えて座っている高齢の女性" />
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>