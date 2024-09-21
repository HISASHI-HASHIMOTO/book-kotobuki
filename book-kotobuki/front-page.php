<?php get_header(); ?>

<main>

  <div class="p-mv cssbk">
    <label class="page1">
      <input type="checkbox" />
      <span style="z-index: 99;">中の文章1</span>
      <span class="dummy">中の文章2</span>
    </label>
    <label class="page2">
      <input type="checkbox" />
      <span style="z-index: 98;">中の文章3</span>
      <span class="dummy">中の文章4</span>
    </label>
    <div class="right">
    </div>
  </div>
  <!-- 
  <div id="book">
    <div class="page page1"></div>
    <div class="page page2"></div>
    <div class="page page3"></div>
    <div class="page-lock"></div>
  </div>

  <div class="p-mv__page" id="book">
    <div class="p-mv__page1 page1"></div>
    <div class="p-mv__page2 page2"></div>
    <div class="p-mv__page3 page3"></div>
    <div class="p-mv__page-lock"></div>
  </div> -->

  <div class="mv" style="margin-top: 500px;">
    <div class="mv__swiper swiper" id="slide1">
      <!-- swiper-wrapper -->
      <div class="mv__swiper-wrapper swiper-wrapper">
        <!-- スライド -->
        <div class="mv__swiper-slide swiper-slide">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img01.jpg"
              media="(min-width: 768px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img01.jpg" alt="海底を優雅に泳ぐ亀" />
          </picture>
        </div>
        <div class="mv__swiper-slide swiper-slide">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img02.jpg"
              media="(min-width: 768px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img02.jpg" alt="二人がダイビング中に亀と遭遇する" />
          </picture>
        </div>
        <div class="mv__swiper-slide swiper-slide">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img03.jpg"
              media="(min-width: 768px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img03.jpg" alt="海辺に漂う船と青い空" />
          </picture>
        </div>
        <div class="mv__swiper-slide swiper-slide">
          <picture>
            <source srcset="./assets/images/common/Rectangle217.jpg" media="(min-width: 768px)" />
            <img src="./assets/images/common/Rectangle218.jpg" alt="綺麗に澄んだ海岸" />
          </picture>
        </div>
      </div>
      <div class="mv__title">
        <h2 class="mv__main-title">diving</h2>
        <p class="mv__sub-title">into&nbsp;the&nbsp;ocean</p>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>