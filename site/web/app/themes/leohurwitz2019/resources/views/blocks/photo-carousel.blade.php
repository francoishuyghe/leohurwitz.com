{{--
    Block Name: Carousel
    This is the template that displays the carousel block. 
--}}


<div class="wp-block-carousel">
    <div class="row">
    @foreach (get_field('photos') as $photo)
            <a href="{{ $photo['url'] }}" class="col-md-4 photo">
              <img src="{{ $photo['sizes']['medium'] }}" data-sub-html="{{ $photo['title'] }}" alt="{{ $photo['alt'] }}" />
              <figcaption>{{ $photo['title'] }}</figcaption>
              <figcaption>{{ $photo['caption'] }}</figcaption>
            </a>
    @endforeach
    </div>
</div>