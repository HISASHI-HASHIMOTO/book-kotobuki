<?php get_header(); ?>

<!-- メインビュー -->
<div class="p-page-news__mv c-sub-mv">
  <div class="c-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img02@2x.webp"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sub-img02@2x.webp" alt="メニューページ" width="1920"
        height="1280" />
    </picture>
  </div>
  <h2 class="c-sub-mv__title">メニュー</h2>
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

<!-- p-page-menu -->
<div class="p-page-menu l-sub-page fish-icon">
  <div class="p-page-menu__inner l-inner">
    <!-- タブ -->
    <div class="p-page-menu__tab p-menu-tab">
      <!-- タブボタン -->
      <div class="p-menu-tab__button-list">
        <button id="tab1" class="p-menu-tab__button js-tab-button is-active">
          <p class="p-menu-tab__text">
            カフェ<br class="u-mobile" />メニュー
          </p>
        </button>
        <button id="tab2" class="p-menu-tab__button js-tab-button">
          <p class="p-menu-tab__text">
            ブック<br class="u-mobile" />メニュー
          </p>
        </button>
        <button id="tab3" class="p-menu-tab__button js-tab-button">
          <p class="p-menu-tab__text">
            ブック<br class="u-mobile" />クラブ
          </p>
        </button>
      </div>
      <!-- タブコンテンツ -->
      <ul class="p-menu-tab__items">
        <li class="p-menu-tab__item js-tab-content is-active">
          <div class="p-page-menu__card c-menu-card">
            <div class="c-menu-card__body">
              <h2 class="c-menu-card__title c-menu-card__title--cafe">ドリンクメニュー</h2>
              <p class="c-menu-card__text">
                書をより楽しめるよう工夫されたバラエティ豊かなラインナップが魅力です。<br>コーヒーや紅茶はもちろん、季節限定の特製ドリンクやハーブティー、リラックス効果のあるラテなど、お好みに合わせてお選びいただけます。<br>
                本のジャンルや気分に合わせたペアリングも提案し、より充実した読書体験を提供します。心地よい空間で、お好きなドリンクを片手にゆったりとしたひとときをお過ごしください。
              </p>
            </div>
            <div class="c-menu-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/menu-img01@2x.jpg" alt="ドリンクメニュー" width="640"
                height="426" />
            </div>
          </div>
          <div class="p-page-menu__card c-menu-card c-menu-card--reverse">
            <div class="c-menu-card__body">
              <h2 class="c-menu-card__title c-menu-card__title--cafe">食事メニュー</h2>
              <p class="c-menu-card__text">
                読書を楽しみながら手軽に食べられる軽食から、しっかり満足できる食事まで豊富に揃えています。<br>
                サンドイッチやパニーニ、サラダなどの軽食はもちろん、スープやパスタなど季節に応じたメニューもご用意。読書の合間にリラックスできるデザートや焼き菓子も充実しています。<br>
                全てのメニューは、新鮮な食材を使用し、心地よいカフェタイムを提供します。本と一緒に美味しい食事をお楽しみください。
              </p>
            </div>
            <div class="c-menu-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/menu-img02@2x.jpg" alt="食事メニュー" width="640"
                height="435" />
            </div>
          </div>
        </li>
        <li class="p-menu-tab__item js-tab-content">
          <div class="p-page-menu__card c-menu-card">
            <div class="c-menu-card__body">
              <h2 class="c-menu-card__title c-menu-card__title--book">本とドリンクのペアリング</h2>
              <p class="c-menu-card__text">
                「本とドリンクのペアリング」は、選んだ本のテーマや雰囲気にぴったりのドリンクをお勧めするサービスです。例えば、リラックスしたい時にはハーブティーと自己啓発書、ミステリー小説には濃いめのエスプレッソなど、読書体験をさらに豊かにするドリンクの組み合わせを提案します。特別な一冊を味わいながら、心地よい時間を過ごすためのユニークなサービスです。
              </p>
            </div>
            <div class="c-menu-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/menu-img03@2x.jpg" alt="本とドリンクのペアリング"
                width="960" height="641" />
            </div>
          </div>
          <div class="p-page-menu__card c-menu-card c-menu-card--reverse">
            <div class="c-menu-card__body">
              <h2 class="c-menu-card__title c-menu-card__title--book">おすすめ本の選書サービス</h2>
              <p class="c-menu-card__text">
                「おすすめ本の選書サービス」は、お客様の好みやその日の気分に合わせて、スタッフが最適な本を選んでご紹介するサービスです。ジャンルやテーマ、読書経験に基づいて、本のプロがパーソナライズされた選書を行い、新しい本との出会いをサポートします。新しいジャンルを開拓したい方や、次に読む本に迷っている方に最適なサービスで、読書体験をより充実させます。
              </p>
            </div>
            <div class="c-menu-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/menu-img04@2x.jpg" alt="おすすめ選書サービス"
                width="960" height="640" />
            </div>
          </div>
          <div class="p-page-menu__card c-menu-card">
            <div class="c-menu-card__body">
              <h2 class="c-menu-card__title c-menu-card__title--book">古本の販売＆寄付</h2>

              <p class="c-menu-card__text">
                ブックカフェでは、読み終えた本を寄付できる「古本寄付」サービスを提供しています。
                <br>お客様から寄付された本は、カフェ内でリーズナブルな価格で販売され、その収益の一部を慈善活動に寄付します。不要になった本を寄付することで、本が新しい読者に渡り、持続可能な読書文化の推進に貢献できます。<br>お客様同士のつながりを感じられるサービスで、気軽に読書を楽しむきっかけとなる素敵な仕組みです。
              </p>
            </div>
            <div class="c-menu-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/menu-img05@2x.jpg" alt="古本の販売・寄付" width="960"
                height="640" />
            </div>
          </div>
        </li>
        <li class="p-menu-tab__item js-tab-content">
          <div class="p-page-menu__card c-menu-card">
            <div class="c-menu-card__body">
              <h2 class="c-menu-card__title c-menu-card__title--book-club">ブッククラブ</h2>
              <p class="c-menu-card__text">
                月額または1日料金を支払うことで、カフェ内のすべての本を自由に読むことができるサービスです。<br>
                購入の必要がなく、さまざまなジャンルの本を好きなだけ楽しめます。ドリンクを片手に、落ち着いた空間で読書に没頭できるため、リラックスした時間を過ごせます。<br>
                新しい本も定期的に追加されるので、常に新しい発見があります。忙しい日常の中でゆっくりと読書を楽しみたい方にぴったりです。
              </p>
            </div>
            <div class="c-menu-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/menu-img06@2x.jpg" alt="ブッククラブ" width="640"
                height="960" />
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>


<?php get_footer(); ?>