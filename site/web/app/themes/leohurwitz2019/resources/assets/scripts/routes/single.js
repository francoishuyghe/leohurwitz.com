export default {
    init() {
      // JavaScript to be fired on the home page
        console.log('JS init');
        
        //Carousel
        $('.slides').slick({
            centerMode: true,
            centerPadding: '25%',
            slidesToShow: 1,
            prevArrow: '.prevArrow',
            nextArrow: '.nextArrow',
            responsive: [
            {
                breakpoint: 768,
                settings: {
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
    
        // Video Player
        $('.video-btn').click(function () {
          $(this).parent('.video-wrap').addClass('active');
        });

        $('.video-player').click(function () {
          $(this).parent('.video-wrap').removeClass('active');
        });
        
    },
    finalize() {
      // JavaScript to be fired on the home page, after the init JS
    },
  };