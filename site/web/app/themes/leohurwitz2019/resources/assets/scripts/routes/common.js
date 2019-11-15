export default {
  init() {
    // JavaScript to be fired on all pages

    // Hamburger menu
    $('.burger').click(function () {
      $('.sidebar').toggleClass('active');
    })

    //Accordeons
    $('.accordeon-header').click(function () {
      $(this).parent('.accordeon').toggleClass('active');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
