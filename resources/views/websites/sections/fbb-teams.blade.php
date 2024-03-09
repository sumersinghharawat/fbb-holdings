<section id="fbb-family-of-businesses">
    <div class="container my-2 team-header">
        <div class="row align-items-end">
            <div class="col-12 col-md-12 mb-5" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <h2>{!! __("Our Teams") !!}</h2>
                <p>{!! __("At FBB Holding L.L.C., we are people with passion and experience, coming from many different backgrounds, disciplines, and countries. We believe in the power of diversity and collaboration, and we work together to achieve our goals and deliver the best results to our customers.") !!}</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($teams as $team)
            <div class="col-12 col-md-4 team-items" data-aos="fade-up" data-aos-offset="{{ 300 }}" data-aos-easing="ease-in-sine">
                <div class="team-portfolio-box" style="transition: 0.5s;">
                    <div class="team-logo">
                        <img class="img-fluid" width="200" src="{!! $team->image !!}" />
                    </div>
                    <h3>{!! __($team->name) !!}</h3>
                    <p>{!! __($team->position) !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
