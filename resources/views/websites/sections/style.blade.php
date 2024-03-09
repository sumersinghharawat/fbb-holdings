
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link href="{{ asset('./css/bootstrap.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('./css/style.scss') }}"  rel="stylesheet/less" type="text/x-scss">

@if(session()->get('locale')=='ar')
<link href="{{ asset('./css/font-arabic.scss') }}"  rel="stylesheet/less" type="text/x-scss">
@endif

<link href="{{ asset('./css/responsive.scss') }}"  rel="stylesheet/less" type="text/x-scss">
<link href="{{ asset('./css/basicstyle.css') }}"  rel="stylesheet/less" type="text/x-scss">
<link href="{{ asset('./css/all.min.css') }}" type="text/css" rel="stylesheet" />
<link href="{{ asset('./css/aos.css') }}" type="text/css" rel="stylesheet">

<script src="{{ asset('./js/jquery-3.6.4.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/less@4.1.1"></script>
<script src="https://unpkg.com/three@0.139.2/build/three.min.js" defer></script>
<script src="https://unpkg.com/three@0.139.2/examples/js/controls/OrbitControls.js" defer></script>
