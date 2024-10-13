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
  var slide1 = new Swiper("#slide1", {
  
      loop: true, // ループ有効
      speed: 6000, // ループの時間
      slidesPerView: "auto",
      spaceBetween: 30,
      autoplay: {
        delay: 0, // 途切れなくループ
      },
      // ナビボタンが必要なら追加
      navigation: {
        nextEl: ".p-blog__button-next",
        prevEl: ".p-blog__button-prev"
      }
  });

  // メインビュー 本がめくれるような動き
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


    // mvより下にスクロールするとheederにbox-shadowが付与される
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
        top: footerTop - 80 + 'px', // フッターの手前にボタンを表示する
        bottom: 'auto' // bottomの指定を無効にする
      });
    } else {
      $('.c-page-top').css({
        position: 'fixed',
        bottom: '30px',
        top: 'auto' // topの指定を無効にする
      });
    }
    console.log('フッターの高さ: ', $('#footer').outerHeight());
}
  $(window).scroll(function () {
    PageTopAnime();
  });
  $('.c-page-top').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });


  // 初期表示のためにロード時にも実行
  $(document).ready(function () {
    PageTopAnime();
  });
