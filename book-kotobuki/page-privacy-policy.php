<?php get_header(); ?>

<!-- メインビュー -->
<div class="p-page-news__mv c-sub-mv">
  <div class="c-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img04@2x.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img04@2x.jpg" alt="おすすめ本のお知らせ" />
    </picture>
  </div>
  <h2 class="c-sub-mv__title">プライバシーポリシー</h2>
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

<!-- プライバシー -->
<section class="p-privacy-policy l-sub-page">
  <div class="p-privacy-policy__inner inner">
    <h2 class="p-privacy-policy__title"><?php the_title(); ?></h2>
    <div class="p-privacy-policy__contents">
      <?php the_content(); ?>
      <!-- <p class="privacy-policy__text">
        以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。
      </p>
      <div class="privacy-policy__text-box">
        <ul type="1" class="privacy-policy__list">
          <li class="privacy-policy__list-item">1.概要
            当社は、お客様の個人情報を大切に扱い、個人情報保護に努めています。本プライバシーポリシーには、当社がどのように個人情報を収集し、使用するかについて説明しています。</li>
          <li class="privacy-policy__list-item">2.収集する情報 当社は、お客様が当社のサービスを利用する際に、お名前、住所、電話番号、メールアドレスなどの個人情報を収集する場合があります。
          </li>
        </ul>
      </div>
      <div class="privacy-policy__text-box">
        <p class="privacy-policy__text">また、当社のサイトを閲覧する際に、IPアドレス、ブラウザの種類、言語設定、アクセス日時などの情報も収集する場合があります。</p>
        <ul type="1" class="privacy-policy__list">
          <li class="privacy-policy__list-item">1.情報の使用 当社は 、お客様から収集した個人情報を、以下の目的で使用することがあります。</li>
        </ul>
      </div>
      <div class="privacy-policy__text-box">
        <p class="privacy-policy__text">・お客様からのお問い合わせやサポートの提供・当社のサービスや製品の提供 ・当社のサイトの改善や新しいサービスの開発 ・法律や規制に基づく義務の履行</p>
        <ul type="1" class="privacy-policy__list">
          <li class="privacy-policy__list-item">1.情報の共有 当社は、お客様から収集した個人情報を、以下の場合に限り第三者に提供することがあります。</li>
        </ul>
      </div>
      <div class="privacy-policy__text-box">
        <p class="privacy-policy__text">・お客様の同意がある場合 ・法律や規制に基づく場合 ・当社が信頼できると判断した業務委託先に必要な範囲で提供する場合</p>
        <ul type="1" class="privacy-policy__list">
          <li class="privacy-policy__list-item">1.セキュリティ
            当社は、お客様の個人情報を適切に保護するために、適切な安全対策を講じます。個人情報への不正アクセス、紛失、改ざん、漏洩等を防止するための措置を講じます。</li>
          <li class="privacy-policy__list-item">2.Cookieの使用
            当社は、お客様により良いサイトの利用体験を提供するために、Cookieを使用する場合があります。Cookieは、お客様が当社のサイトを訪れた際に、お客様のブラウザに保存される小さなデータファイルです。Cookieには個人情報は含まれません。
          </li>
          <li class="privacy-policy__list-item">3.お問い合わせ先 当社のプライバシーポリシーに関するご質問やご意見は、以下の連絡先までお問い合わせください。 [会社名] [住所]
            [電話番号] [メールアドレス]</li>
          <li class="privacy-policy__list-item">4.プライバシーポリシーの変更
            当社は、必要に応じて本プライバシーポリシーを変更することがあります。変更後のプライバシーポリシーは、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。
          </li>
        </ul>
      </div>
      <p class="privacy-policy__text-item">以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。</p>
    </div> -->
    </div>
</section>



<?php get_footer(); ?>