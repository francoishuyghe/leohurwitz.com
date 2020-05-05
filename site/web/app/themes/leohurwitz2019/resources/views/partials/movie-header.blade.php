@php $video_embed = get_field('film');  @endphp
  @if($video_embed)
    <header class="movie-header">
      <div class="container">
        @php $first_film = get_field('film', FALSE, FALSE); @endphp
        @php $second_film = get_field('second_film', FALSE, FALSE);  @endphp

        @include('partials/video-player')

        @if($second_film)
          <div class="selection">
                <a class="active" data-movie="1">
                    {{ $data['first_video_title'] }}
                </a>
                <a class="" data-movie="2">
                    {{ $data['second_video_title'] }}
                </a>
          </div>
        @endif

      </div>
    </header>
  @endif