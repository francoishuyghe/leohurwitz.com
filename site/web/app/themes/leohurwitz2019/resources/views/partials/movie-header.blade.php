@php $video_embed = get_field('film');  @endphp
  @if($video_embed)
    <header class="movie-header">
      <div class="container">
        <div class="movie-players">
        @php $video_uri = get_field('film', FALSE, FALSE); @endphp
        <div class="">
          @include('partials/video-player')
        </div>

        @php $video_uri = get_field('second_film', FALSE, FALSE);  @endphp
        @if($video_uri)
          <div class="hidden">
            @php $video_embed = get_field('second_film');  @endphp
            @include('partials/video-player')
          </div>
        </div>

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