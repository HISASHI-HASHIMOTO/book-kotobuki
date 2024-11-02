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
    <div class="p-news__inner l-inner p-scroll">
      <div class="p-news__title">
        <span class="c-section-title__en">news</span>
        <h2 class="c-section-title__ja">おすすめの本</h2>
      </div>

      <ul class="p-news__items">
        <?php
            $args = array(
                "post_type" => "news", // カスタム投稿のスラッグ名
                "posts_per_page" => 3, // 表示する件数
                'orderby' => 'date',
                'order' => 'DESC'  
            ); $the_query = new WP_Query($args);?>
        <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li class="p-news__item">
          <a href="<?php echo esc_url(home_url("/news")) ?>" class="c-news-card">
            <figure class="c-news-card__img">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full'); ?>
              <?php else : ?>
              <img src=" <?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-image画像" />
              <?php endif; ?>
            </figure>
            <div class="c-news-card__box">
              <div class="c-news-card__meta-box">
                <div class="c-news-card__meta">
                  <?php
                    $taxonomy_terms = get_the_terms(get_the_ID(), 'news_category');
                    if (!empty($taxonomy_terms)) {
                      foreach ($taxonomy_terms as $taxonomy_term) {
                        echo '<span>' . esc_html($taxonomy_term->name) . '</span>';
                      }
                    }
                    ?></div>
                <time class="c-news-card__meta-time"
                  datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
              </div>
              <p class="c-news-card__title">
                <?php the_title(); ?> /
                <!-- 著者情報の取得と出力 -->
                <?php 
                    // 著者フィールドを取得
                    $news_card_author = get_field('news-card__author'); 
                    // 値が存在する場合に表示
                    if (!empty($news_card_author)) : 
                      echo esc_html($news_card_author); 
                    endif; 
                  ?>
              </p>
              <div class="c-news-card__drink">
                <div class="c-news-card__drink-title">この本に合う一杯</div>
                <?php 
                    // ドリンクフィールドを取得
                    $news_drink = get_field('news-card__drink'); 
                    // 値が存在する場合に表示
                    if (!empty($news_drink)) : 
                  ?>
                <div class="c-news-card__drink-text"> <?php echo esc_html($news_drink); ?></div>
                <?php endif; ?>
              </div>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
        <!-- サブループ終了 -->
        <?php wp_reset_postdata(); ?>
      </ul>
      <?php else : ?>
      <p class="campaign__message">記事が投稿されていません</p>
      <?php endif; ?>
      <div class="p-news__button">
        <a href="<?php echo esc_url(home_url("/news")) ?>" class=" c-button"><span
            class="c-button-text">view&nbsp;more</span></a>
      </div>
    </div>
  </section>

  <!-- about -->
  <section class="p-about l-about">
    <div class="p-about__inner l-inner p-scroll">
      <div class="p-about__title">
        <span class="c-section-title__en">about</span>
        <h2 class="c-section-title__ja">当店について</h2>
      </div>
      <div class="p-about__content">
        <figure class="p-about__img">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/about-img01@2x.png"
            media="(min-width: 768px)" alt="店内画像" width="960" height="640" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-img01@2x.png" alt="店内画像" width="960"
            height="640" />
          </picture>
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
        <a href="<?php echo esc_url(home_url("/about")) ?>" class="c-button">
          <span class="c-button-text">view&nbsp;more</span>
        </a>
      </div>
    </div>
  </section>

  <!-- services -->
  <section class="p-service l-service">
    <div class="p-service__inner l-inner p-scroll">
      <div class="p-service__title">
        <span class="c-section-title__en c-section-title__en--white">menu</span>
        <h2 class="c-section-title__ja c-section-title__ja--white">メニュー</h2>
      </div>
      <ul class="p-service__container">
        <li class="p-service__content p-scroll">
          <div class="p-service__body">
            <h2 class="p-service__content-title">ドリンクメニュー</h2>
            <p class="p-service__content-text">
              書をより楽しめるよう工夫されたバラエティ豊かなラインナップが魅力です。<br>コーヒーや紅茶はもちろん、季節限定の特製ドリンクやハーブティー、リラックス効果のあるラテなど、お好みに合わせてお選びいただけます。<br>
              本のジャンルや気分に合わせたペアリングも提案し、より充実した読書体験を提供します。心地よい空間で、お好きなドリンクを片手にゆったりとしたひとときをお過ごしください。
            </p>
          </div>
          <div class="p-service__content-img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/menu-img01@2x.jpg" alt="ドリンクメニュー" width="640"
              height="426">
          </div>
        </li>
        <li class="p-service__content p-scroll">
          <div class="p-service__body">
            <h2 class="p-service__content-title">本とドリンクのペアリング</h2>
            <p class="p-service__content-text">
              「本とドリンクのペアリング」は、選んだ本のテーマや雰囲気にぴったりのドリンクをお勧めするサービスです。例えば、リラックスしたい時にはハーブティーと自己啓発書、ミステリー小説には濃いめのエスプレッソなど、読書体験をさらに豊かにするドリンクの組み合わせを提案します。特別な一冊を味わいながら、心地よい時間を過ごすためのユニークなサービスです。
            </p>
          </div>
          <div class="p-service__content-img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/menu-img03@2x.jpg" alt="本とドリンクのペアリング"
              width="960" height="641">
          </div>
        </li>
      </ul>
      <div class="p-service__button">
        <a href="<?php echo esc_url(home_url("/menu")) ?>" class="c-button c-button--white"><span
            class="c-button-text">view&nbsp;more</span></a>
      </div>
    </div>
  </section>

  <!-- blogセクション -->
  <section class="p-blog l-blog">
    <div class="p-blog__inner  p-scroll">
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
              <?php
              $args = array(
                "post_type" => "post",
                "posts_per_page" => 10,
                'orderby' => 'rand'
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
              ?>
              <div class="p-blog__swiper-slide swiper-slide">
                <a href="<?php the_permalink(); ?>" class="p-blog__slide-card c-blog-card">
                  <figure class="c-blog-card__img">
                    <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image@2x.jpg"
                      alt="<?php the_title(); ?>のアイキャッチ画像" width="375" height="375" />
                    <img src="">
                    <?php endif; ?>
                  </figure>
                  <div class="c-blog-card__body">
                    <div class="c-blog-card__metabox">
                      <span class="c-blog-card__meta">
                        <?php 
                      $categories = get_the_category();
                      if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name ); // 最初のカテゴリー名を取得して表示
                      }
                    ?></span>
                      <time class="c-blog-card__time"
                        datetime="2023-11-10<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <div class="c-blog-card__box">
                      <p class="c-blog-card__title"><?php the_title(); ?></p>
                      <p class="c-blog-card__text">
                        <?php echo wp_trim_words(get_the_content(), 80, '…'); ?>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php else: ?>
              <p class="voice__message">記事が投稿されていません</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="p-blog__btn">
          <a href="<?php echo esc_url(home_url("/blog")) ?>" class=" c-button"><span
              class="c-button-text">view&nbsp;more</span></a>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>