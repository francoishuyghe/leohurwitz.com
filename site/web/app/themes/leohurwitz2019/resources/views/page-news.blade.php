@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container">
    <div class="page-header">
            <h1>{!! App::title() !!}</h1>
    </div>      

    @if($posts->have_posts())
    <section>
      <div class="news-wrap">
      @while($posts->have_posts()) @php $posts->the_post() @endphp
        @include('partials.single-news')
      @endwhile
      </div>
    </section>
    @php(wp_reset_postdata())
    @endif
    </div>
  @endwhile
@endsection
