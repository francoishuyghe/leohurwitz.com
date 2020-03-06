@php
    //https://support.advancedcustomfields.com/forums/topic/youtube-thumbnail-object-with-oembed-field/

    // determine the video id
    $parse = parse_url( $video_uri );
    $clip_id = ltrim( $parse['path'],'/' );

    //return thumbnail uri
    $vimeo_api_uri = 'http://vimeo.com/api/v2/video/' . $clip_id . '.php';
    $vimeo_response = wp_remote_get( $vimeo_api_uri );
    if( is_wp_error( $vimeo_response ) ) {
    echo $vimeo_response;
    } else {
    $vimeo_response = unserialize( $vimeo_response['body'] );
    $vimeo_url = $vimeo_response[0]['thumbnail_large'];
    }
@endphp

<div class="video-player" style="background-image: url({{ $vimeo_url }})">
    <div class="video-btn"><i class="fas fa-play"></i></div>
    <div class="embed-container">
        {!! $video_embed !!}
    </div>
</div>