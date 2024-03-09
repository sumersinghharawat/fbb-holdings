<section id="popupform" style="display: none">
    <div class="popupform-form">
        <div class="container">
            <div class="col-12 text-right">
                <button class="btn-close" id="closebtn"></button>
            </div>
            <div class="col-12">
                <h2>{{ __("Get in Touch") }}</h2>
                <p>{{ __("Contact us today if you’d like to know more about our products and services.") }}</p>
                <form id="popupformaction">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    <div class="col-12">
                        <input type="text" name="name" id="name" class="form-control" placeholder="{{ __("Name*") }}"/>
                    </div>
                    <div class="col-12">
                        <input type="text" name="email" id="email" class="form-control" placeholder="{{ __("Email*") }}"/>
                    </div>
                    <div class="col-12">
                        <input type="text" name="phonenumber" id="phonenumber" class="form-control" placeholder="{{ __("Phone number*") }}"/>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" name="message" id="message" placeholder="{{ __("Your message*") }}"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-golden">{{ __("Send") }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
