<?php get_header(); ?>

<!-- メインビュー -->
<div class="p-page-news__mv c-sub-mv">
  <div class="c-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img05@2x.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img05@2x.jpg" alt="お問い合わせページ" width="960"
        height="640" />
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



<div class="p-page-thanks l-sub-page">
  <div class="p-page-thanks__inner l-inner">
    <p class="p-page-thanks__text">お問い合わせ内容を送信完了しました。</p>
    <p class="p-page-thanks__text">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
      お送り頂きました内容を確認の上、 <br class="u-mobile">
      3営業日以内に折り返しご連絡させて頂きます。<br>
      また、ご記入頂いたメールアドレスへ、 <br class="u-mobile">
      自動返信の確認メールをお送りしております。</p>

    <div class="p-page-thanks__button-box">
      <a href="#" class="c-button">
        <span class="c-button-text">TOPページへ戻る</span>
      </a>
    </div>

  </div>
</div>



<?php get_footer(); ?>