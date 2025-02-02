// ページトップボタン
var topBtn = $('.js-pagetop');
topBtn.hide();

// ページトップボタンの表示設定
$(window).scroll(function () {
  if ($(this).scrollTop() > 70) {
    // 指定px以上のスクロールでボタンを表示
    topBtn.fadeIn();
  } else {
    // 画面が指定pxより上ならボタンを非表示
    topBtn.fadeOut();
  }
});

// ページトップボタンをクリックしたらスクロールして上に戻る
topBtn.click(function () {
  $('body,html').animate({
    scrollTop: 0
  }, 300, 'swing');
  return false;
});

// スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動。ヘッダーの高さ考慮。)
$(document).on('click', 'a[href*="#"]', function () {
  let time = 400;
  let header = $('header').innerHeight();
  let target = $(this.hash);
  if (!target.length) return;
  let targetY = target.offset().top - header;
  $('html,body').animate({ scrollTop: targetY }, time, 'swing');
  return false;
});

//ナビバートグル
$('.js-hamburger').on('click', function () {
  if ($('.js-hamburger').hasClass('is-open')) {
    $('.js-drawer-menu').fadeOut();
    $(this).removeClass('is-open');
    $('html').css('overflow', ''); // スクロールを元に戻す
  } else {
    $('.js-drawer-menu').fadeIn();  
    $(this).addClass('is-open');
    $('html').css('overflow','hidden') // 背景スクロールを固定にする
  }
});


  // // スワイパー
  document.addEventListener("DOMContentLoaded", function() {
    var slide1 = new Swiper("#slide1", {
      loop: true,
      speed: 3000,
      slidesPerView: "auto",
      spaceBetween: 30,
      navigation: {
        nextEl: ".p-blog__button-next",
        prevEl: ".p-blog__button-prev"
      }
    });
  });
  

    // // スワイパー
    var slide2 = new Swiper("#slide2", {
      loop: true, // ループ有効
      speed: 6000, // ループの時間
      slidesPerView: "auto",
      spaceBetween: 30,
      autoplay: {
        delay: 0, // 途切れなくループ
      },
  });

  // // // メインビュー 本がめくれるような動き
  let currentPage = 0;
  const pages = document.querySelectorAll('.p-mv input');
  function flipPage() {
    // 現在のページをチェック
    if (currentPage < pages.length) {
      pages[currentPage].checked = true;
      currentPage++;
    } else {
      // 最後のページに到達したら最初に戻る
      currentPage = 0;
      pages.forEach(page => page.checked = false);
    }
  }
  // 3秒ごとにページを自動でめくる
  setInterval(flipPage, 5000);


    // mvより下にスクロールするとheaderに背景色が付与される
    $(window).on('scroll', function () {
      if ($('.p-mv,.c-sub-mv').height() < $(this).scrollTop()) {
          $('.p-header').addClass('change-color');
    } else {
          $('.p-header').removeClass('change-color');
    }
  });
  // console.log(window);

  // ページトップボタン
  function PageTopAnime() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
      $('.c-page-top').removeClass('DownMove');
      $('.c-page-top').addClass('UpMove');
    } else {
      if ($('.c-page-top').hasClass('UpMove')) {
        $('.c-page-top').removeClass('UpMove');
        $('.c-page-top').addClass('DownMove');
      }
    }
    var wH = window.innerHeight;
    var footerPos = $('#footer').offset().top;
    if (scroll + wH >= footerPos + 10) {
      var pos = scroll + wH - footerPos + 10;
      $('.c-page-top').css('bottom', pos);
    } else {
      if ($('.c-page-top').hasClass('UpMove')) {
        $('.c-page-top').css('bottom', '10px');
      }
    }
  }

  // ページトップボタン
  function PageTopAnime() {
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    var footerHeight = $('#footer').outerHeight();
    var documentHeight = $(document).height();
    var footerTop = documentHeight - footerHeight;
    if (scroll > 100) {
      $('.c-page-top').fadeIn();
    } else {
      $('.c-page-top').fadeOut();
    }

    // フッターに重ならないように位置を調整
    if (scroll + windowHeight > footerTop) {
      $('.c-page-top').css({
        position: 'absolute',
        top: footerTop - 100 + 'px', // フッターの手前にボタンを表示する
        bottom: 'auto' // bottomの指定を無効にする
      });
      

    } else {
      $('.c-page-top').css({
        position: 'fixed',
        bottom: '40px',
        top: 'auto' // topの指定を無効にする
      });
    }
}
  $(window).scroll(function () {
    PageTopAnime();
  });
  $('.c-page-top').click(function () {
    $('body,html').animate({
      scrollTop: 60
    }, 500);
    return false;
  });

  // 初期表示のためにロード時にも実行
  $(document).ready(function () {
    PageTopAnime();
  });
  // スマホ判定関数（画面幅で判定）
