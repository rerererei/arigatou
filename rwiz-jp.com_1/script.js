$(function () {

  // ---------------------------------
  // ハンバーガー　ドロワー
  // ----------------------------------
  $('.drawer-icon').click(function (e) {
    e.preventDefault();
    // alert("test!");
    $('.drawer-content').fadeToggle(300);
    $('.drawer-icon').toggleClass('is-active');
    return false;
  });

  $('.drawer-content-item').click(function (e) {
    $('.drawer-content').fadeToggle(300);
    $('.drawer-icon').toggleClass('is-active');
  });
  


// ---------------------------------
// スムーススクロール
// ----------------------------------

jQuery('a[href^="#"]').click(function () {
  let speed = 400;
  let id = jQuery(this).attr("href");
  let target = jQuery("#" == id ? "html" : id);
  let position = jQuery(target).offset().top;
  
  jQuery("html, body").animate(
    {
      scrollTop: position
    },
    speed
  );
  return false;
});

  new WOW().init();
  
});
