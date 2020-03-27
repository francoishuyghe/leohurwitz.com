
    @if($all_materials->have_posts())
    <section id="allMaterials">
        <div class="row">
        @while($all_materials->have_posts()) @php $all_materials->the_post() @endphp
            @php $cats = wp_get_post_terms(get_the_ID(), 'category');@endphp

            <div class="col-md-4">
                <a class="btn" target="_blank" href="{{ the_permalink() }}">
                    <h2>{{ the_title() }}</h2>
                    @foreach($cats as $cat)
                        <span class="cat">{{ $cat->name }}</span>
                    @endforeach
                </a>
            </div>
        @endwhile
        </div>
    </section>
    @endif