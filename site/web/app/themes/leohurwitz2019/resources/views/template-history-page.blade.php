{{--
  Template Name: History Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section id="submenuHeader">
      <div class="container"> 
        {!! wp_nav_menu(['theme_location' => 'history-menu', 'menu_class' => 'history-menu']) !!}
          <h1>{!! App::title() !!}</h1>
      </div>
    </section>
    <section>
      <div class="container"> 
        @include('partials.content-page')
      </div>
    </section>
    
  @endwhile
@endsection

