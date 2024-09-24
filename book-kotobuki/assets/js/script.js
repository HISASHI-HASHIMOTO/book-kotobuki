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


  // スワイパー
  var slide1 = new Swiper("#slide1", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000
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
      if ($('.p-mv').height() < $(this).scrollTop()) {
          $('.p-header').addClass('change-color');
    } else {
          $('.p-header').removeClass('change-color');
    }
  });
  // console.log(window);
