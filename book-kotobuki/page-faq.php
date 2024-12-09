<?php get_header(); ?>

<!-- メインビュー -->
<div class="p-page-news__mv c-sub-mv">
  <div class="c-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img06.webp" media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img06.webp" alt="よくある質問ページ" width="960"
        height="640" />
    </picture>
  </div>
  <h2 class="c-sub-mv__title">よくある質問</h2>
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

<section class="p-faq-page l-sub-page">
  <div class="p-faq-page__inner  l-inner">
    <div class="p-faq-page__accordion p-accordion js-accordion">
      <div class="p-accordion__container">
        <?php
        $faq_group = SCF::get_option_meta('faq-option', 'faq_group');
        if ($faq_group) :
          foreach ($faq_group as $item) :
        ?>
        <div class="p-accordion__item">
          <h2 class="p-accordion__title js-accordion-title">
            <?php echo esc_html($item['faq_question']); ?>
          </h2>
          <div class="p-accordion__content">
            <p class="p-accordion__text">
              <?php echo esc_html($item['faq_answer']); ?>
            </p>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>