@foreach ($all_materials[0] as $cat)
    @if($cat->slug)
    <section id="allMaterials">
        <div class="container">
        <h3>{{ $cat->name }}</h3>
        <ul>
        @while($all_materials[1][$cat->slug]->have_posts()) @php $all_materials[1][$cat->slug]->the_post() @endphp
            <li class="accordeon">
                <h4 class="accordeon-header">{{ the_title() }}</h4>
                <div class="accordeon-content">
                    {!! the_content() !!}
                </div>
                </a>
            </li>
        @endwhile
        </ul>
        </div>
    </section>
    @endif
@endforeach