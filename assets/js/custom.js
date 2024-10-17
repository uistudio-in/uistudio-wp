jQuery(document).ready(function ($) {
  // Sticky header
  $(window).scroll(function () {
    var sticky = $(".ui-header"),
      scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass("fixed-navbar");
    else sticky.removeClass("fixed-navbar");
  });

  // Burger menu
  // var btn = $('.burger-menu');

  // btn.on('click', function() {
  //   $(this).toggleClass('active');
  //   $(this).toggleClass('not-active');

  //   $("html").toggleClass("overflow");
  //   $("body").toggleClass("overflow");
  //   $(".mobile-menu-notification").toggleClass("active");
  // });

  // Mobile sub menu
  // $(".mobile-menu-list .menu-item-has-children a").click(function () {
  //   $(this).toggleClass("active")
  //   $(".mobile-menu-list .menu-item-has-children .sub-menu").toggleClass("active")
  // })

  // AOS
  AOS.init();
});