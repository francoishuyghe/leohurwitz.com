<article {!! post_class() !!}>
  <header class="movie-header">
    @if( have_rows('media') )
      <div class="container">
        @while ( have_rows('media') ) @php the_row() @endphp
          @php 
          $video_uri = get_sub_field('video', FALSE, FALSE);
          $video_embed = get_sub_field('video'); 
          @endphp
          @include('partials/video-player')
        @endwhile
      </div>
    </section>
    @endif
  </header>
  
  <div class="entry-content">
    <section id="content">
      <div class="container">
        <div class="row">
        <div class="col-12">
          <h1 class="entry-title">{!! get_the_title() !!}</h1>
          @if($data['subtitle'])<h4>{{ $data['subtitle'] }}</h4>@endif
        </div>
        <div class="col-md-6">
          {!! $data['description'] !!}
        </div>
        <div class="col-md-3 offset-md-1">
          <p>A film by @if($data['directed_by']){{ $data['directed_by'] }} @else Leo Hurwitz @endif</p>
          <h5>Year</h5>
          <p>@if($data['year_span']) {{ $data['year_span'] }} @else {{ $data['year'] }} @endif</p>
          <h5>Runtime</h5>
          <p>@if($data['length']) {{ $data['length'] }} minutes @else N/A @endif @if($data['surviving'])(surviving)@endif</p> 
          <h5>Format</h5>
          <p>{{ $data['format'] }}</p>
          @php $posts = $data['collaborators'] @endphp
          @if( $posts )
          <h5>Key People</h5>
          <ul>
            @foreach( $posts as $p )
              <li>
                <a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
              </li>
	        @endforeach
	        </ul>
        @endif
        <div class="accordeon">
          <div class="accordeon-header">See Full Credits</div>
          <div class="accordeon-content">
            {!! $data['credits'] !!}
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>

    @if( get_the_content())
        <section class="full-transcript">
          <div class="container">
            <h2>Full Transcript</h2>
            <main>
            {!! the_content() !!}
            </main>
          </div>
        </section>
      @endif

        @if($data['photos'])
          <section class="photo">
            <h2>Photos</h2>
            <div class="row">
              @foreach ($data['photos'] as $photo)
                <div class="col-md-4">
                  <img src="{{ $photo['url'] }}" />
                </div>
              @endforeach
            </div>
          </section>
        @endif

      </div>

  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
