<article {!! post_class() !!}>
  @php $video_embed = get_field('film');  @endphp
  @if($video_embed)
    <header class="movie-header">
      <div class="container">
        <div class="movie-players">
        @php $video_uri = get_field('film', FALSE, FALSE); @endphp
        <div class="">
          @include('partials/video-player')
        </div>

        @php $video_uri = get_field('second_film', FALSE, FALSE);  @endphp
        @if($video_uri)
          <div class="hidden">
            @php $video_embed = get_field('second_film');  @endphp
            @include('partials/video-player')
          </div>

          <div class="selection">
                <a class="active" data-movie="1">
                    Part 1
                </a>
                <a class="" data-movie="2">
                    Part 2
                </a>
          </div>
        @endif

      </div>
    </header>
  @endif
  
  <div class="entry-content">

    <section id="content">
      <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="entry-title">{!! get_the_title() !!}</h1>
        @if($data['subtitle'])<h4>{{ $data['subtitle'] }}</h4>@endif
      </div>
      <div class="col-md-6">
        {!! the_content() !!}
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

        @if($data['credits'])
        <div class="accordeon">
          <div class="accordeon-header"><span class="down">See</span><span class="up">Hide</span> Full Credits</div>
          <div class="accordeon-content">
            {!! $data['credits'] !!}
          </div>
        </div>
      </div>
      @endif

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
  <footer class="film-footer">
    <div class="container">
    <div class="row">
      <div class="col-6 prev">
        @php next_post_link( '%link', '<i class="far fa-arrow-left"></i> %title' ) @endphp
      </div>
      <div class="col-6 next">
        @php previous_post_link( '%link', '%title <i class="far fa-arrow-right"></i>' ) @endphp
      </div>
    </div>
    </div>
  </footer>
</article>
