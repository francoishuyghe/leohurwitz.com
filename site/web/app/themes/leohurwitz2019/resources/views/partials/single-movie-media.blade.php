@if( have_rows('media') )
    <section id="media">
        <h2>Extras</h2>
      <div class="slides"> 
        @while ( have_rows('media') ) @php the_row() @endphp
          <div class="slide media-item video">
                <div class="embed-container">
                    @php the_sub_field('video') @endphp
                </div>
          </div>
        @endwhile
      </div>
    </section>
@endif