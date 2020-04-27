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
      </section>
      @endif
      
      @if($data['documents'])
      <section id="documentsGallery" class="lightgallery">
        <h2> {{ $data['documents_title'] }}</h2>
        <div class="container"> 
        <div class="row gallery">
        @foreach ($data['documents'] as $photo)
            <a href="{{ $photo['url'] }}" data-sub-html=".caption" class="col-md-4 photo">
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
      </section>
      @endif