@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container">
    @include('partials.page-header')

    <section id="movie-menu">
      <select class="sort-options">
        <option value="date">Date</option>
        <option value="name">Name</option>
        <option value="">Featured</option>
      </select>
    </section>

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
      <div class="col-md-4 movie @if($hasFilm) hasFilm @endif" data-name="{{ the_title() }}" data-date="">
        <a href="{{ the_permalink() }}">
          <div class="thumbnail" style="background-image: url({{ get_the_post_thumbnail_url() }})">
            <h6>{{ $dateDisplay }}</h6>
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
