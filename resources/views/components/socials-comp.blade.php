<div class="bodyLinks d-flex flex-column justify-content-center">
    @foreach($socials as $social)
    <a class="line-height-17px position-relative" href="http://{{ $social->link }}">
        <svg class="linksArrow" xmlns="http://www.w3.org/2000/svg" width="8.957" height="8.956"
            viewBox="0 0 8.957 8.956">
            <path class="whiteFillTheme whiteStrokeTheme" id="Path_4423" data-name="Path 4423"
                d="M-2071.488-2266.456v.937h5.881l-6.15,6.15.663.663,6.15-6.15v5.881h.937v-7.48Z"
                transform="translate(2072.463 2266.956)" fill="#fff" stroke="#fff" stroke-width="1">
            </path>
        </svg>
        <span class="text-uppercase fs-15px ft-Gilroy-Regular whiteColorTheme">{{ $social->name }}</span>
    </a>
    @endforeach
</div>