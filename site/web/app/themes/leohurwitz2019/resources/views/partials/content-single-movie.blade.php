<article {!! post_class() !!}>
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @if($data['subtitle'])<h4>{{ $data['subtitle'] }}</h4>@endif
  </header>
  <div class="entry-content">

    <section id="media">
      <h2>Media</h2>

      <div class="row">
      @if( have_rows('media') )
      @while ( have_rows('media') ) @php the_row() @endphp

        @if( get_row_layout() == 'video' )
        <div class="col-md-4 media-item video">
          <div class="embed-container">
              @php the_sub_field('video') @endphp
          </div>
        </div>
        
        @elseif( get_row_layout() == 'image' )

          @php $image = get_sub_field('image') @endphp
          @if( !empty($image) )
          <div class="col-md-4 media-item image">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </div>
          @endif

        @elseif( get_row_layout() == 'text' )
          <div class="col-md-4 media-item text">
            {!! the_sub_field('text') !!}
          </div>

        @endif

    @endwhile
    </div>
    @else

    @endif
    </section>

    <section class="row">
      <div class="col-md-4">
          <h2>Details</h2>
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
      </div>

      <div class="col-md-8">
        <h2>Synopsis</h2>
        {!! $data['description'] !!}
        
        <h2>Credits</h2>
        {!! $data['credits'] !!}
      </div>
    </section>

  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
