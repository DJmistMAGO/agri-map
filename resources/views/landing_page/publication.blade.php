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
    <link href="{{ asset('assets/aos-master/dist/aos.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/aos-master/dist/aos.js') }}"></script>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    {{-- Leaflet --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/custom/leaflet/dist/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/custom/leaflet/leaflet.draw.css') }}">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <style>
        [x-cloak] {
            display: none !important;
        }

        .navbar {
            background-color: #16a849;
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

        .nav-item .nav-link:active {
            color: rgba(232, 225, 24, 0.927) !important;
        }

        .nav-item .nav-link:hover {
            color: rgba(232, 225, 24, 0.927) !important;
        }

        #about,
        #contact,
        #weather,
        #soil,
        #contact,
        #gallery, {
            height: 100vh;
            padding: 90px 0px
        }

        #mapid {
            height: 400px;
        }

        #landingHome {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #landingHome img{
            height: 100vh;
            width: 100%;
        }

        #gallery img{
            width: 1000px;
            height: 400px;
        }

        /* responsive query */
        @media only screen and (max-width: 767px) {
            #about,
            #contact,
            #weather,
            #soil,
            #contact {
                height: 40%;
            }
        }
    </style>

    <style>

#weather_news .card {
    background: #000000d8;
    color: white;
    padding: 2em;
    border-radius: 30px;
    width: 100%;
    max-width: 420px;
    margin: 1em;
}

#weather_news .search {
    display: flex;
    align-items: center;
    justify-content: center;
}

#weather_news button {
    margin: 0.5em;
    border-radius: 50%;
    border: none;
    height: 44px;
    width: 44px;
    outline: none;
    background: #7c7c7c2b;
    color: white;
    cursor: pointer;
    transition: 0.2s ease-in-out;
}

#weather_news input.search-bar {
    border: none;
    outline: none;
    padding: 0.4em 1em;
    border-radius: 24px;
    background: #7c7c7c2b;
    color: white;
    font-family: inherit;
    font-size: 105%;
    width: calc(100% - 100px);
}

#weather_news .btn:hover {
    background: black;
    color: white;
    border: none;
}

#weather_news h1.temp {
    margin: 0;
    margin-bottom: 0.4em;
}

#weather_news .description {
    text-transform: uppercase;
    margin-right: 8px;
    font-size: larger;
    font-family: 'Arialle', sans-serif;
    font-weight: bold;
}

#weather_news .weather-div.loading {
    visibility: hidden;
    max-height: 20px;
    position: relative;
}

#weather_news .weather-div.loading:after {
    visibility: visible;
    content: "loading...";
    color: white;
    position: absolute;
    top: 0;
    left: 20;
}

#weather_news .weather-div img{
    width: 100px;
}

#weather_news .weather-div img:hover{
    scale: 1.5;
    transition: 1s ease-in-out;
}

#weather_news .search-bar:focus{
    border: white 1px solid;
}
    </style>

</head>

<body id="landing" data-spy="scroll" data-target="#navbar">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top" data-spy="affix" data-offset-top="100" data-offset-bottom="100"
        id="navbar">
        <div class="container-fluid ms-5 me-5">
            <a class="navbar-brand mb-auto" href="#">
                <div style="display: flex; align-items: center;">
                    <img src="{{ asset('images/7.png') }}" alt="" class="d-inline-block align-text-top max-h-40px">
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
                        <a class="nav-link text-uppercase m-scroll-top" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase m-scroll-top" href="{{ route('login') }}">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 <main>
    <section class="publication">
        <div class="container">
            <div class="row mt-25">
                <div class="col-md-12  mb-5">
                    <h1 class="" style="color: #05b514;"><b>Publication & Announcement</b></h1>
                </div>
            </div>
            <div class="d-flex">
                <div class="col-md-9">
                <div class="row">
                        @foreach ($news as $new)
                        <div class="col-md-3 mt-2">
                            <div class="card" >
                                <img src="{{ asset('images/' . $new->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">{{ $new->title }}</h5>
                                  <p class="card-text">{{ substr_replace($new->content, "...", 50) }}</p>
                                  <a href="{{ route('pub.view', $new->id) }}" class="btn btn-primary">Read More</a>
                                </div>
                              </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row">
                        <h2>Announcement</h2>
                    </div>
                        <table>
                            @forelse ( $announcements as $ann )
                            <tr>
                                <td class="mb-1" style="padding: 5px; border-bottom: 1px solid; width: 250px">
                                    <h5><b>{{ $ann->title }}</b></h5>
                                    <p style="font-size: 12px;">{{ $ann->date->format('F d, Y') }}</p>
                                    <p>{{ $ann->content }}</p>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="1" class="text-center">No Announcements</td>
                            </tr>
                            @endforelse
                        </table>
                    </div>
                </div>

        </div>
    </section>
 </main>
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
 <script src="{{ asset('assets/plugins/custom/leaflet/dist/leaflet-src.js') }}"></script>
 <script src="{{ asset('assets/plugins/custom/leaflet/leaflet.draw.js') }}"></script>
 <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
 <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
 <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
 <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <script>
     AOS.init();
 </script>
 <script>
     $(document).ready(function() {
         // mApp.init();
         // mApp.initScrollTop();
         $('body').scrollspy({
             target: "#navbar",
             offset: 50
         });
     });
 </script>
 @stack('scripts')
 <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
