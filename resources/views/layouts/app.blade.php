<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="Agri-Map" />
    <link rel="shortcut icon" href="{{ asset('location.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="url" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    @stack('links')
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Leaflet --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/custom/leaflet/leaflet.bundle.css') }}">

    <style>
        [x-cloak] {
            display: none !important;
        }

        .navbar {
            background-color: #062f58;
        }

        .navbar-brand {
            margin-right: auto;
            margin-left: 2rem;
            color: #fff;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #fff;
        }

        .nav-link {
            font-size: 1.2rem;
            margin-right: 1rem;
        }

        .nav-item .nav-link:hover {
            color: rgba(232, 225, 24, 0.927) !important;
        }

        section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding-top: 60px;
            min-height: calc(100vh - 60px);
        }

        #mapid {
            height: 400px;
        }

        #landingHome {
            padding-top: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body id="landing">
    {{-- <nav class="navbar sticky-top navbar-expand-lg navbar-dark"> --}}
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" data-spy="affix" data-offset-top="100"
        data-offset-bottom="100" <div class="container-fluid ms-5 me-5">
        <a class="navbar-brand mb-auto" href="#">
            <div style="display: flex; align-items: center;">
                <img src="{{ asset('location.png') }}" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                <h1 class="text-success m-0"> Agri-<span class="text-warning">Map</span></h1>
            </div>
        </a>
        <button class="navbar-toggler text-warning" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#landingHome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#soil">Soil Map & Parameters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="{{ route('login') }}">Log In</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    @section('content')@show

    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <script src="{{ asset('assets/plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    @stack('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
