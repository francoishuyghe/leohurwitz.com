import Vimeo from '@vimeo/player/dist/player'

export default {
    init() {
      // JavaScript to be fired on the home page
        console.log('JS init');
        
        //Carousel
        $('.slides').slick({
            slidesToShow: 3,
            prevArrow: '.prevArrow',
            nextArrow: '.nextArrow',
            responsive: [
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 1,
                centerPadding: '20px',
                },
            },
            {
                breakpoint: 480,
              settings: {
                centerMode: false,
                centerPadding: '20px',
                },
            },
            ],
        });
    
    //Vimeo Init
    var iframe = document.querySelector('iframe');
    var player = new Vimeo(iframe);
    
        // Video Player
    $('.video-btn').click(function () {
      $(this).parent('.video-player').addClass('active');
      player.play();
    });

        $('.video-player').click(function () {
          $(this).parent('.video-player').removeClass('active');
        });
        
    },
    finalize() {
      // JavaScript to be fired on the home page, after the init JS
    },
  };