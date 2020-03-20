<article {!! post_class() !!}>
  <div class="container">
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
  </header>

  <div class="entry-content">
    <div class="row">
      <div class="col-md-4">
        @php the_post_thumbnail() @endphp
      </div>
      <div class="col-md-8">
        @php the_content() @endphp

        <section>
          <h2>Worked on</h2>
          @php $movies = get_posts(array(
                  'post_type' => 'movie',
                  'meta_query' => array(
                    array(
                      'key' => 'collaborators',
                      'value' => '"' . get_the_ID() . '"',
                      'compare' => 'LIKE'
                    )
                  )
                ))
                @endphp

                @if( $movies )
                  <ul>
                  @foreach( $movies as $movie )
                    <li>
                      <a href="<?php echo get_permalink( $movie->ID ); ?>">
                        {{ get_the_title( $movie->ID ) }}
                      </a>
                    </li>
                  @endforeach
                  </ul>
                @endif
      </section>
    </div>
  </div>
  </div>
</article>
