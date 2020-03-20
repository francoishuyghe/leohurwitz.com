import 'lightgallery/dist/js/lightgallery-all';
import 'lightgallery/modules/lg-thumbnail';
import 'lightgallery/modules/lg-zoom';

export default {
  init() {
    // JavaScript to be fired on all pages

    // Hamburger menu
    $('.menu-toggle').click(function () {
      $(this).toggleClass('is-active');
      $('.banner').toggleClass('active');
    })

    //Accordeons
    $('.accordeon-header').click(function () {
      $(this).parent('.accordeon').toggleClass('active');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    //Light Gallery
    $('#lightgallery').lightGallery({
      thumbnail: true,
      share: false,
      getCaptionFromTitleOrAlt: false,
    }); 
  },
};
