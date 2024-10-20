<?php get_header(); ?>

<div class="p-404">
  <div class="p-404__inner l-inner">



    <!-- <div class="l-inner"> -->
    <div class="p-404__breadcrumb breadcrumb l-breadcrumb">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
      </div>
    </div>
    <!-- </div> -->

    <div class="p-404_box">
      <h2 class="p-404__title">404</h2>
      <div class="p-404__text">申し訳ありません。<br>
        お探しのページが見つかりません。</div>
      <div class="p-404__btn">
        <a href="#" class="c-button c-button--white">
          <span class="c-button-text">TOPページへ戻る</span>
        </a>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>