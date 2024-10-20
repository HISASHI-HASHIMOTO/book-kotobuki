<?php get_header(); ?>

<!-- メインビュー -->
<div class="p-page-news__mv c-sub-mv">
  <div class="c-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="夫婦のように向かい合う2匹のチョウチョウウオ" />
    </picture>
  </div>
  <h2 class="c-sub-mv__title">menu</h2>
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

<!-- p-page-menu -->
<div class="p-page-menu l-sub-page fish-icon">
  <div class="p-page-menu__inner l-inner">
    <!-- タブ -->
    <div class="p-page-menu__tab p-menu-tab">
      <!-- タブボタン -->
      <div class="p-menu-tab__button-list">
        <button id="tab1" class="p-menu-tab__button js-tab-button is-active">
          <p class="p-menu-tab__text">
            カフェ<br class="u-mobile" />メニュー
          </p>
        </button>
        <button id="tab2" class="p-menu-tab__button js-tab-button">
          <p class="p-menu-tab__text">
            ブック<br class="u-mobile" />メニュー
          </p>
        </button>
        <button id="tab3" class="p-menu-tab__button js-tab-button">
          <p class="p-menu-tab__text">
            ブック<br class="u-mobile" />クラブ
          </p>
        </button>
      </div>
      <!-- タブコンテンツ -->
      <ul class="p-menu-tab__items">
        <li class="p-menu-tab__item js-tab-content is-active">
          <div class="p-page-menu__card c-menu-card">
            <div class="c-menu-card__body">
              <h2 class="c-menu-card__title">カフェメニュー</h2>
              <p class="c-menu-card__text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="c-menu-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海辺に浮かぶ複数のダイバー" />
            </div>
          </div>
          <div class="p-page-menu__card c-menu-card c-menu-card--reverse">
            <div class="c-menu-card__body">
              <h2 class="c-menu-card__title">カフェメニュー</h2>
              <p class="c-menu-card__text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="c-menu-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海辺に浮かぶ複数のダイバー" />
            </div>
          </div>
        </li>
        <li class="p-menu-tab__item js-tab-content">
          <div class="p-page-menu__card c-menu-card">
            <div class="c-menu-card__body">
              <h2 class="c-menu-card__title">ブックメニュー</h2>
              <p class="c-menu-card__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="c-menu-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海中を小魚の大群が泳いでいる" />
            </div>
          </div>
          <div class="p-page-menu__card c-menu-card c-menu-card--reverse">
            <div class="c-menu-card__body">
              <h2 class="c-menu-card__title">ブックメニュー</h2>
              <p class="c-menu-card__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="c-menu-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海中を小魚の大群が泳いでいる" />
            </div>
          </div>
          <div class="p-page-menu__card c-menu-card">
            <div class="c-menu-card__body">
              <h2 class="c-menu-card__title">ブックメニュー</h2>
              <p class="c-menu-card__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="c-menu-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海中を小魚の大群が泳いでいる" />
            </div>
          </div>
        </li>
        <li class="p-menu-tab__item js-tab-content">
          <div class="p-page-menu__card c-menu-card">
            <div class="c-menu-card__body">
              <h2 class="c-menu-card__title">ブッククラブ</h2>
              <p class="c-menu-card__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="c-menu-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海中を二匹のチョウチョウウオが並んで泳いでいる" />
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>


<?php get_footer(); ?>