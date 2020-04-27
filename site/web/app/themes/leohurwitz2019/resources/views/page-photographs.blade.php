@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
      @include('partials.resources-header')
      @include('partials.content-photographs')
  @endwhile
@endsection
