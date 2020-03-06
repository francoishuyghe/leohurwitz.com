@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container"> 
      @include('partials.page-header')
      @if($data['photos'])
      <section>
        <div class="row">
        @foreach ($data['photos'] as $photo)
          <div class="col-md-4">
            <img src="{{ $photo['sizes']['medium'] }}" alt="{{ $photo['alt'] }}" />
            <figcaption>{{ $photo['caption'] }}</figcaption>
          </div>
        @endforeach
      </div>
      </section>
      @endif
    </div>
  @endwhile
@endsection
