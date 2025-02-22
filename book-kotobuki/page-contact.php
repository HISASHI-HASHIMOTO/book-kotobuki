<?php get_header(); ?>

<!-- メインビュー -->
<div class="p-page-news__mv c-sub-mv">
  <div class="c-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img05.webp" media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img05.webp" alt="お問い合わせページ" width="960"
        height="640" />
    </picture>
  </div>
  <h2 class="c-sub-mv__title">お問い合わせ</h2>
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

<section class="p-contact-page l-sub-page fish-icon">
  <div class="p-contact-page__inner l-inner">
    <div class="p-contact-page__form form">
      <?php echo do_shortcode('[contact-form-7 id="e0eae28" title="お問い合わせ"]'); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>