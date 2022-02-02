'use strict';
// ハンバーガーメニューのクラス付加・削除
// コンテンツ以外を選択した際にメニューを非表示にする
  const nav = document.querySelector(".nav");
  document.addEventListener("click",(e) => {
    if(e.target.closest(".nav_toggle")) {
      nav.classList.contains("show") ? nav.classList.remove("show") : nav.classList.add("show");
    } else {
      nav.classList.remove("show");
    }
  });

  const nav_toggle = document.querySelector(".nav_toggle");
  document.addEventListener("click",(e) => {
    if(e.target.closest(".nav_toggle")) {
      nav_toggle.classList.contains("show") ? nav_toggle.classList.remove("show") : nav_toggle.classList.add("show");
    } else {
      nav_toggle.classList.remove("show");
    }
  });
  // メニュー表示のコンテンツを選択した場合、メニューを非表示にする
  $('a').on('click',function(){
    $('.nav_toggle').trigger('click');
  });

// ヘッダーのスクロールスピード・位置調整
  jQuery(function(){
    var windowWidth = $(window).width();
    var headerHight = 40; 
    jQuery('a[href^="#"]').click(function() {
    var speed = 500;
    var href= jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top-headerHight;
    jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
   });
});
