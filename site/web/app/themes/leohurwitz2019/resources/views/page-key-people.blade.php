@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

    @if($all_key_people->have_posts())
    <section>
      <div class="container">
      <div class="row">
        @while($all_key_people->have_posts()) @php($all_key_people->the_post())
          <div class="person col-md-3 text-center">
            <div class="thumbnail" style="background-image: url('{{ the_post_thumbnail_url() }}');"></div>
            <a href="{{ the_permalink() }}">{{ the_title() }}</a></li>
          </div>
        @endwhile
      </div>
      </div>
    </section>
    @endif
    @php(wp_reset_postdata())

  @endwhile
@endsection
