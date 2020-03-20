@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container"> 
      @include('partials.page-header')

      @if($data['photos'])
      <section >
        <div class="row" id="lightgallery">
        @foreach ($data['photos'] as $photo)
            <a href="{{ $photo['url'] }}" class="col-md-4 photo">
              <img src="{{ $photo['sizes']['medium'] }}" data-sub-html="{{ $photo['title'] }}" alt="{{ $photo['alt'] }}" />
              <figcaption>{{ $photo['title'] }}</figcaption>
            </a>
        @endforeach
      </div>
      </section>
      @endif

    </div>
  @endwhile
@endsection
