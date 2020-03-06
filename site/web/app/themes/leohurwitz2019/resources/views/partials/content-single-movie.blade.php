<article {!! post_class() !!}>
  <header class="movie-header">
    <div class="container">
      @php 
          $video_uri = get_field('film', FALSE, FALSE);
          $video_embed = get_field('film'); 
          @endphp
          @include('partials/video-player')
    </div>
  </header>
  
  <div class="entry-content"> 
    <section id="content">
      <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="entry-title">{!! get_the_title() !!}</h1>
        @if($data['subtitle'])<h4>{{ $data['subtitle'] }}</h4>@endif
      </div>
      <div class="col-md-6">
        {!! $data['description'] !!}
      </div>
      <div class="col-md-4 offset-md-2">
          <p>A film by @if($data['directed_by']){{ $data['directed_by'] }} @else Leo Hurwitz @endif</p>
          <h5>Year</h5>
          <p>@if($data['year_span']) {{ $data['year_span'] }} @else {{ $data['year'] }} @endif</p>
          <h5>Runtime</h5>
          <p>@if($data['length']) {{ $data['length'] }} minutes @else N/A @endif @if($data['surviving'])(surviving)@endif</p> 
          <h5>Format</h5>
          <p>{{ $data['format'] }}</p>
          @php $posts = $data['collaborators'] @endphp
          @if( $posts )
          <h5>Collaborators</h5>
          <ul class="key-people">
            @foreach( $posts as $p )
              <li>
                <a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
              </li>
	        @endforeach
	        </ul>
        @endif
        <div class="accordeon">
          <div class="accordeon-header"><span class="down">See</span><span class="up">Hide</span> Full Credits</div>
          <div class="accordeon-content">
            {!! $data['credits'] !!}
          </div>
        </div>
      </div>
      </div>
    </section>

        @include('partials.single-movie-media')

        @if($data['photos'])
          <section class="photo">
            <div class="container">
            <h2>Photos</h2>
            <div class="row">
              @foreach ($data['photos'] as $photo)
                <div class="col-md-4">
                  <img src="{{ $photo['url'] }}" />
                </div>
              @endforeach
            </div>
            </div>
          </section>
        @endif

      </div>

  </div>
</article>
