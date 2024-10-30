<!-- access -->
<section id="access" class="p-access l-access">
  <div class="p-access__inner l-inner p-scroll">
    <div class="p-access__title">
      <span class="c-section-title__en">access</span>
      <h2 class="c-section-title__ja">アクセス</h2>
    </div>
    <div class="p-access__information">
      <div class="p-access__info-box">
        <h2 class="p-access__logo">
          <a class="p-access__logo-link" href="#"><img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/site-logo-black.png" alt="book-kotobukiロゴ">
          </a>
        </h2>
        <address class="p-access__address-box">
          <p class="p-access__tel">tel.<a class="p-access__tel-link" href="tel:+81-03-4579-9011">0123-456-789</a>
          </p>
          <p class="p-access__address">〒000-0000 兵庫県たつの市揖保川町 </p>
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
        <p class="p-table__text">営業日変更の際はブログに記載しております</p>
      </div>
    </div>
    <div class="p-access__map p-scroll">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9836.463503370693!2d134.51688180816313!3d34.825265316499035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554fb101e7b0431%3A0x9ce1bad40ad6d7f6!2z56uc6YeO6aeF!5e0!3m2!1sja!2sjp!4v1730293791541!5m2!1sja!2sjp"
        width="1040" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<?php
// 除外するページのスラッグを配列で指定します
$exclude_pages = array( 'contact', 'thanks' );

// 現在のページが除外ページに含まれていない、かつ404ページでない場合のみテンプレートパーツを読み込みます
if ( !is_page( $exclude_pages ) && !is_404() ) {
    get_template_part( 'assets/template/contact' );
}
?>

</main>


<!-- footerセクション -->
<footer id="footer" class="p-footer l-footer <?php if (is_404()) { echo 'layout-p-footer--marginnone'; } ?>">
  <div class="p-footer__inner l-inner p-scroll">
    <div class="p-footer__title-box">
      <div class="p-footer__title">
        <a href="<?php echo esc_url(home_url("/")) ?>" class="p-footer__title-link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/site-logo-white.png" alt="book-koobukiロゴ" />
        </a>
      </div>
    </div>
    <div class="p-footer__list-contents">
      <div class="p-footer__column-list p-footer__left-list">
        <ul class="footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/news/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">おすすめの本</span></a>
          </li>
        </ul>
        <ul class="footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/about/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">お店について</span></a>
          </li>
        </ul>
        <ul class="p-footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/menu/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">メニュー</span></a>
          </li>
          <li class="p-nav-list__item">
            <a href="<?php echo esc_url(home_url("/menu?&id=tab1")) ?>" id="tab1" class="p-nav-list__item-link"><span
                class="p-nav-list__text-move">カフェ</span></a>
          </li>
          <li class="p-nav-list__item">
            <a href="<?php echo esc_url(home_url("/menu?&id=tab2")) ?>" id="tab2" class="p-nav-list__item-link"><span
                class="p-nav-list__text-move">ブック</span></a>
          </li>
          <li class="p-nav-list__item">
            <a href="<?php echo esc_url(home_url("/menu?&id=tab3")) ?>" id="tab3" class="p-nav-list__item-link"><span
                class="p-nav-list__text-move">ブッククラブ</span></a>
          </li>
        </ul>
      </div>
      <div class="p-footer__column-list p-footer__right-list">
        <ul class="p-footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/blog/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">ブログ</span></a>
          </li>
        </ul>
        <ul class="footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/faq/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">よくある質問</span></a>
          </li>
        </ul>
        <ul class="footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/privacy-policy/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">プライバシーポリシー</span></a>
          </li>
        </ul>
        <ul class="footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/contact/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">お問い合わせ</span></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="p-footer__copy">
      <small
        class="p-footer__copy-text">Copyright&nbsp;&copy;&nbsp;2024&nbsp;book-kotobuki&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
    </div>
  </div>
</footer>

<!-- ページトップボタン -->
<div class="c-page-top js-page-top">
  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-top-button.jpeg" alt="このボタンを押すとページトップへ戻ります" />

</div>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXv
ZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/4-1-4.js"></script>
</body>

</html>