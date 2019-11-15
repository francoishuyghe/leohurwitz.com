@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container">
    @include('partials.page-header')

    @if($all_key_people->have_posts())
    <section>
      <div class="row">
        @while($all_key_people->have_posts()) @php($all_key_people->the_post())
        <div class="person col-md-3 text-center">
          <a href="{{ the_permalink() }}">
            <div class="thumbnail" style="background-image: url('{{ the_post_thumbnail_url() }}');"></div>
            <h4>{{ the_title() }}</h4>
          </a>
        </div>
        @endwhile
      </div>
    </section>
    @endif
    
    @php(wp_reset_postdata())
    
  </div>
  @endwhile
@endsection
