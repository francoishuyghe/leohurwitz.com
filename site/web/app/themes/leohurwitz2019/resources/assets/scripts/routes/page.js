export default {
    init() {
      // JavaScript to be fired on the home page
    console.log('JS init');
    
    let backToTop = $('.back-to-top');

    backToTop.click(function () { 
      $(window).scrollTop(0);
    });

    $(window).scroll(function () { 
      if ($(window).scrollTop() > 100) {
        backToTop.css('opacity', 1);
      } else { 
        backToTop.css('opacity', 0);
      }
    });
        
    },
    finalize() {
      // JavaScript to be fired on the home page, after the init JS
    },
  };