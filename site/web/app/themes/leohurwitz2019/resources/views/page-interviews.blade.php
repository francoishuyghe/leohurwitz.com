@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

    @if($all_interviews->have_posts())
    <section>
      <ul>
    @while($all_interviews->have_posts()) @php($all_interviews->the_post())
      <li><a href="{{ the_permalink() }}">@if(get_field('year_span')) {{ the_field('year_span') }} @else {{ the_field('year') }}@endif - {{ the_title() }} {{ the_field('subtitle') }}</a></li>
    @endwhile
    @php(wp_reset_postdata())
    @endif

  @endwhile
@endsection
