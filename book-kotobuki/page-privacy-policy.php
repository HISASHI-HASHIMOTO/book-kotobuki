<?php get_header(); ?>

<!-- メインビュー -->
<div class="p-page-news__mv c-sub-mv">
  <div class="c-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img04@2x.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img04@2x.jpg" alt="プライバシーポリシーページ" />
    </picture>
  </div>
  <h2 class="c-sub-mv__title">プライバシーポリシー</h2>
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

<!-- プライバシー -->
<section class="p-privacy-policy l-sub-page">
  <div class="p-privacy-policy__inner l-inner">
    <h2 class="p-privacy-policy__title"><?php the_title(); ?></h2>
    <div class="p-privacy-policy__contents">
      <?php the_content(); ?>
    </div>
</section>



<?php get_footer(); ?>