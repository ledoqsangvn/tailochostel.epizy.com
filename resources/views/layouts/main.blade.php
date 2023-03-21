<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Tai Loc Hostel - @yield('title')</title>
    <meta name="google-site-verification" content="nrtrLLsjtHZg3XZFvFwtaGa_e4KMAukWJ9N4wgaEKAc" />
    <meta name="theme-color" content="#062639">
    <meta name="author" content="Le Do Quang Sang">
    <meta name="description" content="Tai Loc Hostel - a hostel website." />
    <meta name="keywords" content="Tai Loc Hostel, Tai Loc, Hostel" />
    <meta name="robots" content="index,follow" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-title" content="Tai Loc Hostel">
    <meta name="application-name" content="Tai Loc Hostel">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="apple-touch-icon" href="/assets/img/logo.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/img/logo.png">
    <link rel="manifest" crossorigin="use-credentials" href="/manifest.json">
    <script src="/assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets/css/sweetalert2.min.css">
    <script src="/assets/js/sweetalert2.all.min.js"></script>
    <script src="/assets/js/ckeditor.js"></script>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="/assets/css/datatables.min.css" rel="stylesheet" />
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 430px) and (device-height: 932px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)"
        href="/assets/img/ios_splash/iPhone_14_Pro_Max_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 393px) and (device-height: 852px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)"
        href="/assets/img/ios_splash/iPhone_14_Pro_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)"
        href="/assets/img/ios_splash/iPhone_14_Plus__iPhone_13_Pro_Max__iPhone_12_Pro_Max_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)"
        href="/assets/img/ios_splash/iPhone_14__iPhone_13_Pro__iPhone_13__iPhone_12_Pro__iPhone_12_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)"
        href="/assets/img/ios_splash/iPhone_13_mini__iPhone_12_mini__iPhone_11_Pro__iPhone_XS__iPhone_X_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)"
        href="/assets/img/ios_splash/iPhone_11_Pro_Max__iPhone_XS_Max_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
        href="/assets/img/ios_splash/iPhone_11__iPhone_XR_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)"
        href="/assets/img/ios_splash/iPhone_8_Plus__iPhone_7_Plus__iPhone_6s_Plus__iPhone_6_Plus_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
        href="/assets/img/ios_splash/iPhone_8__iPhone_7__iPhone_6s__iPhone_6__4.7__iPhone_SE_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
        href="/assets/img/ios_splash/4__iPhone_SE__iPod_touch_5th_generation_and_later_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
        href="/assets/img/ios_splash/12.9__iPad_Pro_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
        href="/assets/img/ios_splash/11__iPad_Pro__10.5__iPad_Pro_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 820px) and (device-height: 1180px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
        href="/assets/img/ios_splash/10.9__iPad_Air_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
        href="/assets/img/ios_splash/10.5__iPad_Air_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
        href="/assets/img/ios_splash/10.2__iPad_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
        href="/assets/img/ios_splash/9.7__iPad_Pro__7.9__iPad_mini__9.7__iPad_Air__9.7__iPad_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 744px) and (device-height: 1133px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
        href="/assets/img/ios_splash/8.3__iPad_Mini_landscape.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 430px) and (device-height: 932px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
        href="/assets/img/ios_splash/iPhone_14_Pro_Max_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 393px) and (device-height: 852px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
        href="/assets/img/ios_splash/iPhone_14_Pro_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
        href="/assets/img/ios_splash/iPhone_14_Plus__iPhone_13_Pro_Max__iPhone_12_Pro_Max_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
        href="/assets/img/ios_splash/iPhone_14__iPhone_13_Pro__iPhone_13__iPhone_12_Pro__iPhone_12_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
        href="/assets/img/ios_splash/iPhone_13_mini__iPhone_12_mini__iPhone_11_Pro__iPhone_XS__iPhone_X_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
        href="/assets/img/ios_splash/iPhone_11_Pro_Max__iPhone_XS_Max_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="/assets/img/ios_splash/iPhone_11__iPhone_XR_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
        href="/assets/img/ios_splash/iPhone_8_Plus__iPhone_7_Plus__iPhone_6s_Plus__iPhone_6_Plus_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="/assets/img/ios_splash/iPhone_8__iPhone_7__iPhone_6s__iPhone_6__4.7__iPhone_SE_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="/assets/img/ios_splash/4__iPhone_SE__iPod_touch_5th_generation_and_later_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="/assets/img/ios_splash/12.9__iPad_Pro_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="/assets/img/ios_splash/11__iPad_Pro__10.5__iPad_Pro_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 820px) and (device-height: 1180px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="/assets/img/ios_splash/10.9__iPad_Air_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="/assets/img/ios_splash/10.5__iPad_Air_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="/assets/img/ios_splash/10.2__iPad_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="/assets/img/ios_splash/9.7__iPad_Pro__7.9__iPad_mini__9.7__iPad_Air__9.7__iPad_portrait.png">
    <link rel="apple-touch-startup-image"
        media="screen and (device-width: 744px) and (device-height: 1133px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="/assets/img/ios_splash/8.3__iPad_Mini_portrait.png">
    <link rel="icon" href="/assets/img/favicon.ico?d=18032023" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"
        integrity="sha256-5nZ/2843WU4Jpw4eqVWKHsjY0aG4VGag+fzxfKCPq0k=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"
        integrity="sha256-VfASL/Wqq0hhl9HOIkU9lsi3JYJ8wHlMD/EHp+S2rys=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/rotate/lg-rotate.min.js"
        integrity="sha256-DiF+g1qKxf0Rksrgh0ZOVJUkyWv6vLn38h75HC7ELfU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css"
        integrity="sha256-Eg8Gfr1vMiM54szM1+h+M018fqWyvVU/Ml8q48Oub+g=" crossorigin="anonymous">
