<?php get_header(); ?>

<main>

  <!-- メインビュー -->
  <div class="p-mv">
    <div class="p-mv__left">
      <h2 class="p-mv__left-title u-mobile">物語の</h2>
      <h2 class="p-mv__left-title u-desktop">物語の世界へ</h2>
    </div>
    <label class="p-mv__page1">
      <input type="checkbox" />
      <div class="p-mv__box">
        <h2 class="p-mv__right-title u-mobile">世界へ</h2>
      </div>
      <div class="p-mv__box p-mv__dummy">
        <h2 class="p-mv__left-title u-mobile">コーヒ</h2>
        <h2 class="p-mv__left-title u-desktop">コーヒー片手に</h2>
      </div>
    </label>
    <label class=" p-mv__page2">
      <input type="checkbox" />
      <div class="p-mv__box">
        <h2 class="p-mv__right-title u-mobile">ー片手に</h2>
      </div>
      <div class="p-mv__box p-mv__dummy">
        <h2 class="p-mv__left-title u-mobile">旅立</h2>
        <h2 class="p-mv__left-title u-desktop">旅立とう</h2>
      </div>
    </label>
    <div class="p-mv__right">
      <h2 class="p-mv__right-title u-mobile">とう</h2>
    </div>
  </div>

  <!-- news -->
  <section>
    <h2 class="heading-25" data-word="HEADING">CSS見出しデザイン</h2>
    <div class="p-mv__news p-mv-news">
      <div class="p-mv-news__title c-section-title2">
        <h2 class="c-section-title2__ja">お知らせ</h2>
        <p class="c-section-title2__en c-section-title2__en--large">news</p>
      </div>
      <ul class="p-mv-news__content">
        <li class="p-mv-news__items">
          <a href="" class="p-mv-news__items-link">
            <p class="p-mv-news__time"><time class="p-mv-news__date" datetime="2023-05-20">2023.05.20</time></p>
            <p class="p-mv-news__text">発熱外来受診時のお願い</p>
          </a>
        </li>
        <li class="p-mv-news__items">
          <a href="" class="p-mv-news__items-link">
            <p class="p-mv-news__time"><time class="p-mv-news__date" datetime="2023-05-13">2023.05.13</time></p>
            <p class="p-mv-news__text">5/31(水)&nbsp;午後臨時休診のお知らせ</p>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <!-- services -->
  <section id="feature" class="p-feature l-feature">
    <div class="p-feature__inner l-inner p-scroll">
      <div class="p-feature__title c-section-title1">
        <div class="c-section-title1__img">
          <img src="./images/c-logo.png" alt="ロゴ">
        </div>
        <h2 class="c-section-title1__ja">当クリニックの特徴</h2>
        <p class="c-section-title1__en">feature</p>
      </div>
      <ul class="p-feature__container">
        <li class="p-feature__content p-scroll">
          <div class="p-feature__body">
            <h2 class="p-feature__content-title">
              <span>日本小児科学会<br>小児科専門医による安心の診療</span>
            </h2>
            <p class="p-feature__content-text">
              小児一般、小児救急、小児腎臓外来、小児集中治療などの経験をもとに、お子様の健康面・子育ての相談や体調不良の診療を行います。</p>
          </div>
          <div class="p-feature__content-img">
            <img src="./images/feature-img01.jpg" alt="寝転んでいる乳児が頭を撫でられている画像">
          </div>
        </li>
        <li class="p-feature__content p-scroll">
          <div class="p-feature__body">
            <h2 class="p-feature__content-title">
              <span>予約システムや調剤薬局との連携で<br>待ち時間短縮</span>
            </h2>
            <p class="p-feature__content-text">
              予防接種や検診以外に一般診療も時間帯予約システムを導入しています。また当クリニックの隣に調剤薬局がございます。</p>
          </div>
          <div class="p-feature__content-img">
            <img src="./images/feature-img02.jpg" alt="院内の待合室の画像">
          </div>
        </li>
      </ul>
      <div class="p-feature__btn">
        <a href="#" class="c-btn c-btn--wide">クリニックについて詳しく見る</a>
      </div>
    </div>
  </section>


  <?php get_footer(); ?>