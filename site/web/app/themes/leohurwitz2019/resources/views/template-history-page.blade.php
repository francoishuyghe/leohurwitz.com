{{--
  Template Name: History Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section id="historyHeader">
      <div class="container"> 
          <h1>{!! App::title() !!}</h1>
          {!! wp_nav_menu(['theme_location' => 'history-menu', 'menu_class' => 'history-menu']) !!}
      </div>
    </section>
    <section>
      <div class="container"> 
        @include('partials.content-page')
      </div>
    </section>
    
  @endwhile
@endsection

