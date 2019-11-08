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
        
    },
    finalize() {
      // JavaScript to be fired on the home page, after the init JS
    },
  };