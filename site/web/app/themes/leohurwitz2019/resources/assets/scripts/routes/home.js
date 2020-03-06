export default {
  init() {
    // JavaScript to be fired on the home page

    $(window).scroll(function () { 
      var scroll = $(window).scrollTop();
      if (scroll > 100) {
        $('.banner').addClass('scrolled');
      } else { 
        $('.banner').removeClass('scrolled');
      }
    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
