<div class="single-news">
    @php $link = get_field('link') @endphp
    <h6>{{ the_date() }}</h3>
    @if($link) <a href="{{ $link }}" target="_blank"> @endif
    <h3>{{ the_title() }}</h3>
    @if($link) </a> @endif
    {{ the_content() }}
</div>