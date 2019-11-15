@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container">
    @include('partials.page-header')

    @if($all_movies->have_posts())
    <section>
      <div class="row">
      @while($all_movies->have_posts()) @php $all_movies->the_post() @endphp
      @php $hasFilm = get_field('film'); @endphp
      <div class="col-md-4 movie @if($hasFilm) hasFilm @endif">
        <a href="{{ the_permalink() }}">
          <div class="thumbnail" style="background-image: url({{ get_the_post_thumbnail_url() }})">
              <h6>@if(get_field('year_span')) {{ the_field('year_span') }} @else {{ the_field('year') }}@endif</h6>
          </div>
          <h3>{{ the_title() }}</h3>
          <h4>{{ the_field('subtitle') }}</h4>
          @if($hasFilm)<div class="tag">Film</div>@endif
        </a>
      </div>
      @endwhile
      </div>
    </section>
    @php(wp_reset_postdata())
    @endif
    </div>
  @endwhile
@endsection
