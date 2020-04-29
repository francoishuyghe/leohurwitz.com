@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.resources-header')

    @if($all_interviews->have_posts())
    <section>
      <div class="container">
      <div class="row movies-wrap">
    @while($all_interviews->have_posts()) @php($all_interviews->the_post())
      <div class="col-md-4 movie">
          <a href="{{ the_permalink() }}">
            <div class="thumbnail" style="background-image: url({{ get_the_post_thumbnail_url() }})"></div>
            <h4>{{ the_title() }}, @if(get_field('year_span')) {{ the_field('year_span') }} @else {{ the_field('year') }}@endif</h4>
            <div class="tag"><i class="fas fa-play"></i> Watch Now</div>
          </a>
        </div>
    @endwhile
      </div>
      </div>
    @php(wp_reset_postdata())
    @endif
  @endwhile
@endsection
