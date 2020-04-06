@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.resources-header')

    @if($all_collaborators->have_posts())
    <section>
      <div class="container">
      <div class="row">
        @while($all_collaborators->have_posts()) @php($all_collaborators->the_post())
        <div class="person col-md-3">
          <a href="{{ the_permalink() }}">
            <div class="thumbnail" style="background-image: url('{{ the_post_thumbnail_url() }}');"></div>
            <h4>{{ the_title() }}</h4>
          </a>
        </div>
        @endwhile
      </div>
    </div>
    </section>
    @endif
    @php(wp_reset_postdata())
  @endwhile
@endsection
