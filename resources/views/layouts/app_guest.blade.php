<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
{{-- <body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Welcome Page
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body> --}}
<body>
    <header>
        <div class="upper_nav">
            <nav class="upper_nav_conteiner">
                <div class="nav_logo">
                    <img src="{{asset('img/logo4.svg')}}" alt="">
                </div>
                <div class="nav_logo">
                    <img src="{{asset('img/logo1.svg')}}" alt="">
                </div>
                <div class="nav_logo">
                    <img src="{{asset('img/logo3.svg')}}" alt="">
                </div>
                <div class="nav_logo">
                    <img src="{{asset('img/logo2.svg')}}" alt="">
                </div>
                <div class="nav_logo">
                    <img src="{{asset('img/logo5.svg')}}" alt="">
                </div>
            </nav>

        </div>
        <div class="lower_nav">
            <nav class="container lower_nav_conteiner">
                <a href="/">
                    <img src="{{asset('img/logoDC.png')}}" alt="">
                </a>
                <ul>
                    <li>characters</li>
                    <li>comics</li>
                    <li>movies</li>
                    <li>tv</li>
                    <li>games</li>
                    <li>videos</li>
                    <li>news</li>
                    <li>shop</li>
                </ul>
                <ul class="search_section">
                    <li style="text-transform: capitalize; margin-right: 0;">
                        Search 
                        <img class="search_icon" src="{{asset('img/search_icon.png')}}" alt="">
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')

    {{-- sezione: Footer --}}
    <div class="uppper_footer">
        <div class="services_wrap">
            <div class="service_box">
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCUI.svg" alt="">
                <span>digital comics</span>
            </div>
            <div class="service_box">
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCshop.svg" alt="">
                <span>dc merchandise</span>
            </div>
            <div class="service_box">
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-subscription.svg" alt="">
                <span>print subscriptions</span>
            </div>
            <div class="service_box">
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-locator.svg" alt="">
                <span>comic shop locator</span>
            </div>
        </div>
    </div>

    <footer>

        <div class="lower_footer">

            <div class="footer_container">

                <div class="footer_link">
                    <h3>dc comics</h3>
                    <ul>
                        <li>Characters</li>
                        <li>Comics</li>
                        <li>Movies</li>
                        <li>TV</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                        <li>DC Shop</li>
                    </ul>
                </div>

                <div class="footer_link">
                    <h3>dc</h3>
                    <ul>
                        <li>Terms Of Use</li>
                        <li>Privacy Policy (New)</li>
                        <li>Advertising</li>
                        <li>Jobs</li>
                        <li>Subscriptions</li>
                        <li>CPSC Certificates</li>
                        <li>Ratings</li>
                        <li>Shop Help</li>
                        <li>Contact Us</li>
                    </ul>
                </div>

                <div class="footer_link">
                    <h3>sites</h3>
                    <ul>
                        <li>DC</li>
                        <li>DC UNIVERSE INFINITE</li>
                        <li>DC Kids</li>
                        <li>DC Shop</li>
                        <li>MAD Magazine</li>
                    </ul>
                </div>

                <div class="footer_link">
                    <h3>Shop</h3>
                    <ul>
                        <li>shop DC</li>
                        <li>shop DC collectibles</li>
                    </ul>
                </div>
            </div>    
    
            <div class="footer_container">
                <img class="footer_logo" src="{{asset('img/logo_footer.png')}}" alt="">
            </div>
        </div>

        <div class="footer_privacy">
            <p>All Site Content TM and © 2020 DC Entertainment, unless otherwise noted here. All rights reserved. <br> Cookies Settings</p>
        </div>

        <div class="social">
            <div class="social_container">
                <div class="social_row_left">
                    <a href="/">sign-up now!</a>
                </div>
                <div class="social_row_right">
                    <a  href="/">Follow us</a>
                    <img src="{{asset('img/facebook.png')}}" alt="">
                    <img src="{{asset('img/twitter.png')}}" alt="">
                    <img src="{{asset('img/youtube.png')}}" alt="">
                    <img src="{{asset('img/pinterest.png')}}" alt="">
                    <img src="{{asset('img/periscope.png')}}" alt="">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
