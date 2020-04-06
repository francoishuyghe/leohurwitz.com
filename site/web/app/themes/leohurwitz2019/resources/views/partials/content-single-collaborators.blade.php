<article {!! post_class() !!}>
  <div class="container">
  <header>
    <a href="/collaborators"><i class="far fa-arrow-left"></i> Back to all collaborators</a>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
  </header>

  <div class="entry-content">
    <div class="row">
      <div class="col-md-4">
        @php the_post_thumbnail() @endphp
      </div>
      <div class="col-md-8">
        @php the_content() @endphp

      @if($movies->have_posts())
      <section id="workedOn">
        <h2>Worked on</h2>
        <div class="row movies-wrap">
          @while($movies->have_posts()) @php $movies->the_post() @endphp
            @include('partials.film-item')
          @endwhile
        </div>
      </section>
      @php(wp_reset_postdata())
      
      @endif
    </div>
  </div>
  </div>
</article>
