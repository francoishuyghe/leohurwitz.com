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
        @include('partials.film-item')
      @endwhile
      </div>
    </section>
    @php(wp_reset_postdata())
    @endif
    </div>
  @endwhile
@endsection
