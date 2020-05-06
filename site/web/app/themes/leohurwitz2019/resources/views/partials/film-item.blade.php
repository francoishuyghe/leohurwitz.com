@php $hasFilm = get_field('film'); 
    if(get_field('year_span')):
    $dateDisplay = get_field('year_span');
    else:
    $dateDisplay = get_field('year');
    endif;
@endphp

<div class="col-md-6 col-lg-4 movie @if($hasFilm) hasFilm @endif" data-name="{{ the_title() }}" data-year="{{ the_field('year') }}">
    <a href="{{ the_permalink() }}">
        @php $thumb = get_the_post_thumbnail_url() @endphp
        <div class="thumbnail" style="background-image: url(@if($thumb){{ $thumb }} @else @asset('images/film-default.png') @endif)"></div>
        <h4>{{ the_title() }}, {{ $dateDisplay }}</h3>
        <h5>{{ the_field('subtitle') }}</h4>
        @if($hasFilm)<div class="tag"><i class="fas fa-play"></i> Watch Now</div>@endif
    </a>
</div>