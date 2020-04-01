@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container">
    <div class="page-header">
            <h1>{!! App::title() !!}</h1>
            <span class="sort-options">
              Sort By: 
              <a data-sort="" class="active">Featured</a>
              <a data-sort="date">Date</a>
              <a data-sort="name">Name</a>
              </span>
    </div>      

    @if($all_movies->have_posts())
    <section>
      <div class="row movies-wrap">
      @while($all_movies->have_posts()) @php $all_movies->the_post() @endphp
      @php $hasFilm = get_field('film'); 
        if(get_field('year_span')):
          $dateDisplay = get_field('year_span');
        else:
          $dateDisplay = get_field('year');
        endif;
      @endphp
      <div class="col-md-4 movie @if($hasFilm) hasFilm @endif" data-name="{{ the_title() }}" data-year="{{ the_field('year') }}">
        <a href="{{ the_permalink() }}">
          @php $thumb = get_the_post_thumbnail_url() @endphp
          <div class="thumbnail" style="background-image: url(@if($thumb){{ $thumb }} @else @asset('images/film-default.png') @endif)"></div>
          <h4>{{ the_title() }}, {{ $dateDisplay }}</h3>
          <h5>{{ the_field('subtitle') }}</h4>
          @if($hasFilm)<div class="tag"><i class="fas fa-play"></i> Watch Now</div>@endif
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
