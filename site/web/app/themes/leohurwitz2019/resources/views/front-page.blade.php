@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
      
        
          <div class="col-md-12"> 
            <div class="page-header">
              <h1>
                <svg viewBox="0 0 136 18">
                  <text x="0" y="16">{!! App::title() !!}</text>
                </svg>
              </h1>
            </div>            
          </div>
          <div class="container">
            <div class="row"> 
          <div class="col-md-12 photo"> 
            {!! the_post_thumbnail('large') !!}
          </div>
          <div class="col-md-8"> 
            @include('partials.content-page')
          </div>
        </div>
      </div>

      <section id="bottomMenu">
        @foreach ($data['bottom_menu'] as $menu_item)
        <div class="menu-item">
            <div class="container"> 
          <div class="row">
            <div class="col-md-12">
            <a href="{{ $menu_item['link'] }}">
              <h2>{{ $menu_item['title'] }}</h2>
              <i class="fal fa-arrow-right"></i>
            </a>
            </div>
          <div class="col-md-6">
            {!! $menu_item['text'] !!}
          </div>
          <div class="col-md-5">
          <img src="{{ $menu_item['image']['url'] }}" />
          </div>
          </div>
        </div>
      </div>
        @endforeach
      </section>
  @endwhile
@endsection
