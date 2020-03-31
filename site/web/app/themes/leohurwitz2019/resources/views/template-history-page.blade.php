{{--
  Template Name: History Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section id="historyHeader">
      <div class="container"> 
        <div class="page-header">
          <h1>{!! App::title() !!}</h1>
          <div class="history-menu">
            {!! wp_nav_menu(['theme_location' => 'history_pages', 'menu_class' => 'history-nav']) !!}
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container"> 
        @include('partials.content-page')
      </div>
    </section>
    
  @endwhile
@endsection

