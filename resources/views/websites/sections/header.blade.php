<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">
                            <img src="{{ $website->websitelogo }}" height="152px" width="152px" class="website-logo img-fluid"/>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-right">
                                <li class="nav-item">
                                    <a class="nav-link {{ Nav::isRoute('website') }}" href="/">{{ __("Home") }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Nav::isRoute('aboutus') }}" href="{{ route('aboutus') }}">{{ __("About Us") }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Nav::isRoute('ourbusiness') }}" href="{{ route('ourbusiness') }}">{{ __("Our Businesses") }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Nav::isRoute('contactus') }}" href="{{ route('contactus') }}">{{ __("Contact Us") }}</a>
                                </li>
                                <li class="langtranslator">
                                    <button class="langtranslator-option changeLang" value="{{  (session()->get('locale') == 'en' || empty(session()->get('locale'))) == 'en' ? 'ar' : 'en' }}">
                                        {{ (session()->get('locale') == 'en' || empty(session()->get('locale'))) ? 'عربي' : 'English' }}
                                    </button>
                                </li>
                                <li class="nav-item action-button">
                                    <button id="letstalk">{{__("Let's Talk")}}<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.58374 11.3494H17.4171" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.0005 4.93262L17.4172 11.3493L11.0005 17.7659" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
