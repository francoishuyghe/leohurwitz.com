@php
    // if (strpos($video_uri, 'vimeo') !== false) {
    //     // determine the video id
    //     $parse = parse_url( $video_uri );
    //     $clip_id = ltrim( $parse['path'],'/' );

    //     //return thumbnail uri
    //     $vimeo_api_uri = 'https://api.vimeo.com/videos/' . $clip_id . '';
    //     $vimeo_response = wp_remote_get( $vimeo_api_uri );
    //     if( is_wp_error( $vimeo_response ) ) {
    //     echo $vimeo_response;
    //     } else {
    //     $vimeo_response = unserialize( $vimeo_response['body'] );
    //     $thumbnail = $vimeo_response[0]['thumbnail_large'];
    //     }
    // } else {
    // }
    $thumbnail = get_the_post_thumbnail_url($post->ID, 'full');
    @endphp

<div class="video-player" style="background-image: url({{ $thumbnail }})">
    <div class="video-btn"><i class="fas fa-play"></i></div>
    <div class="embed-container">
        {!! $video_embed !!}
    </div>
</div>