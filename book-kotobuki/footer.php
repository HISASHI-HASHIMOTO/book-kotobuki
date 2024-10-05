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
                class="p-nav-list__text-move">お知らせ</span></a>
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
                class="p-nav-list__text-move">本の紹介</span></a>
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
<div class="page-top js-page-top">
  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Group20.svg" alt="このボタンを押すとページトップへ戻ります" />
</div>
<?php wp_footer(); ?>
</body>

</html>