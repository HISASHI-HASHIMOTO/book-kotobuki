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
        <h2 class="c-section-title__ja">お知らせ</h2>
      </div>
      <ul class="p-news__items">
        <li class="p-news__item">
          <a href="" class="p-news__item-link">
            <div class="p-news__meta-box">
              <time class="p-news__date" datetime="2024-10-27">2024.10.27</time>
              <span class="p-news__meta">イベント</span>
            </div>
            <p class="p-news__text">読み聞かせ会のお知らせ</p>
          </a>
        </li>
        <li class="p-news__item">
          <a href="" class="p-news__item-link">
            <div class="p-news__meta-box">
              <time class="p-news__date" datetime="2024-11-07">2024.11.07</time>
              <span class="p-news__meta">イベント</span>
            </div>
            <p class="p-news__text">定休日のお知らせ</p>
          </a>
        </li>
        <li class="p-news__item">
          <a href="" class="p-news__item-link">
            <div class="p-news__meta-box">
              <time class="p-news__date" datetime="2024-11-15">2024.11.15</time>
              <span class="p-news__meta">イベント</span>
            </div>
            <p class="p-news__text">読書会のお知らせ</p>
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
        <h2 class="c-section-title__ja">お店について</h2>
      </div>
      <div class="p-about__content">
        <figure class="p-about__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-img01@2x.png" alt="院内の待合室の画像">
        </figure>
        <div class="p-about__box">
          <p class="p-about__sub-title">物語の中に没入しながら、一杯のコーヒーをゆったりと味わう至福のひとときを提供します</p>
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
            <h2 class="p-service__content-title">
              <span>カフェメニュー</span>
            </h2>
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
            <h2 class="p-service__content-title">
              <span>ブックメニュー</span>
            </h2>
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
          <span class="c-section-title__en">book</span>
          <h2 class="c-section-title__ja">本の紹介</h2>
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
                      <span class="c-blog-card__meta">ミステリー</span>
                      <time class="c-blog-card__time"
                        datetime="2023-11-10<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <div class="c-blog-card__box">
                      <p class="c-blog-card__title">そして誰もいなくなった</p>
                      <p class="c-blog-card__text">
                        閉ざされた孤島に集められた10人の登場人物が次々と不可解な状況で命を落としていくスリリングな展開にハラハラドキドキしますよ。
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
                      <span class="c-blog-card__meta">ミステリー</span>
                      <time class="c-blog-card__time"
                        datetime="2023-11-10<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <div class="c-blog-card__box">
                      <p class="c-blog-card__title">そして誰もいなくなった</p>
                      <p class="c-blog-card__text">
                        閉ざされた孤島に集められた10人の登場人物が次々と不可解な状況で命を落としていくスリリングな展開にハラハラドキドキしますよ。
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
                      <span class="c-blog-card__meta">ミステリー</span>
                      <time class="c-blog-card__time"
                        datetime="2023-11-10<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <div class="c-blog-card__box">
                      <p class="c-blog-card__title">そして誰もいなくなった</p>
                      <p class="c-blog-card__text">
                        閉ざされた孤島に集められた10人の登場人物が次々と不可解な状況で命を落としていくスリリングな展開にハラハラドキドキしますよ。
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
                      <span class="c-blog-card__meta">ミステリー</span>
                      <time class="c-blog-card__time"
                        datetime="2023-11-10<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <div class="c-blog-card__box">
                      <p class="c-blog-card__title">そして誰もいなくなった</p>
                      <p class="c-blog-card__text">
                        閉ざされた孤島に集められた10人の登場人物が次々と不可解な状況で命を落としていくスリリングな展開にハラハラドキドキしますよ。
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
                      <span class="c-blog-card__meta">ミステリー</span>
                      <time class="c-blog-card__time"
                        datetime="2023-11-10<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <div class="c-blog-card__box">
                      <p class="c-blog-card__title">そして誰もいなくなった</p>
                      <p class="c-blog-card__text">
                        閉ざされた孤島に集められた10人の登場人物が次々と不可解な状況で命を落としていくスリリングな展開にハラハラドキドキしますよ。
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

  <!-- access -->
  <section id="access" class="p-access l-access">
    <div class="p-access__inner l-inner p-scroll">
      <div class="p-access__title">
        <span class="c-section-title__en">access</span>
        <h2 class="c-section-title__ja">アクセス</h2>
      </div>
      <div class="p-access__information p-scroll">
        <div class="p-access__info-box">
          <h2 class="p-access__logo">
            <a class="p-access__logo-link" href="#"><img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/site-logo-black.png" alt="book-kotobukiロゴ">
            </a>
          </h2>
          <address class="p-access__address-box">
            <p class="p-access__tel">tel.<a class="p-access__tel-link" href="tel:+81-03-4579-9011">0123-456-789</a>
            </p>
            <p class="p-access__address">〒151-0000 東京都新宿区代々木1-1-1 SHIBUYAビル3F</p>
          </address>
        </div>
        <div class="p-access__table-area p-table">
          <table class="p-table__wrapper">
            <tbody class="p-table__tbody">
              <tr class="p-table__row">
                <th class="p-table__title">営業時間</th>
                <th class="p-table__day">月</th>
                <th class="p-table__day">火</th>
                <th class="p-table__day">水</th>
                <th class="p-table__day">木</th>
                <th class="p-table__day">金</th>
                <th class="p-table__day">土</th>
                <th class="p-table__day p-table__sun">日/祝</th>
              </tr>
              <tr class="p-table__row">
                <td class="p-table__time">13:00~23:00</td>
                <td class="p-table__mark"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark"><span class="p-table__in-mark-pink">-</span></td>
                <td class="p-table__mark"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark p-table__sun"><span class="p-table__in-mark-pink">&#9679;</span>
                </td>
              </tr>
            </tbody>
          </table>
          <p class="p-table__text">営業日変更の際はお知らせに記載しております</p>
        </div>
      </div>
      <div class="p-access__map p-scroll">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2113.5580401539614!2d139.7000848085101!3d35.68245638743129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cc601b83d67%3A0x1aa906a1d6aaecf1!2z44Ov44Oz44OH44Kk44Kq44OV44Kj44K544OI44O844Kt44On44O877yI5paw5a6_44O75riL6LC344O75Luj44CF5pyo44Ko44Oq44KiIOiyuOOBl-S8muitsOWupO-8iQ!5e0!3m2!1sja!2sjp!4v1686845742573!5m2!1sja!2sjp"
          width="1040" height="300" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

  <!-- contact -->
  <section id="contact" class="p-contact l-contact">
    <div class="p-contact__inner">
      <div class="p-contact__title">
        <h2 class="p-contact__text">まずはお気軽にご相談ください</h2>
      </div>
      <div class="p-contact__button-box">
        <a href="#" class="p-contact__button">
          <span class="p-contact__button-en-text">contact</span>
          <span class="p-contact__button-ja-text">お問い合わせはこちら</span>
        </a>
      </div>

    </div>
  </section>

  <?php get_footer(); ?>