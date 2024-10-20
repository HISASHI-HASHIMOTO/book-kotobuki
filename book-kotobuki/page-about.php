<?php get_header(); ?>

<!-- メインビュー -->
<div class="p-page-news__mv c-sub-mv">
  <div class="c-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="夫婦のように向かい合う2匹のチョウチョウウオ" />
    </picture>
  </div>
  <h2 class="c-sub-mv__title">about</h2>
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
    <div class="p-about__title">
      <span class="c-section-title__en">about</span>
      <h2 class="c-section-title__ja">当店について</h2>
    </div>
    <div class="p-about__content">
      <figure class="p-about__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-img01@2x.png" alt="院内の待合室の画像">
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
    <div class="p-about__button">
      <a href="#" class="c-button">
        <span class="c-button-text">view&nbsp;more</span>
      </a>
    </div>
  </div>
</section>


<?php get_footer(); ?>