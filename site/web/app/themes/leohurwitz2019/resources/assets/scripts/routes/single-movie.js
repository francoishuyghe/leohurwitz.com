export default {
  init() {

    // When the movie has two parts
    $('.selection a').click(function () { 
      $('.selection a').removeClass('active');
      $(this).addClass('active');

      $('.movie-players > *').addClass('hidden');
      $('.movie-players > div:nth-child(' + $(this).data('movie') + ')').removeClass('hidden');
    });
  },
};
