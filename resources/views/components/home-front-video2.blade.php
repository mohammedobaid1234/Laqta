{{-- {{dd($header->poster_image)}} --}}
<div class="px-video-container position-relative" id="aboutUsVideo">
    <div class="px-video-img-captions-container">
        <div class="px-video-captions hide"></div>
        <div class="px-video-wrapper">
            <video poster="{{ asset('uploads') }}/{{$header->poster_image}}" class="px-video"
                controls>
                <!-- video files -->
                <source src="{{ asset('uploads') }}/{{$header->video2}}"
                    type="video/mp4" />
                <!-- fallback for browsers that don't support the video element -->
                <div>
                    <a href="./index.html">
                        <img src="{{ asset('uploads') }}/{{$header->poster_image}}"
                            alt="download video" />
                    </a>
                </div>
            </video>
        </div>
    </div>
    <!-- end container for captions and video -->
    <div class="px-video-controls"></div>
</div>