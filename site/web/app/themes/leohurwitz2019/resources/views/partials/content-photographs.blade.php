@if($data['photos'])
      <section id="photoGallery" class="lightgallery">
        <div class="container"> 
        <div class="row gallery">
        @foreach ($data['photos'] as $photo)
            <a href="{{ $photo['url'] }}" class="col-md-4 photo" data-sub-html=".caption">
              <img src="{{ $photo['sizes']['medium'] }}" alt="{{ $photo['alt'] }}" />
              <div class="caption">
                <figcaption>
                  <strong>{{ $photo['title'] }}</strong><br />{{ $photo['caption'] }}
                </figcaption>
              </div>
            </a>
        @endforeach
      </div>
    </div>
    <div class="back-to-top">
      <img src="@asset("images/arrow.svg")" />
    </div>
      </section>
      @endif