</head>

<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-lg shadow bg-gradient">
            <div class="container-fluid">
                <a class="navbar-brand me-0 me-lg-3 fw-bold" href="/"><span
                        class="d-flex align-items-center"><img class="me-2" src="/assets/img/logo.svg"
                            width="40px" height="auto">Tai Loc
                        Hostel</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/"><i class="fa-solid fa-house me-2"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/rooms/all"><i class="fa-solid fa-door-open me-2"></i>Rooms</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="/admin"><i
                                        class="fa-solid fa-chart-line me-2"></i>Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/manage/rooms"><i
                                        class="fa-solid fa-list-check me-2"></i>Manage rooms</a>
                            </li>
                        @endauth
                    </ul>
                    @guest
                        <form class="d-none d-lg-flex rounded-2 w-50" role="search" action="/search">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                    name="keyword">
                                <button class="btn btn-success" type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    @endguest
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="/login"><i
                                        class="fa-solid fa-right-to-bracket me-2"></i>Login</a>
                            </li>
                        @endguest
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><span class="me-2"><img
                                            src="/assets/img/img.svg"
                                            data-src="/assets/img/avatar/{{ Auth::user()->avatar }}" class="me-2 lazy"
                                            width="32" height="auto"
                                            alt="Avatar">{{ Auth::user()->fullname }}</span></a>
                                <ul class="dropdown-menu dropdown-menu-lg-end">
                                    <li><a class="dropdown-item" href="/user/view/{{ Auth::user()->id }}"><i
                                                class="fa-solid fa-user me-2"></i>View profile</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/logout"><i
                                                class="fa-solid fa-right-from-bracket me-2"></i>Log out</a></li>
                                </ul>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="flex-shrink-0">
        <div class="container mt-4 mb-5">
            @guest
                <form class="d-flex d-lg-none mb-3" role="search" action="/search">
                    <div class="input-group border border-dark rounded-2">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                            name="keyword">
                        <button class="btn btn-success" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            @endguest
            <div class="dropup">
                <button class="animated-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fa-solid fa-comment"></i></button>
                <ul class="dropdown-menu dropdown-menu-lg-end" id="floatingBtnShow">
                    <li><button class="dropdown-item p-2 d-flex align-items-center displayMess" data-toggle="tooltip"
                            title='Messenger'><img class="me-2" src="/assets/img/messenger.svg" width="56px"
                                height="auto">Messenger</button></li>
                    <li><button class="dropdown-item p-2 d-flex align-items-center displayMess" data-toggle="tooltip"
                            title='Zalo'><img class="me-2" src="/assets/img/zalo.svg" width="56px"
                                height="auto">Zalo</button></li>
                </ul>
            </div>
            @yield('content')
        </div>
        <script script type="text/javascript">
            $('.displayMess').click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                Swal.fire({
                    title: 'This function is not complete !',
                    text: 'Please try again later !',
                    icon: 'warning',
                    scrollbarPadding: false,
                    allowOutsideClick: false,
                })
            });
        </script>
    </main>
    <footer class="mt-auto py-4 text-light bg-gradient">
        <div class="container mb-3">
            @guest
                <div class="row row-cols-1 row-cols-lg-3 g-3">
                @endguest
                @auth
                    <div class="row row-cols-1 row-cols-lg-4 g-3">
                    @endauth
                    <div class="col text-center text-lg-start">
                        <img class="mb-2" src="/assets/img/logo.svg" width="40px" height="auto">
                        <h5 class="fw-bold mb-2" style="color:rgba(248, 177, 21, 1);">Tai Loc Hostel</h5>
                        <p class="mb-0"><b>Tai Loc Hostel</b> is a hostel for students with good price.</p>
                    </div>
                    <div class="col text-center text-lg-start">
                        <h5 class="fw-bold" style="color:rgba(248, 177, 21, 1);">Rooms:</h5>
                        @guest
                            <div class="mb-2"><a href="/rooms/all">All rooms</a></div>
                            <div class="mb-2"><a href="/rooms/available">All available rooms</a></div>
                            <div><a href="/rooms/rented">All rented rooms</a></div>
                        @endguest
                        @auth
                            <div class="mb-2"><a href="/admin/manage/rooms">Manage rooms</a></div>
                            <div><a href="/rooms/modify/add">Add rooms</a></div>
                        @endauth
                    </div>
                    @auth
                        <div class="col text-center text-lg-start">
                            <h5 class="fw-bold" style="color:rgba(248, 177, 21, 1);">Account:</h5>
                            <div class="mb-2"><a href="/user/view/{{ Auth::user()->id }}">View profile</a></div>
                            <div><a href="/logout">Log out</a></div>
                        </div>
                    @endauth
                    <div class="col text-center text-lg-start">
                        <h5 class="fw-bold" style="color:rgba(248, 177, 21, 1);">Maps:</h5>
                        <a href="https://www.google.com/maps/place/10%C2%B023'47.2%22N+105%C2%B025'15.8%22E/@10.3963101,105.4211017,19.96z/data=!4m4!3m3!8m2!3d10.39643!4d105.421065"
                            type="button" target="_blank"><img class="lazy img-fluid rounded-3"
                                src="/assets/img/img.svg" data-src="/assets/img/map.jpg" style="width:600px;"
                                title="Click to open Google Maps"></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="text-center"><span>&copy; 2023 <b>Tai Loc Hostel</b>. All rights reserved.</span></div>
            </div>
    </footer>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script>
        if ('serviceWorker' in navigator) {
            navigator
                .serviceWorker
                .register(
                    '/sw.js'
                )
                .then(function(reg) {});
        }
    </script>
    <script src="/assets/js/yall.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", yall);
    </script>
    <script script src="/assets/js/main.js"></script>
    <script src="/assets/js/datatables.min.js"></script>
    <script src="/assets/js/pdfmake.min.js"></script>
    <script src="/assets/js/vfs_fonts.js"></script>
</body>

</html>
