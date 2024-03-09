<section>
    <div id="slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $sliderKey => $slider)
            <div class="carousel-item @if($sliderKey == 0) active @endif">
                <div class="container">
                    <div class="row align-items-center align-content-center vh-100">
                        <div class="col-12 col-md-4">
                            <img src="{{ $slider->image }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="slide-content">
                                <h2>{!! __($slider->title) !!}</h2>
                                <p>{!! __($slider->subtitle) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">{!! __('Previous') !!}</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">{!! __('Next') !!}</span>
        </button>
      </div>
</section>
