jQuery(document).ready(function ($) {
  $('.hamburger-wrapper').on('click', function () {
    $('.hamburger-menu').toggleClass('animate');
    $('.mobile-menu-overlay').toggleClass('visible');
    $('.sub-menu').addClass('hidden');
  });
  $('.mobile-menu-overlay > ul > li > a').on('click', function () {
    $('.hamburger-menu').removeClass('animate');
    $('.sub-menu').addClass('hidden');
    $('.menu').addClass('visible');
    $('.mobile-menu-overlay').removeClass('visible');
  });
});
