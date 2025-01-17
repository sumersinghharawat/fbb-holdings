<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel SB Admin 2">
    <meta name="author" content="Alejandro RH">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">

    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet" />
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">

                <svg width="122" height="61" viewBox="0 0 122 61" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.472 48.454L14.472 60.1207H12.6995L6.30537 52.2207L6.30537 60.1207H4.16846L4.16846 48.454H5.94093L12.3351 56.354L12.3351 48.454H14.472Z"
                        fill="white" />
                    <path
                        d="M25.0998 57.4207H19.3019L18.1589 60.1207H15.9392L21.1572 48.454H23.2776L28.5122 60.1207H26.2593L25.0998 57.4207ZM24.3874 55.7207L22.2008 50.6207L20.0308 55.7207H24.3874Z"
                        fill="white" />
                    <path
                        d="M34.294 56.004V60.1207H32.1405V56.0373L27.585 48.454H29.8876L33.2835 54.1373L36.7125 48.454H38.8328L34.294 56.004Z"
                        fill="white" />
                    <path
                        d="M47.068 57.4207H41.2702L40.1272 60.1207H37.9075L43.1255 48.454H45.2459L50.4805 60.1207H48.2276L47.068 57.4207ZM46.3557 55.7207L44.1691 50.6207L41.9991 55.7207H46.3557Z"
                        fill="white" />
                    <path
                        d="M64.4514 54.154H66.4889V58.804C65.8926 59.2818 65.1968 59.6484 64.4017 59.904C63.6066 60.1595 62.7894 60.2873 61.9501 60.2873C60.7684 60.2873 59.7027 60.0318 58.753 59.5207C57.8032 58.9984 57.0578 58.2818 56.5167 57.3707C55.9755 56.4595 55.705 55.4318 55.705 54.2873C55.705 53.1429 55.9755 52.1151 56.5167 51.204C57.0578 50.2929 57.8032 49.5818 58.753 49.0707C59.7138 48.5484 60.7905 48.2873 61.9832 48.2873C62.955 48.2873 63.8385 48.4484 64.6336 48.7707C65.4288 49.0929 66.0969 49.5651 66.638 50.1873L65.2797 51.5207C64.3962 50.6318 63.3305 50.1873 62.0826 50.1873C61.2654 50.1873 60.5365 50.3595 59.896 50.704C59.2665 51.0484 58.7695 51.5318 58.4051 52.154C58.0517 52.7762 57.875 53.4873 57.875 54.2873C57.875 55.0651 58.0517 55.7651 58.4051 56.3873C58.7695 57.0095 59.2665 57.4984 59.896 57.854C60.5365 58.2095 61.2598 58.3873 62.066 58.3873C62.9716 58.3873 63.7667 58.1873 64.4514 57.7873V54.154Z"
                        fill="white" />
                    <path
                        d="M76.9161 60.1207L74.5472 56.704C74.4479 56.7151 74.2988 56.7207 74.1 56.7207H71.4827V60.1207H69.3292V48.454L74.1 48.454C75.1049 48.454 75.9774 48.6207 76.7173 48.954C77.4682 49.2873 78.0425 49.7651 78.4401 50.3873C78.8376 51.0095 79.0364 51.7484 79.0364 52.604C79.0364 53.4818 78.8211 54.2373 78.3904 54.8707C77.9707 55.504 77.3633 55.9762 76.5682 56.2873L79.2352 60.1207H76.9161ZM76.8664 52.604C76.8664 51.8595 76.6234 51.2873 76.1375 50.8873C75.6516 50.4873 74.9393 50.2873 74.0006 50.2873H71.4827V54.9373H74.0006C74.9393 54.9373 75.6516 54.7373 76.1375 54.3373C76.6234 53.9262 76.8664 53.3484 76.8664 52.604Z"
                        fill="white" />
                    <path
                        d="M86.8626 60.2873C85.6809 60.2873 84.6152 60.0318 83.6655 59.5207C82.7157 58.9984 81.9703 58.2818 81.4292 57.3707C80.8881 56.4484 80.6175 55.4207 80.6175 54.2873C80.6175 53.154 80.8881 52.1318 81.4292 51.2207C81.9703 50.2984 82.7157 49.5818 83.6655 49.0707C84.6152 48.5484 85.6809 48.2873 86.8626 48.2873C88.0442 48.2873 89.1099 48.5484 90.0597 49.0707C91.0094 49.5818 91.7548 50.2929 92.296 51.204C92.8371 52.1151 93.1076 53.1429 93.1076 54.2873C93.1076 55.4318 92.8371 56.4595 92.296 57.3707C91.7548 58.2818 91.0094 58.9984 90.0597 59.5207C89.1099 60.0318 88.0442 60.2873 86.8626 60.2873ZM86.8626 58.3873C87.6356 58.3873 88.3313 58.2151 88.9498 57.8707C89.5682 57.5151 90.0541 57.0262 90.4075 56.404C90.7609 55.7707 90.9376 55.0651 90.9376 54.2873C90.9376 53.5095 90.7609 52.8095 90.4075 52.1873C90.0541 51.554 89.5682 51.0651 88.9498 50.7207C88.3313 50.3651 87.6356 50.1873 86.8626 50.1873C86.0895 50.1873 85.3938 50.3651 84.7754 50.7207C84.1569 51.0651 83.671 51.554 83.3176 52.1873C82.9642 52.8095 82.7875 53.5095 82.7875 54.2873C82.7875 55.0651 82.9642 55.7707 83.3176 56.404C83.671 57.0262 84.1569 57.5151 84.7754 57.8707C85.3938 58.2151 86.0895 58.3873 86.8626 58.3873Z"
                        fill="white" />
                    <path
                        d="M100.376 60.2873C98.7751 60.2873 97.5272 59.8373 96.6327 58.9373C95.7381 58.0262 95.2909 56.7262 95.2909 55.0373V48.454H97.4444V54.954C97.4444 57.2429 98.4272 58.3873 100.393 58.3873C102.348 58.3873 103.325 57.2429 103.325 54.954V48.454H105.445V55.0373C105.445 56.7262 104.998 58.0262 104.104 58.9373C103.22 59.8373 101.978 60.2873 100.376 60.2873Z"
                        fill="white" />
                    <path
                        d="M113.232 48.454C114.237 48.454 115.109 48.6207 115.849 48.954C116.6 49.2873 117.175 49.7651 117.572 50.3873C117.97 51.0095 118.168 51.7484 118.168 52.604C118.168 53.4484 117.97 54.1873 117.572 54.8207C117.175 55.4429 116.6 55.9207 115.849 56.254C115.109 56.5873 114.237 56.754 113.232 56.754H110.615V60.1207H108.461V48.454H113.232ZM113.133 54.9207C114.071 54.9207 114.784 54.7207 115.27 54.3207C115.755 53.9207 115.998 53.3484 115.998 52.604C115.998 51.8595 115.755 51.2873 115.27 50.8873C114.784 50.4873 114.071 50.2873 113.133 50.2873H110.615V54.9207H113.133Z"
                        fill="white" />
                    <path
                        d="M88.0692 34.6889L86.2651 38.2116H86.267L88.0488 34.7317C88.0562 34.7149 88.0637 34.7019 88.0692 34.6889Z"
                        fill="white" />
                    <path
                        d="M88.0717 34.6844C88.0717 34.6863 88.0698 34.6882 88.0698 34.69L88.1182 34.5952L88.0717 34.6844Z"
                        fill="white" />
                    <path
                        d="M121.145 38.8623C121.13 38.8362 121.119 38.8065 121.104 38.7767L120.924 38.4252C120.916 38.414 120.909 38.4029 120.905 38.3917L118.227 33.1561C118.407 33.5931 118.511 34.0693 118.511 34.5715C118.511 36.5802 116.884 38.2132 114.87 38.2132L102.451 38.2132H86.2678H86.266L83.3403 43.925H83.3422H99.5271L117.79 43.925C119.798 43.925 121.431 42.2938 121.431 40.2795C121.429 39.7792 121.327 39.2975 121.145 38.8623Z"
                        fill="white" />
                    <path
                        d="M86.3447 38.2113C88.0112 38.1611 97.2122 38.1388 98.8787 38.1016L103.878 38.0402L106.426 37.9993C109.759 38.0179 108.703 38.0104 112.036 38.0514L114.535 38.0793C115.361 38.1295 116.167 37.9472 116.851 37.499C117.53 37.0544 118.051 36.37 118.3 35.587C118.547 34.804 118.523 33.9317 118.218 33.1561C118.564 33.9168 118.633 34.8021 118.404 35.6186C118.177 36.4332 117.664 37.1698 116.964 37.6664C116.267 38.1667 115.372 38.3768 114.534 38.3434L112.034 38.3713C108.701 38.4122 109.757 38.4047 106.424 38.4233L103.876 38.3824L98.8768 38.321C97.2122 38.2838 88.0112 38.2615 86.3447 38.2113Z"
                        fill="white" />
                    <path
                        d="M36.7183 5.92835L33.9619 11.3147L35.435 14.1938L40.3526 23.8467L43.879 16.9502L39.0227 7.41442C38.0612 5.53777 36.7648 5.91533 36.7183 5.92835Z"
                        fill="white" />
                    <path
                        d="M45.435 4.32066C45.435 4.32066 45.435 4.32066 45.435 4.31694L44.5106 2.51097C44.5032 2.49609 44.4957 2.48121 44.4883 2.46261L44.2967 2.08877C44.2893 2.07389 44.2781 2.05529 44.2707 2.04041C43.8447 1.3448 43.2012 0.805429 42.4312 0.515283C42.1318 0.403688 41.8174 0.33115 41.4882 0.301392C40.3221 0.405547 39.3159 1.06024 38.7281 1.99949C38.7244 2.00321 38.7244 2.01065 38.717 2.01437L38.451 2.54259C38.4473 2.54631 38.4473 2.55003 38.4436 2.55375L37.5378 4.32996L36.7231 5.92205C36.7696 5.90717 38.0679 5.53146 39.0276 7.40625L43.8838 16.942L47.8789 9.13039L45.435 4.32066Z"
                        fill="white" />
                    <path
                        d="M65.8702 5.92835L63.1138 11.3147L64.5868 14.1938L69.5044 23.8467L73.0308 16.9502L68.1746 7.41442C67.2149 5.53777 65.9167 5.91533 65.8702 5.92835Z"
                        fill="white" />
                    <path
                        d="M74.5863 4.32066C74.5863 4.32066 74.5863 4.32066 74.5863 4.31694L73.662 2.51097C73.6545 2.49609 73.6471 2.48121 73.6396 2.46261L73.4481 2.08877C73.4406 2.07389 73.4295 2.05529 73.422 2.04041C72.9961 1.3448 72.3526 0.805429 71.5826 0.515283C71.2831 0.403688 70.9688 0.33115 70.6396 0.301392C69.2893 0.305111 68.4672 1.06024 67.8795 1.99949C67.8758 2.00321 67.8758 2.01065 67.8683 2.01437L67.6024 2.54259C67.5987 2.54631 67.5986 2.55003 67.5949 2.55375L66.6892 4.32996L65.8745 5.92205C65.921 5.90717 67.2192 5.53146 68.1789 7.40625L73.0352 16.942L77.0303 9.13039L74.5863 4.32066Z"
                        fill="white" />
                    <path
                        d="M108.611 29.1918L97.4755 7.44383C96.5865 5.70481 95.411 5.9001 95.2064 5.94846L92.2324 11.7551L93.9082 15.0304L102.847 32.5061H106.57C107.095 32.4224 109.963 31.8347 108.611 29.1918Z"
                        fill="white" />
                    <path
                        d="M115.307 27.4489C115.3 27.434 115.292 27.4191 115.285 27.4043L115.097 27.0341C115.09 27.0155 115.078 26.9969 115.067 26.9783L103.807 4.96071C103.807 4.96071 103.807 4.96071 103.807 4.95699L102.483 2.37729C102.45 2.3029 102.416 2.23594 102.375 2.16712C102.083 1.63891 101.661 1.19067 101.155 0.865183C100.74 0.595496 100.268 0.409505 99.7602 0.329529C99.7565 0.329529 99.7565 0.333249 99.7527 0.329529C98.687 0.496921 97.7738 1.12557 97.2251 2.00159C97.2177 2.01647 97.2103 2.02763 97.1991 2.04251L96.948 2.54654C96.9443 2.55026 96.9443 2.55398 96.9406 2.5577L95.7056 4.98117L95.209 5.95204C95.4136 5.90369 96.589 5.70839 97.4781 7.44741L108.613 29.1954C109.966 31.8364 107.098 32.4242 106.575 32.5079H111.952C113.964 32.5079 115.594 30.8767 115.594 28.8662C115.592 28.364 115.488 27.886 115.307 27.4489Z"
                        fill="white" />
                    <path
                        d="M95.2041 6.0141C95.5296 5.93412 95.883 5.97504 96.1954 6.10709C96.5116 6.23729 96.7832 6.45861 97.0101 6.7097C97.2426 6.96079 97.4155 7.25652 97.5811 7.55038L98.0572 8.43384L99.9376 11.9826C101.174 14.3577 102.409 16.7309 103.628 19.1153C104.833 21.5053 106.06 23.8841 107.245 26.2853L108.138 28.0838L108.584 28.9821C108.661 29.1291 108.731 29.2835 108.796 29.4434L108.895 29.6815C108.921 29.7633 108.94 29.8489 108.96 29.9326C109.057 30.2636 109.059 30.6263 108.977 30.9611C108.899 31.3052 108.674 31.5953 108.421 31.8185C107.896 32.2649 107.227 32.4713 106.568 32.5681C107.219 32.4341 107.87 32.1905 108.356 31.746C108.59 31.5228 108.785 31.2457 108.845 30.9276C108.906 30.6151 108.895 30.2859 108.789 29.9772C108.597 29.3634 108.229 28.785 107.93 28.1898L106.992 26.4136C105.737 24.0478 104.526 21.6615 103.291 19.2864C102.067 16.9057 100.864 14.5139 99.6605 12.122L97.8805 8.52126C97.5718 7.92794 97.343 7.28627 96.9264 6.77666C96.5284 6.27262 95.8792 5.89692 95.2041 6.0141Z"
                        fill="white" />
                    <path
                        d="M32.255 36.937L27.622 27.8029L24.1514 34.586L24.3615 34.9971L26.227 38.7262L27.6815 41.5682L27.6852 41.5719L28.0553 42.2935V42.2972C28.3176 42.6934 28.6579 43.0375 29.0541 43.3035H29.0578C29.4279 43.5583 29.8501 43.7405 30.304 43.8391C31.3139 43.6178 32.1657 42.9761 32.6679 42.1113C32.6716 42.1075 32.6716 42.1038 32.6753 42.1001L32.8353 41.7895C32.839 41.7858 32.839 41.7783 32.8427 41.7746C32.8427 41.7709 32.8465 41.7672 32.8465 41.7634L34.3902 38.7485L34.5557 38.423C34.5222 38.4342 33.2203 38.8229 32.255 36.937Z"
                        fill="white" />
                    <path
                        d="M36.3338 29.0662L31.6747 19.8764L27.6201 27.8015L32.2532 36.9355C33.2184 38.8214 34.5204 38.4327 34.5539 38.4234L37.5799 32.5108L37.8347 32.0067L36.3319 29.0718V29.0662H36.3338Z"
                        fill="white" />
                    <path
                        d="M118.226 33.1557L117.895 32.5085L115.304 27.4514C115.484 27.8885 115.589 28.3646 115.589 28.8686C115.589 30.8773 113.961 32.5103 111.947 32.5103L105.368 32.5103H91.4022C90.6508 32.5103 89.9552 32.7354 89.3786 33.1241C88.9341 33.4198 88.564 33.8086 88.2869 34.2642C88.2757 34.2828 88.2645 34.3014 88.2571 34.32L88.1158 34.5953L88.0674 34.6902C88.06 34.7032 88.0544 34.7162 88.0469 34.7329L86.2651 38.2128H102.448L114.867 38.2128C116.879 38.2128 118.509 36.5817 118.509 34.5711C118.51 34.069 118.406 33.5928 118.226 33.1557Z"
                        fill="white" />
                    <path
                        d="M68.9809 42.0981C69.0367 41.9977 69.0925 41.8954 69.1408 41.7875L73.8873 32.5084L83.092 14.5119L89.3116 2.35368C89.3376 2.30161 89.3636 2.24581 89.3934 2.19373C89.7598 1.51672 90.3364 0.966191 91.0394 0.635127C91.51 0.413798 92.0382 0.287323 92.5943 0.287323L85.2718 0.287323C83.929 0.287323 82.7554 1.01641 82.1267 2.09702C82.0672 2.19745 82.0151 2.29603 81.963 2.4039L75.7063 14.6403L68.1811 29.3484L66.5686 32.5084L61.8779 41.6778C61.8741 41.6852 61.8704 41.6927 61.8704 41.6964C61.796 41.875 61.7067 42.0405 61.6119 42.2004C60.9684 43.2364 59.8245 43.9246 58.5151 43.9246H65.8264C67.1749 43.9227 68.3522 43.1899 68.9809 42.0981Z"
                        fill="white" />
                    <path
                        d="M83.2327 29.3513L92.2309 11.7621L95.7015 4.98458L96.9365 2.56112C96.9402 2.5574 96.9402 2.55368 96.944 2.54996C97.0146 2.37699 97.1002 2.20959 97.195 2.04592C97.2062 2.03104 97.2136 2.01988 97.2211 2.005C97.7679 1.12898 98.683 0.498473 99.7487 0.332941C99.5646 0.306902 99.3786 0.292023 99.187 0.292023L92.5974 0.292023C92.0431 0.292023 91.513 0.418497 91.0425 0.639827C90.3394 0.969031 89.7628 1.51957 89.3964 2.19843C89.3667 2.25051 89.3406 2.30631 89.3146 2.35839L83.0951 14.5166L73.8904 32.5131L69.1439 41.7904C69.0955 41.8983 69.0397 42.0005 68.9839 42.101C68.3553 43.1927 67.1779 43.9256 65.8276 43.9256H73.5574C74.227 43.9256 74.8519 43.7489 75.3894 43.429C75.9325 43.1146 76.3882 42.659 76.7063 42.1121C76.71 42.1084 76.71 42.1047 76.7137 42.101L76.8737 41.7904C76.8774 41.7867 76.8774 41.7792 76.8811 41.7755C76.8811 41.7718 76.8848 41.7681 76.8848 41.7643L81.6201 32.5113L83.2327 29.3513Z"
                        fill="white" />
                    <path
                        d="M40.4106 42.0981C40.4664 41.9977 40.5222 41.8954 40.5705 41.7875L45.317 32.5084L54.5217 14.5119L60.7413 2.35368C60.7673 2.30161 60.7934 2.24581 60.8231 2.19373C61.1895 1.51672 61.7661 0.966191 62.4691 0.635127C62.9397 0.413797 63.4679 0.287323 64.024 0.287323L56.2794 0.287323C54.9142 0.287323 53.7257 1.03873 53.1008 2.15281C53.0561 2.23093 53.0152 2.31277 52.9743 2.39646L46.991 14.0953L39.4695 28.8035L37.8309 32.0044L37.5761 32.5084L34.3826 38.7466L32.8389 41.7615C32.8389 41.7652 32.8352 41.7689 32.8352 41.7727C32.8314 41.7764 32.8314 41.7838 32.8277 41.7875L32.6678 42.0981C32.6641 42.1019 32.6641 42.1056 32.6603 42.1093C32.1563 42.976 31.3063 43.6158 30.2964 43.8372C30.5475 43.893 30.8116 43.9227 31.0813 43.9227H37.2543C38.6065 43.9227 39.7819 43.1899 40.4106 42.0981Z"
                        fill="white" />
                    <path
                        d="M44.5724 43.9227C45.1898 43.9227 45.772 43.7702 46.2779 43.4968C46.4657 43.3964 46.648 43.2829 46.8135 43.1527V43.149C47.1502 42.8867 47.4348 42.5687 47.6654 42.2023C47.6691 42.2023 47.6691 42.1986 47.6691 42.1986L47.9276 41.6945C47.9276 41.6908 47.9314 41.6834 47.9351 41.6759L50.1484 37.3461L52.6276 32.5066L54.5229 28.8035L67.9719 2.51178C67.9793 2.50062 67.9831 2.48946 67.9868 2.4783C68.05 2.34066 68.117 2.20489 68.1932 2.0747C68.2007 2.06354 68.2081 2.05238 68.2118 2.04122C68.8516 0.99037 69.3203 0.309641 70.6372 0.309641L64.027 0.287323C63.4728 0.287323 62.9427 0.413797 62.4721 0.635127C61.7691 0.964331 61.1925 1.51486 60.8261 2.19373C60.7964 2.24581 60.7703 2.30161 60.7443 2.35368L54.5247 14.5119L45.32 32.5084L40.5735 41.7875C40.5252 41.8954 40.4694 41.9977 40.4136 42.0981C39.7849 43.1899 38.6076 43.9227 37.2573 43.9227H43.9307H44.5724Z"
                        fill="white" />
                    <path
                        d="M63.9567 0.298255C62.8594 0.318715 61.7974 0.859949 61.1501 1.72109C60.8209 2.14515 60.6275 2.66406 60.3745 3.1495L59.6492 4.62255L56.7161 10.5017C54.7353 14.4075 52.7675 18.3208 50.7625 22.2136C48.7501 26.1027 46.7674 30.0085 44.7308 33.8845L41.6861 39.7042L40.918 41.1568L40.533 41.884C40.4102 42.1314 40.2614 42.3695 40.0848 42.5852C39.3892 43.4575 38.2825 43.9634 37.187 43.9355C38.2844 43.9188 39.3464 43.3794 40.0011 42.5182C40.1666 42.3044 40.3024 42.0719 40.4158 41.8264L40.7785 41.0917L41.5057 39.6186L44.4444 33.7413C46.3973 29.8206 48.4023 25.9278 50.3794 22.0202C52.3639 18.1162 54.3838 14.2309 56.3925 10.3399L59.4427 4.52212L60.2127 3.07138L60.5996 2.34602C60.7242 2.09865 60.8748 1.86058 61.0515 1.64669C61.749 0.770672 62.8594 0.264777 63.9567 0.298255Z"
                        fill="white" />
                    <path
                        d="M92.7145 0.298255C91.6172 0.318715 90.5552 0.859949 89.9079 1.72109C89.5787 2.14515 89.3853 2.66406 89.1323 3.1495L88.407 4.62255L85.4739 10.5017C83.4931 14.4075 81.5253 18.3208 79.5203 22.2136C77.5079 26.1027 75.5252 30.0085 73.4886 33.8845L70.444 39.7042L69.6758 41.1568L69.2908 41.884C69.168 42.1314 69.0193 42.3695 68.8426 42.5852C68.147 43.4575 67.0403 43.9634 65.9448 43.9355C67.0422 43.9188 68.1042 43.3794 68.7589 42.5182C68.9244 42.3044 69.0602 42.0719 69.1736 41.8264L69.5363 41.0917L70.2635 39.6186L73.2022 33.7413C75.1551 29.8206 77.1601 25.9278 79.1372 22.0202C81.1217 18.1162 83.1416 14.2309 85.1503 10.3399L88.2005 4.52212L88.9705 3.07138L89.3574 2.34602C89.482 2.09865 89.6327 1.86058 89.8093 1.64669C90.5087 0.770672 91.6191 0.264777 92.7145 0.298255Z"
                        fill="white" />
                    <path
                        d="M37.7804 4.34014L38.6861 2.56392C38.6899 2.5602 38.6899 2.55648 38.6936 2.55276C38.768 2.36863 38.861 2.1938 38.9596 2.02455C38.967 2.02083 38.967 2.01339 38.9707 2.00967C39.5585 1.07041 40.5647 0.415727 41.7308 0.311572C41.6192 0.300412 41.5095 0.296692 41.3979 0.296692L34.3786 0.296692C33.8243 0.296692 33.2943 0.423166 32.8237 0.644496C32.1207 0.9737 31.5441 1.52423 31.1777 2.2031C31.1479 2.25518 31.1219 2.31097 31.0959 2.36305L24.8763 14.5213L15.6716 32.5178L10.9251 41.7969C10.8768 41.9048 10.821 42.0071 10.7652 42.1075C10.1365 43.1993 8.95918 43.9321 7.60889 43.9321H15.3126C16.6183 43.9321 17.7659 43.2439 18.4094 42.2079L18.6679 41.7039C18.6679 41.7002 18.6716 41.6927 18.6754 41.6853L23.3661 32.5159L25.0456 29.2258L32.5708 14.5176L34.2056 11.3167L37.7804 4.34014Z"
                        fill="white" />
                    <path
                        d="M10.7663 42.0981C10.8221 41.9977 10.8779 41.8954 10.9262 41.7875L15.6727 32.5084L24.8774 14.5119L31.097 2.35368C31.123 2.30161 31.149 2.24581 31.1788 2.19373C31.5452 1.51672 32.1218 0.966191 32.8248 0.635127C33.2954 0.413797 33.8236 0.287323 34.3797 0.287323L27.0275 0.287323C26.4732 0.287323 25.9431 0.413797 25.4726 0.635127C24.7695 0.964331 24.193 1.51486 23.8266 2.19373C23.7968 2.24581 23.7708 2.30161 23.7447 2.35368L17.5252 14.5119L8.32047 32.5084L3.57398 41.7875C3.52562 41.8954 3.47912 42.0033 3.41402 42.0981C2.59938 43.2996 1.91866 43.9227 0.568359 43.9227H7.60998C8.96214 43.9227 10.1376 43.1899 10.7663 42.0981Z"
                        fill="white" />
                    <path
                        d="M34.3083 0.298255C33.2109 0.318715 32.1489 0.859949 31.5017 1.72109C31.1725 2.14515 30.979 2.66406 30.7261 3.1495L30.0007 4.62255L27.0677 10.5017C25.0868 14.4075 23.1191 18.3208 21.1141 22.2136C19.1016 26.1027 17.119 30.0085 15.0824 33.8845L12.0377 39.7042L11.2696 41.1568L10.8846 41.884C10.7618 42.1314 10.613 42.3695 10.4363 42.5852C9.74071 43.4575 8.63406 43.9634 7.53857 43.9355C8.63592 43.9188 9.69793 43.3794 10.3526 42.5182C10.5182 42.3044 10.6539 42.0719 10.7674 41.8264L11.1301 41.0917L11.8573 39.6186L14.7959 33.7413C16.7489 29.8206 18.7538 25.9278 20.7309 22.0202C22.7155 18.1162 24.7353 14.2309 26.744 10.3399L29.7943 4.52212L30.5643 3.07138L30.9511 2.34602C31.0758 2.09865 31.2264 1.86058 31.4031 1.64669C32.1006 0.770672 33.2109 0.264777 34.3083 0.298255Z"
                        fill="white" />
                </svg>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Nav::isRoute('home') }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                {{ __('Settings') }}
            </div>

            <!-- Nav Item - Profile -->
            <li class="nav-item {{ Nav::isRoute('profile') }}">
                <a class="nav-link" href="{{ route('profile') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>{{ __('Profile') }}</span>
                </a>
            </li>

            <!-- Nav Item - Website -->
            <li class="nav-item {{ Nav::isRoute('website.edit') }}">
                <a class="nav-link" href="{{ route('website.edit') }}">
                    <i class="fas fa-globe"></i>
                    <span>{{ __('Website') }}</span>
                </a>
            </li>

            <!-- Nav Item - Slider -->
            <li class="nav-item {{ Nav::isRoute('slider.show') }}">
                <a class="nav-link" href="{{ route('slider.show') }}">
                    <i class="fas fa-image"></i>
                    <span>{{ __('Slider') }}</span>
                </a>
            </li>

            <!-- Nav Item - Team -->
            <li class="nav-item {{ Nav::isRoute('team.show') }}">
                <a class="nav-link" href="{{ route('team.show') }}">
                    <i class="fas fa-users"></i>
                    <span>{{ __('Team') }}</span>
                </a>
            </li>

            <!-- Nav Item - Business -->
            <li class="nav-item {{ Nav::isRoute('business.show') }}">
                <a class="nav-link" href="{{ route('business.show') }}">
                    <i class="fas fa-industry"></i>
                    <span>{{ __('Business') }}</span>
                </a>
            </li>

            <!-- Nav Item - Translation -->
            <li class="nav-item {{ Nav::isRoute('translation.edit') }}">
                <a class="nav-link" href="{{ route('translation.edit') }}">
                    <i class="fas fa-fw fa-language"></i>
                    <span>{{ __('Translation') }}</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        {{-- <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li> --}}

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <figure class="img-profile rounded-circle avatar font-weight-bold"
                                    data-initial="{{ Auth::user()->name[0] }}"></figure>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Website') }}
                                </a>
                                {{-- <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Settings') }}
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Activity Log') }}
                            </a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('main-content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Naya Group {{ now()->year }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Ready to Leave?') }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <a class="btn btn-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('js/adminactions.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    <script>
        $("#translate").on("submit", function(event) {
            event.preventDefault();

            $.ajax({
                url: '{{ route('translation.edit') }}',
                type: 'post',
                dataType: 'json',
                data: $('#translate').serialize(),
                success: function(data) {
                    // ... do something with the data...
                    // console.log(data);
                    toastr.success(data);
                }
            }, );

        });

        function removeElement(elementID) {
            console.log(elementID);
            $("#" + elementID).remove();

        }

        var newElementIndex = 0;
        function addElement() {

            var newElementIndexKey = "'translation-newblock-"+ newElementIndex+"'";

            $("#translation-list").append('<div class="mb-3 d-flex align-items-top" id='+newElementIndexKey+'><textarea type="text" class="form-control bg-light border-1 small mr-2" name="translations[key][]" style="height: 100px"></textarea> <textarea type="text" class="form-control bg-light border-1 small ml-2" name="translations[value][]" style="direction: rtl;height: 100px"></textarea> <div class="d-flex gap-2 justify-content-center py-5 ml-2"><button class="btn btn-danger rounded-pill px-3 ml-2" type="button" onclick="removeElement('+newElementIndexKey+')"> Remove </button> </div> </div>');
        }
    </script>
</body>

</html>
