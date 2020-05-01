<article {!! post_class() !!}>
  
  @include('partials.movie-header')
  
  <div class="entry-content">
    <section id="content">
      <div class="container">
        <div class="row">
        <div class="col-12">
          <h1 class="entry-title">{!! get_the_title() !!}</h1>
          @if($data['subtitle'])<h4>{{ $data['subtitle'] }}</h4>@endif
        </div>
        <div class="col-md-6">
          {!! the_content() !!}
        </div>
        <div class="col-md-3 offset-md-1">
          <p>
            @if($data['directed_by']){{ $data['directed_by'] }} @else Leo Hurwitz @endif
          </p>
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

    @include('partials.single-movie-media')

    @if($data['full_transcript'])
        <section class="full-transcript">
          <div class="container">
            <main>
            @foreach ($data['full_transcript'] as $section)
                <div class="row section">
                  <div class="col-6 accordeon">
                      <h3>{{ $section['section_title'] }}</h3>
                      <div class="accordeon-header">
                      <span class="up">Read</span><span class="down">Hide</span> the full transcript
                    </div>
                    <div class="accordeon-content">
                      {!! $section['section_body'] !!}
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="embed-container">
                    {!! $section['section_video'] !!}
                    </div>
                  </div>
                </div>
            @endforeach
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
</article>
