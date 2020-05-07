{{--
    Block Name: Carousel
    This is the template that displays the carousel block. 
--}}


<div class="wp-block-carousel">
    <div class="slides lightgallery">
    @foreach (get_field('photos') as $photo)
            <a href="{{ $photo['url'] }}" data-sub-html=".caption" class="slide photo">
              <img src="{{ $photo['sizes']['medium'] }}" alt="{{ $photo['alt'] }}" />
              <div class="caption">
                <figcaption>
                  <strong>{{ $photo['title'] }}</strong><br />{{ $photo['caption'] }}
                </figcaption>
              </div>
            </a>
    @endforeach
  </div>
              <div class="arrow prev">
                <img src="@asset('images/arrow.svg')" />
              </div>
              <div class="arrow next">
                <img src="@asset('images/arrow.svg')" />
              </div>
</div>

<script>
  console.log('Carousel Init');

  jQuery(document).ready(function( $ ) {
	
	 //Carousel
   $('.slides').slick({
            slidesToShow: 3,
            arrows: true,
            //centerPadding: '50px',
            prevArrow: '.prev',
            nextArrow: '.next',
            responsive: [
            {
                breakpoint: 768,
                settings: {
                  slidesToShow: 2,
                  centerPadding: '20px',
                },
            },
            {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                },
            },
            ],
        });
	
  });
</script>