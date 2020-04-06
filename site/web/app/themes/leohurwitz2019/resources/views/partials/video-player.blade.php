@php
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

    if($vimeo_url) {
        $thumbnail = $vimeo_url;
    } else {
        $thumbnail = get_the_post_thumbnail_url($post->ID, 'medium');
    }
@endphp
{{ get_the_post_thumbnail($post->ID, 'medium') }}
<div class="video-player" style="background-image: url({{ $thumbnail }})">
    <div class="video-btn"><i class="fas fa-play"></i></div>
    <div class="embed-container">
        {!! $video_embed !!}
    </div>
</div>