function isMobile() {
  return window.innerWidth <= 768; // スマホ表示を768px以下と定義
}

// 初期化とスクロールイベント登録
$(document).ready(function () {
  if (isMobile()) {
      PageTopAnime(); // 初期化
      $(window).on('scroll touchmove', PageTopAnime); // スクロールとタッチスクロールに対応
  } else {
      $('.c-page-top').hide(); // スマホ以外ではボタンを非表示
  }
  console.log(document)
  // ウィンドウリサイズ時の挙動を更新
  $(window).resize(function () {
      if (isMobile()) {
          PageTopAnime();
          $(window).on('scroll touchmove', PageTopAnime);
      } else {
          $('.c-page-top').hide();
      }
  });
});




    // タブ
    $(function () {
      var tabButton = $(".js-tab-button"),
        tabContent = $(".js-tab-content");
      tabButton.on("click", function () {
        var index = tabButton.index(this);
        tabButton.removeClass("is-active");
        $(this).addClass("is-active");
        tabContent.removeClass("is-active");
        tabContent.eq(index).addClass("is-active");
      });
    });


  // 他のページから選択タブへページ遷移
  $(window).on('load', function () {
    // URLパラメータから値を取得
    var urlParams = new URLSearchParams(window.location.search);
    var tabParam = urlParams.get('id'); // ここでtabParamを定義
    var initialTab = "tab1"; // デフォルトのタブはtab1

    if (tabParam && $('#' + tabParam).length) {
      initialTab = tabParam; // URLのidに該当するタブが存在すればそのタブに設定
    }

    // 全てのタブを非アクティブ化
    $('.p-menu-tab__item').removeClass("is-active");
    $('.p-menu-tab__button').removeClass('is-active');

    // タブ番号を取得
    var tabno = $('.p-menu-tab__button#' + initialTab).index();

    // 対応するタブとボタンをアクティブ化
    $('.p-menu-tab__item').eq(tabno).addClass('is-active');
    $('.p-menu-tab__button').eq(tabno).addClass('is-active');
  });

    // // アコーディオン
    $(function () {
      // アコーディオンのタイトルがクリックされたときの動作
      $(".js-accordion-title").on("click", function () {
        // クリックされたアコーディオンが開いている場合は閉じ、閉じている場合は開く
        $(this).toggleClass("is-open");
        $(this).next().slideToggle(300);
      });
    });

    // トグル実装
  // アーカイブアコーディオン
  $(".c-archive__list-title.js-title").on("click", function () {
    // クリックされた年に関連する月のリストを探し、スライドトグルで表示・非表示を切り替える
    $(this).find(".js-items").slideToggle(200);
    $(this).toggleClass("open");
  });

    //scroll_effect
    $(window).scroll(function () {
      var scrollAnimationElm = document.querySelectorAll('.p-scroll');
      var scrollAnimationFunc = function () {
        for (var i = 0; i < scrollAnimationElm.length; i++) {
          var triggerMargin = 100;
          if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
            scrollAnimationElm[i].classList.add('on');
          }
        }
      }
      window.addEventListener('load', scrollAnimationFunc);
      window.addEventListener('scroll', scrollAnimationFunc);

    });
