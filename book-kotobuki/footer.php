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
        <p class="p-table__text">営業日変更の際はブログに記載しております</p>
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

</main>

<?php
// 除外するページのスラッグを配列で指定します
$exclude_pages = array( 'contact', 'thanks' );

// 現在のページが除外ページに含まれていない、かつ404ページでない場合のみテンプレートパーツを読み込みます
if ( !is_page( $exclude_pages ) && !is_404() ) {
    get_template_part( 'assets/template/contact' );
}
?>


<!-- footerセクション -->
<footer id="footer" class="p-footer l-footer <?php if (is_404()) { echo 'layout-p-footer--marginnone'; } ?>">
  <div class="p-footer__inner l-inner">
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
            <a href="<?php echo esc_url(home_url("/blog/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">おすすめの本</span></a>
          </li>
        </ul>
        <ul class="footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/blog/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">お店について</span></a>
          </li>
        </ul>
        <ul class="p-footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/campaign/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">メニュー</span></a>
          </li>
          <li class="p-nav-list__item">
            <a href="<?php echo esc_url(home_url("/campaign/")) ?>" class="p-nav-list__item-link"><span
                class="p-nav-list__text-move">カフェ</span></a>
          </li>
          <li class="p-nav-list__item">
            <a href="<?php echo esc_url(home_url("/campaign/")) ?>" class="p-nav-list__item-link"><span
                class="p-nav-list__text-move">ブック</span></a>
          </li>
          <li class="p-nav-list__item">
            <a href="<?php echo esc_url(home_url("/campaign/")) ?>" class="p-nav-list__item-link"><span
                class="p-nav-list__text-move">ブッククラブ</span></a>
          </li>
        </ul>
      </div>
      <div class="p-footer__column-list p-footer__right-list">
        <ul class="p-footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/campaign/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">ブログ</span></a>
          </li>
        </ul>
        <ul class="footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/blog/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">よくある質問</span></a>
          </li>
        </ul>
        <ul class="footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/blog/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">プライバシーポリシー</span></a>
          </li>
        </ul>
        <ul class="footer__nav-list p-nav-list">
          <li class="p-nav-list__heading-item">
            <a href="<?php echo esc_url(home_url("/blog/")) ?>" class="p-nav-list__heading-link"><span
                class="p-nav-list__text-move">お問い合わせ</span></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="p-footer__copy">
      <small
        class="p-footer__copy-text">Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
    </div>
  </div>
</footer>

<!-- ページトップボタン -->
<div class="c-page-top js-page-top">
  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dummy.jpg" alt="このボタンを押すとページトップへ戻ります" />
</div>
<?php wp_footer(); ?>
</body>

</html>