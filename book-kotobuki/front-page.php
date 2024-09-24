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
        <button class="c-button"><span class="c-button-text">view&nbsp;more</span></button>
      </div>
    </div>
  </section>



  <!-- services -->
  <section id="service" class="p-service l-service">
    <div class="p-service__inner  p-scroll">
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
        <button class="c-button"><span class="c-button-text">view&nbsp;more</span></button>
      </div>
    </div>
  </section>

  <!-- blogセクション -->
  <section class="blog layout-blog">
    <div class="blog__inner inner">
      <div class="blog__wrapper">
        <div class="blog__title section-header">
          <span class="c-section-title__en">book</span>
          <h2 class="c-section-title__ja">本の紹介</h2>
        </div>
        <!-- navigation buttons -->
        <div class="blog__button-box">
          <div class="blog__button-prev"></div>
          <div class="blog__button-next"></div>
        </div>
        <div class="blog__content">
          <div class="blog__swiper swiper" id="slide2">
            <!-- swiper-wrapper -->
            <div class="blog__swiper-wrapper swiper-wrapper">
              <!-- スライド -->
              <div class="blog__swiper-slide swiper-slide">
                <a href="" class="blog__slide-card blog-card">
                  <figure class="blog-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海水の中で煌びやかに光る魚群" />
                  </figure>
                  <div class="blog-card__body">
                    <div class="blog-card__metabox">
                      <div class="blog-card__meta">ライセンス講習</div>
                      <p class="blog-card__title">ライセンス取得</p>
                    </div>
                    <div class="blog-card__box">
                      <div class="blog-card__menu">全部コミコミ(お一人様)</div>
                      <div class="blog-card__price">
                        <div class="blog-card__original-price">¥56,000</div>
                        <div class="blog-card__discounted-rate">¥46,000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="blog__swiper-slide swiper-slide">
                <a href="" class="blog__slide-card blog-card">
                  <figure class="blog-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="貸切ダイビングを行う海岸沿いに浮かぶ船" />
                  </figure>
                  <div class="blog-card__body">
                    <div class="blog-card__metabox">
                      <div class="blog-card__meta">体験ダイビング</div>
                      <p class="blog-card__title">貸切体験ダイビング</p>
                    </div>
                    <div class="blog-card__box">
                      <div class="blog-card__menu">全部コミコミ(お一人様)</div>
                      <div class="blog-card__price">
                        <div class="blog-card__original-price">¥24,000</div>
                        <div class="blog-card__discounted-rate">¥18,000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="blog__swiper-slide swiper-slide">
                <a href="" class="blog__slide-card blog-card">
                  <figure class="blog-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="暗闇の中で神々しく光るクラゲ" />
                  </figure>
                  <div class="blog-card__body">
                    <div class="blog-card__metabox">
                      <div class="blog-card__meta">体験ダイビング</div>
                      <p class="blog-card__title">ナイトダイビング</p>
                    </div>
                    <div class="blog-card__box">
                      <div class="blog-card__menu">全部コミコミ(お一人様)</div>
                      <div class="blog-card__price">
                        <div class="blog-card__original-price">¥10,000</div>
                        <div class="blog-card__discounted-rate">¥8,000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="blog__swiper-slide swiper-slide">
                <a href="" class="blog__slide-card blog-card">
                  <figure class="blog-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海上でダイビングを楽しむ複数の人たち" />
                  </figure>
                  <div class="blog-card__body">
                    <div class="blog-card__metabox">
                      <div class="blog-card__meta">ファンダイビング</div>
                      <p class="blog-card__title">貸切ファンダイビング</p>
                    </div>
                    <div class="blog-card__box">
                      <div class="blog-card__menu">全部コミコミ(お一人様)</div>
                      <div class="blog-card__price">
                        <div class="blog-card__original-price">¥20,000</div>
                        <div class="blog-card__discounted-rate">¥16,000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="blog__swiper-slide swiper-slide">
                <a href="" class="blog__slide-card blog-card">
                  <figure class="blog-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="海上でダイビングを楽しむ複数の人たち" />
                  </figure>
                  <div class="blog-card__body">
                    <div class="blog-card__metabox">
                      <div class="blog-card__meta">ファンダイビング</div>
                      <p class="blog-card__title">貸切ファンダイビング</p>
                    </div>
                    <div class="blog-card__box">
                      <div class="blog-card__menu">全部コミコミ(お一人様)</div>
                      <div class="blog-card__price">
                        <div class="blog-card__original-price">¥20,000</div>
                        <div class="blog-card__discounted-rate">¥16,000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="blog__btn">
          <a class="btn">
            <span class="btn__text">view&nbsp;more</span>
            <div class="btn__arrow"></div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- access -->
  <section id="access" class="p-access l-access">
    <div class="p-access__inner p-scroll">
      <div class="p-access__title-area p-scroll">
        <div class="p-access__title-box">
          <h2 class="p-access__title">
            <a class="p-access__title-link" href="index.html"><img src="./images/site-logo.png" alt="クリニックロゴ"></a>
          </h2>
          <address class="p-access__address-area">
            <p class="p-access__tel">tel.<a class="p-access__tel-link" href="tel:+81-03-4579-9011">03-4579-9011</a></p>
            <p class="p-access__address">〒151-0000 東京都新宿区代々木1-1-1 SHIBUYAビル3F</p>
          </address>
        </div>
        <div class="p-access__table-area p-table">
          <table class="p-table__wrapper">
            <tbody class="p-table__tbody">
              <tr class="p-table__row">
                <th class="p-table__title">受付時間</th>
                <th class="p-table__day">月</th>
                <th class="p-table__day p-table__day--tue">火</th>
                <th class="p-table__day p-table__day--wed">水</th>
                <th class="p-table__day p-table__day--thu">木</th>
                <th class="p-table__day p-table__day--fri">金</th>
                <th class="p-table__day p-table__day--sat">土</th>
                <th class="p-table__day p-table__day--sun p-table__sun">日/祝</th>
              </tr>
              <tr class="p-table__row">
                <td class="p-table__time">09:00~13:00</td>
                <td class="p-table__mark"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark p-table__mark--tue"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark p-table__mark--wed"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark p-table__mark--thu"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark p-table__mark--fri"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark p-table__mark--sat"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark p-table__mark--sun p-table__sun"><span class="p-table__in-mark-black">-</span>
                </td>
              </tr>
              <tr class="p-table__row">
                <td class="p-table__time">15:00~18:00</td>
                <td class="p-table__mark"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark p-table__mark--tue"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark p-table__mark--wed"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark p-table__mark--thu"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark p-table__mark--fri"><span class="p-table__in-mark-pink">&#9679;</span></td>
                <td class="p-table__mark p-table__mark--sat"><span class="p-table__in-mark-black">-</span></td>
                <td class="p-table__mark p-table__mark--sun p-table__sun"><span class="p-table__in-mark-black">-</span>
                </td>
              </tr>
            </tbody>
          </table>
          <p class="p-table__text">午前最終受付：12:30 午後最終受付：17:30</p>
        </div>
      </div>
      <div class="p-access__map-area p-scroll">
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
        <a href="#" class="p-contact__button-link">
          <span class="p-contact__button-en-text">contact</span>
          <p class="p-contact__button-ja-text">お問い合わせはこちら</p>
        </a>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>