<!DOCTYPE html>
<html ng-app="Niaxtu" lang="{{config('app.locale')}}">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="{{ asset('assets/images/index-meta.jpg') }}">
    <meta property="og:image" content="{{ asset('assets/images/index-meta.jpg') }}">
    <meta name="twitter:title" content="{{config('app.name')}} - @yield('twitter-title')">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/mediumsquarelogo.jpg') }}" type="image/x-icon">
    <meta name="description" content="@yield('description')'">


    <title>@yield('title') - {{config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons2/mobirise2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/recaptcha.css') }}">
    <link rel="preload"
        href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
    </noscript>
    <link rel="preload" as="style" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
    <meta name="theme-color" content="#DD9016">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <script src="{{ asset('sw-connect.js') }}"></script>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-startup-image"
        media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-640x1136.png') }}">
    <link rel="apple-touch-startup-image"
        media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-750x1334.png') }}">
    <link rel="apple-touch-startup-image"
        media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-1242x2208.png') }}">
    <link rel="apple-touch-startup-image"
        media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-1125x2436.png') }}">
    <link rel="apple-touch-startup-image"
        media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-1536x2048.png') }}">
    <link rel="apple-touch-startup-image"
        media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-1668x2224.png') }}">
    <link rel="apple-touch-startup-image"
        media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-2048x2732.png') }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    {!! Adsense::javascript() !!}
</head>
<body>
    <section data-bs-version="5.1" class="menu popup-btn-cards cid-sI3PlPU1N8" once="menu" id="menu2-2"
        data-sortbtn="btn-primary">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="mbr-overlay" style="opacity: 1;"></div>

            {{-- <a class="full-link" href="{{route('home_route')}}">
                <div class="menu-top card-wrapper mbr-fonts-style mbr-white display-7">
                   @guest <span>Le levier du développement</span> / @endguest
                    @auth <b><a style="color: white;" href="{{ route('account_route') }}">{{ Auth::user()->name }}</a></b> /
                    <form method="POST" style="display: inline;" action="{{route('logout_route')}}">
                        @method('post')
                        @csrf
                        <button type="submit"><u style="color: #dd9016">Se déconnecter</u></button>
                    </form>
                    @endauth
                </div>
            </a> --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <div class="left-menu">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-success text-primary display-4" href="{{route('home_route')}}"
                                aria-expanded="false">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-success text-primary display-4"
                                href="{{route('guide_route')}}">Guide</a>
                        </li>
                    </ul>
                </div>

                <div class="brand-container">
                    <div class="navbar-brand">
                        <span class="navbar-logo">
                            <a href="{{route('home_route')}}">
                                <img src="{{ asset('assets/images/mediumsquarelogo.jpg') }}" alt=""
                                    style="height: 2rem;">
                            </a>
                        </span>
                        <span class="navbar-caption-wrap"><a
                                class="navbar-caption text-secondary text-primary display-7"
                                href="{{route('home_route')}}">Ñaxtu</a></span>
                    </div>
                </div>

                <div class="right-menu">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        @auth
                        <li class="nav-item">
                            <a class="nav-link link text-primary show display-4" href="{{route('account_route')}}"
                                data-bs-auto-close="outside" aria-expanded="false">Mon compte</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-primary show display-4"
                                href="{{route('posts_route')}}" data-bs-auto-close="outside" aria-expanded="false">Mes
                                publications</a></li>
                        @endauth
                        {{-- <li class="nav-item"><a class="nav-link link text-primary show display-4"
                                href="{{route('contacts_route')}}" data-bs-auto-close="outside"
                                aria-expanded="false">Contacts</a></li> --}}
                    </ul>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </nav>
    </section>

    @yield('body')
@auth
<a style="position: fixed; top: 40%; right: 20px;" href="{{ route('post.new') }}" class="btn btn-primary btn-rounded">
    <span class="mobi-mbri mobi-mbri-edit mbr-iconfont"></span>
</a>
@endauth

    <section data-bs-version="5.1" class="footer1 cid-sI3PNqz98f" once="footers" id="footer01-3"
        data-sortbtn="btn-primary">
        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                        © Copyright 2021 Bambo GROUP - Tous droits réservés !</p>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/ytplayer/index.js') }}"></script>
    <script src="{{ asset('assets/dropdown/js/navbar-dropdown.js') }}"></script>
    <script src="{{ asset('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
    <script src="{{ asset('assets/popup-plugin/script.js') }}"></script>
    <script src="{{ asset('assets/popup-overlay-plugin/script.js') }}"></script>
    <script src="{{ asset('assets/sociallikes/social-likes.js') }}"></script>
    <script src="{{ asset('assets/theme/js/script.js') }}"></script>
    <script src="{{ asset('assets/formoid.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular/angular.min.js') }}"></script>
    <script src="{{asset('bower_components/angular-filter/dist/angular-filter.min.js') }}"></script>
    <script src="{{ asset('angular/app.js') }}"></script>
    {{-- services --}}
    <script src="{{ asset('angular/services/post.service.js') }}"></script>
    <script src="{{ asset('angular/services/categorie.service.js') }}"></script>
    <script src="{{ asset('angular/services/user.service.js') }}"></script>
    {{-- controllers --}}
    <script src="{{ asset('angular/controllers/post-public-list.js') }}"></script>
    <script src="{{ asset('angular/controllers/user.controller.js') }}"></script>
    <script src="{{ asset('angular/controllers/post.new.controller.js') }}"></script>
    <script src="{{asset('angular/controllers/my.posts.controller.js')}}"></script>
    <script src="{{ asset('angular/controllers/post.show.controller.js') }}"></script>
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up">
        <a style="text-align: center;"><i
                class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
</body>

</html>
