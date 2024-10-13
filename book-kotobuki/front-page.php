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
  <section class="p-news l-news">
    <div class="p-news__inner l-inner">
      <div class="p-news__title">
        <span class="c-section-title__en">news</span>
        <h2 class="c-section-title__ja">おすすめの本</h2>
      </div>
      <ul class="p-news__items">
        <li class="p-news__item">
          <a href="" class="c-news-card">
            <figure class="c-news-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="そして誰もいなくなった">
            </figure>
            <div class="c-news-card__box">
              <div class="c-news-card__meta-box">
                <div class="c-news-card__meta">ミステリー</div>
                <time class="c-news-card__meta-time" datetime="2024-10-06">2024.10.6</time>
              </div>
              <p class="c-news-card__title">そして誰もいなくなった/アガサクリスティ</p>
              <div class="c-news-card__drink">
                <div class="c-news-card__drink-title">この本に合う一杯</div>
                <div class="c-news-card__drink-text">ブラックコーヒー</div>
              </div>
            </div>
          </a>
        </li>
        <li class="p-news__item">
          <a href="" class="c-news-card">
            <figure class="c-news-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="そして誰もいなくなった">
            </figure>
            <div class="c-news-card__box">
              <div class="c-news-card__meta-box">
                <div class="c-news-card__meta">ミステリー</div>
                <time class="c-news-card__meta-time" datetime="2024-10-06">2024.10.6</time>
              </div>
              <p class="c-news-card__title">そして誰もいなくなった/アガサクリスティ</p>
              <div class="c-news-card__drink">
                <div class="c-news-card__drink-title">この本に合う一杯</div>
                <div class="c-news-card__drink-text">ブラックコーヒー</div>
              </div>
            </div>
          </a>
        </li>
        <li class="p-news__item">
          <a href="" class="c-news-card">
            <figure class="c-news-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="そして誰もいなくなった">
            </figure>
            <div class="c-news-card__box">
              <div class="c-news-card__meta-box">
                <div class="c-news-card__meta">ミステリー</div>
                <time class="c-news-card__meta-time" datetime="2024-10-06">2024.10.6</time>
              </div>
              <p class="c-news-card__title">そして誰もいなくなった/アガサクリスティ</p>
              <div class="c-news-card__drink">
                <div class="c-news-card__drink-title">この本に合う一杯</div>
                <div class="c-news-card__drink-text">ブラックコーヒー</div>
              </div>
            </div>
          </a>
        </li>


      </ul>
      <div class="p-news__button">
        <a href="#" class=" c-button"><span class="c-button-text">view&nbsp;more</span></a>
      </div>
    </div>
  </section>

  <!-- about -->
  <section class="p-about l-about">
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

  <!-- services -->
  <section id="service" class="p-service l-service">
    <div class="p-service__inner l-inner p-scroll">
      <div class="p-service__title">
        <span class="c-section-title__en c-section-title__en--white">menu</span>
        <h2 class="c-section-title__ja c-section-title__ja--white">メニュー</h2>
      </div>
      <ul class="p-service__container">
        <li class="p-service__content p-scroll">
          <div class="p-service__body">
            <h2 class="p-service__content-title">カフェメニュー</h2>
            <p class="p-service__content-text">
              当店は、エスプレッソやカフェラテなどの多彩なコーヒーはもちろん、紅茶や抹茶ラテなどのドリンクも充実。さらに、クロワッサンやサンドイッチといった軽食や、チーズケーキ、ブラウニーなどのデザートもご用意しています。
            </p>
          </div>
          <div class="p-service__content-img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="寝転んでいる乳児が頭を撫でられている画像">
          </div>
        </li>
        <li class="p-service__content p-scroll">
          <div class="p-service__body">
            <h2 class="p-service__content-title">ブックメニュー</h2>
            <p class="p-service__content-text">
              当店では、小説やエッセイ、ビジネス書など多彩なジャンルの本を揃えています。リラックスしながら、カフェドリンクと共にお好きな本をゆったりとお楽しみください。</p>
          </div>
          <div class="p-service__content-img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="院内の待合室の画像">
          </div>
        </li>
      </ul>
      <div class="p-service__button">
        <a href="#" class="c-button c-button--white"><span class="c-button-text">view&nbsp;more</span></a>
      </div>
    </div>
  </section>

  <!-- blogセクション -->
  <section class="p-blog l-blog">
    <div class="p-blog__inner inner">
      <div class="p-blog__wrapper">
        <div class="p-blog__title section-header">
          <span class="c-section-title__en">blog</span>
          <h2 class="c-section-title__ja">ブログ</h2>
        </div>
        <!-- navigation buttons -->
        <div class="p-blog__button-box">
          <div class="p-blog__button-prev"></div>
          <div class="p-blog__button-next"></div>
        </div>
        <div class="p-blog__content">
          <div class="p-blog__swiper swiper" id="slide1">
            <!-- swiper-wrapper -->
            <div class="p-blog__swiper-wrapper swiper-wrapper">
              <!-- スライド -->
              <div class="p-blog__swiper-slide swiper-slide">
                <a href="" class="p-blog__slide-card c-blog-card">
                  <figure class="c-blog-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海水の中で煌びやかに光る魚群" />
                  </figure>
                  <div class="c-blog-card__body">
                    <div class="c-blog-card__metabox">
                      <span class="c-blog-card__meta">イベント</span>
                      <time class="c-blog-card__time"
                        datetime="2023-11-10<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <div class="c-blog-card__box">
                      <p class="c-blog-card__title">読書会を行いました</p>
                      <p class="c-blog-card__text">
                        20名以上の方にご参加いただき、大盛況に終えることができました。
                        皆様の推し本を紹介し合い本好きな方もそうでない方も素敵な時間になりました。
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-blog__swiper-slide swiper-slide">
                <a href="" class="p-blog__slide-card c-blog-card">
                  <figure class="c-blog-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海水の中で煌びやかに光る魚群" />
                  </figure>
                  <div class="c-blog-card__body">
                    <div class="c-blog-card__metabox">
                      <span class="c-blog-card__meta">イベント</span>
                      <time class="c-blog-card__time"
                        datetime="2023-11-10<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <div class="c-blog-card__box">
                      <p class="c-blog-card__title">読書会を行いました</p>
                      <p class="c-blog-card__text">
                        20名以上の方にご参加いただき、大盛況に終えることができました。
                        皆様の推し本を紹介し合い本好きな方もそうでない方も素敵な時間になりました。
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-blog__swiper-slide swiper-slide">
                <a href="" class="p-blog__slide-card c-blog-card">
                  <figure class="c-blog-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海水の中で煌びやかに光る魚群" />
                  </figure>
                  <div class="c-blog-card__body">
                    <div class="c-blog-card__metabox">
                      <span class="c-blog-card__meta">イベント</span>
                      <time class="c-blog-card__time"
                        datetime="2023-11-10<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <div class="c-blog-card__box">
                      <p class="c-blog-card__title">読書会を行いました</p>
                      <p class="c-blog-card__text">
                        20名以上の方にご参加いただき、大盛況に終えることができました。
                        皆様の推し本を紹介し合い本好きな方もそうでない方も素敵な時間になりました。
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-blog__swiper-slide swiper-slide">
                <a href="" class="p-blog__slide-card c-blog-card">
                  <figure class="c-blog-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海水の中で煌びやかに光る魚群" />
                  </figure>
                  <div class="c-blog-card__body">
                    <div class="c-blog-card__metabox">
                      <span class="c-blog-card__meta">イベント</span>
                      <time class="c-blog-card__time"
                        datetime="2023-11-10<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <div class="c-blog-card__box">
                      <p class="c-blog-card__title">読書会を行いました</p>
                      <p class="c-blog-card__text">
                        20名以上の方にご参加いただき、大盛況に終えることができました。
                        皆様の推し本を紹介し合い本好きな方もそうでない方も素敵な時間になりました。
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-blog__swiper-slide swiper-slide">
                <a href="" class="p-blog__slide-card c-blog-card">
                  <figure class="c-blog-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海水の中で煌びやかに光る魚群" />
                  </figure>
                  <div class="c-blog-card__body">
                    <div class="c-blog-card__metabox">
                      <span class="c-blog-card__meta">イベント</span>
                      <time class="c-blog-card__time"
                        datetime="2023-11-10<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <div class="c-blog-card__box">
                      <p class="c-blog-card__title">読書会を行いました</p>
                      <p class="c-blog-card__text">
                        20名以上の方にご参加いただき、大盛況に終えることができました。
                        皆様の推し本を紹介し合い本好きな方もそうでない方も素敵な時間になりました。
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-blog__swiper-slide swiper-slide">
                <a href="" class="p-blog__slide-card c-blog-card">
                  <figure class="c-blog-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海水の中で煌びやかに光る魚群" />
                  </figure>
                  <div class="c-blog-card__body">
                    <div class="c-blog-card__metabox">
                      <span class="c-blog-card__meta">イベント</span>
                      <time class="c-blog-card__time"
                        datetime="2023-11-10<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <div class="c-blog-card__box">
                      <p class="c-blog-card__title">読書会を行いました</p>
                      <p class="c-blog-card__text">
                        20名以上の方にご参加いただき、大盛況に終えることができました。
                        皆様の推し本を紹介し合い本好きな方もそうでない方も素敵な時間になりました。
                      </p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-blog__btn">
          <a href="#" class=" c-button"><span class="c-button-text">view&nbsp;more</span></a>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>