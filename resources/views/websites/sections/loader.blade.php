<section class="loader-screen" id="loader">
    <div class="container" id="loading-panel">
        <div class="row vh-100">
            <div class="col-12 logo">
                {{-- <img src="{{ asset("img/loader-image.svg") }}" width="600" height="200"/> --}}
                {{-- <div id="my-lottie" style="width: 500px; height: 500px;"></div>
                 --}}
                 {{-- <div id="animation"></div> --}}
                 <img src="{{ asset('/img/video/ezgif.com-video-to-gif.gif') }}" />
                 {{-- <video height="500" width="500" autoplay loop src="{{ asset('/img/video/video-1.mp4') }}"></video> --}}
            </div>
            <div class="col-12 loading-panel">
                <div class="countnumber" id="countnumber">
                    00%
                </div>
                <div class="loader-progress"></div>
            </div>
            <div class="col-12 loading-footer d-flex">
                <b>{{ __("FBB Holding") }}</b>|<p>{{ __("powered by") }} <a href="https://nayagroup.com">{{ __("naya group") }}</a></p>
            </div>
        </div>
    </div>
</section>
<div id="slide-animation-loader" class="overflow-hidden">
    <div class="slide-animation-elements slide-element-1"></div>
    <div class="slide-animation-elements slide-element-2"></div>
    <div class="slide-animation-elements slide-element-3"></div>
</div>
