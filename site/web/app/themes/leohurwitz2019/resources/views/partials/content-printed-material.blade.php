@foreach ($all_materials[0] as $cat)
    @if($cat->slug)
    <section id="allMaterials">
        <div class="container">
        <h3>{{ $cat->name }}</h3>
        <ul>
        @while($all_materials[1][$cat->slug]->have_posts()) @php $all_materials[1][$cat->slug]->the_post() @endphp
            <li class="accordeon">
                <h4 class="accordeon-header"><span class="up"><i class="fal fa-angle-up"></i></span><span class="down"><i class="fal fa-angle-down"></i></span>{{ the_title() }}</h4>
                <div class="accordeon-content">
                    @php 
                        $content = str_replace('<div class="wp-block-file">', '<div class="wp-block-file"><i class="fal fa-file"></i>', get_the_content());
                    @endphp
                    {!! $content !!}
                </div>
                </a>
            </li>
        @endwhile
        </ul>
        </div>
    </section>
    @endif
@endforeach