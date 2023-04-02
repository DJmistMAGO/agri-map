@extends('layouts.app')

@section('title')
    Welcome to Agri-Map!
@endsection

@section('content')
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
                        <a class="nav-link text-uppercase m-scroll-top" href="#landingHome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase m-scroll-top" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase m-scroll-top" href="#weather">Weather</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase m-scroll-top" href="#soil">Map & Soil Parameters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase m-scroll-top" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase m-scroll-top" href="{{ route('login') }}">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section id="landingHome" class="" style="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="" data-aos="fade-right" data-aos-duration="1500"
                            style=" padding: 20px; height: 280px; /* From https://css.glass */
                        background: rgba(255, 255, 255, 0.24);
                        border-radius: 16px;
                        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                        backdrop-filter: blur(2.9px);
                        -webkit-backdrop-filter: blur(2.9px);
                        border: 1px solid rgba(255, 255, 255, 0.307);">
                            <h2 class="display-2 mb-3" style="font-weight: 900;">
                                <span class="" style="color: #24812d;">AGRI</span><span class=""
                                    style="color: #ffc400;">-Map</span>
                            </h2>
                            <h1>Digital Mapping System</h1>
                            <p class="h4 mb-3">For the Municipality of Bulan</p>
                            <a href="#about" class="btn btn-primary btn-lg mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center d-flex justify-content-center" style="">
                        <div class="d-flex justify-content-center align-items-center"
                            style="background-color: #ffff; padding: 20px; border-radius: 50%; height: 400px; width: 400px;">
                            <img data-aos="fade-left" data-aos-duration="1500" src="{{ asset('images/5.5.png') }}"
                                alt="agrimap" class="" style="max-height: 350px">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="">
            <div class="container">
                <h2 class="text-center text-uppercase mb-10 display-3"><b>About Us</b></h2>
                <div class="row">
                    <div class="col-md-4 text-center mt-3">
                        <div class="card card-custom px-8 py-8" style="height: 360px;" data-aos="zoom-in"
                            data-aos-duration="1000">
                            <i class="fa fa-map fa-4x mb-5 text-primary"></i>
                            <h3 class="mb-5 mt-5">Accurate Soil Analysis</h3>
                            <p class="text-justify">Our soil mapping system is designed to help farmers and agricultural
                                professionals accurately analyze
                                the health and quality of their soil. By providing detailed soil maps and data, we empower
                                our
                                users
                                to make informed decisions about their crops and land management practices.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mt-3">
                        <div class="card card-custom px-8 py-8"style="height: 360px;" data-aos="zoom-in"
                            data-aos-duration="1000">
                            <i class="fa fa-wifi fa-4x mb-5 text-warning"></i>
                            <h3 class="mb-5 mt-5">Advanced Technology</h3>
                            <p class="text-justify">Our system uses state-of-the-art technology to collect and analyze soil
                                data,
                                including satellite
                                imagery and ground-based sensors. Our algorithms are designed to provide high-resolution
                                maps of
                                soil properties such as nutrient levels, pH, and moisture content.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mt-3">
                        <div class="card card-custom px-8 py-8" style="height: 360px; " data-aos="zoom-in"
                            data-aos-duration="1000">
                            <i class="fa fa-leaf fa-4x mb-5 text-success"></i>
                            <h3 class="mb-5 mt-5">Sustainable Agriculture</h3>
                            <p class="text-justify">We believe that sustainable agriculture starts with a deep understanding
                                of
                                the
                                soil. Our system is
                                designed to help farmers and land managers optimize their use of resources, reduce waste,
                                and
                                improve crop yields. With our soil mapping system, you can take control of your soil health
                                and
                                make
                                data-driven decisions for the future of your farm or land.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="weather" style="background-color: #062f58;">
            <div class="container">
                <h2 class="text-center text-white text-uppercase mb-10 display-3"><b>Weather</b></h2>
                <div class="row">
                    <div class="col-md-12 text-center mt-3 d-flex justify-content-center">
                        <div>
                            <iframe width="1250" height="450"
                                src="https://embed.windy.com/embed2.html?lat=12.626&lon=123.912&detailLat=12.686&detailLon=123.907&width=650&height=450&zoom=11&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=true&metricWind=default&metricTemp=default&radarRange=-1"
                                frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="soil" class=" bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="mapid" style="height: 400px;"></div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-center">Soil Parameters</h2>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis arcu et
                            turpis
                            scelerisque
                            auctor. Curabitur volutpat eget felis id maximus. Donec id velit dolor.</p>
                            <div class="row m-0" >
                                <a href="" class="col bg-primary px-6 py-8 rounded-xl mr-7 mb-7">
                                    <div>
                                        <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                                            <span class="svg-icon svg-icon-white svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo13\dist/../src/media/svg/icons\Text\Filter.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M4.30769231,13 C3.03318904,13 2,11.9926407 2,10.75 C2,9.92157288 2.76923077,8.67157288 4.30769231,7 C5.84615385,8.67157288 6.61538462,9.92157288 6.61538462,10.75 C6.61538462,11.9926407 5.58219558,13 4.30769231,13 Z M19.6923077,13 C18.4178044,13 17.3846154,11.9926407 17.3846154,10.75 C17.3846154,9.92157288 18.1538462,8.67157288 19.6923077,7 C21.2307692,8.67157288 22,9.92157288 22,10.75 C22,11.9926407 20.966811,13 19.6923077,13 Z M8.30769231,20 C7.03318904,20 6,18.9926407 6,17.75 C6,16.9215729 6.76923077,15.6715729 8.30769231,14 C9.84615385,15.6715729 10.6153846,16.9215729 10.6153846,17.75 C10.6153846,18.9926407 9.58219558,20 8.30769231,20 Z M16,20 C14.7254967,20 13.6923077,18.9926407 13.6923077,17.75 C13.6923077,16.9215729 14.4615385,15.6715729 16,14 C17.5384615,15.6715729 18.3076923,16.9215729 18.3076923,17.75 C18.3076923,18.9926407 17.2745033,20 16,20 Z" fill="#000000" opacity="0.3"/>
                                                    <path d="M12,13 C13.2745033,13 14.3076923,11.9926407 14.3076923,10.75 C14.3076923,9.92157288 13.5384615,8.67157288 12,7 C10.4615385,8.67157288 9.69230769,9.92157288 9.69230769,10.75 C9.69230769,11.9926407 10.7254967,13 12,13 Z" fill="#000000"/>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                        </span>
                                        <p class="text-white font-weight-bold font-size-h6">SOIL PH</p>
                                    </div>
                                </a>
                                <a href="" class="col bg-success px-6 py-8 rounded-xl mb-7">
                                    <div>
                                        <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M5.74714567,11.0425758 C4.09410362,9.9740356 3,8.11478859 3,6 C3,2.6862915 5.6862915,0 9,0 C11.7957591,0 14.1449096,1.91215918 14.8109738,4.5 L17.25,4.5 C19.3210678,4.5 21,6.17893219 21,8.25 C21,10.3210678 19.3210678,12 17.25,12 L8.25,12 C7.28817895,12 6.41093178,11.6378962 5.74714567,11.0425758 Z" fill="#000000"/>
                                                    <path d="M4,21 L4,19 L17.5,19 C18.3284271,19 19,18.3284271 19,17.5 L19,17 C19,16.4477153 18.5522847,16 18,16 C17.4477153,16 17,16.4477153 17,17 L17,18 L15,18 L15,17 C15,15.3431458 16.3431458,14 18,14 C19.6568542,14 21,15.3431458 21,17 L21,17.5 C21,19.4329966 19.4329966,21 17.5,21 L4,21 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(12.500000, 17.500000) scale(1, -1) translate(-12.500000, -17.500000) "/>
                                                    <path d="M4,24 L4,22 L10.5,22 C11.3284271,22 12,21.3284271 12,20.5 L12,20 C12,19.4477153 11.5522847,19 11,19 C10.4477153,19 10,19.4477153 10,20 L10,21 L8,21 L8,20 C8,18.3431458 9.34314575,17 11,17 C12.6568542,17 14,18.3431458 14,20 L14,20.5 C14,22.4329966 12.4329966,24 10.5,24 L4,24 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000000, 20.500000) scale(1, -1) translate(-9.000000, -20.500000) "/>
                                                </g>
                                            </svg>
                                        </span>
                                        <p class="text-white font-weight-bold font-size-h6 mt-2">SOIL MOISTURE</p>
                                    </div>
                                </a>
                            </div>
                            <div class="row m-0">
                                <a href="" class="col bg-info px-6 py-8 rounded-xl mr-7 mb-7">
                                    <div>
                                        <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                                            <span class="svg-icon svg-icon-white svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo13\dist/../src/media/svg/icons\Text\Filter.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z" fill="#000000"/>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                        </span>
                                        <p class="text-white font-weight-bold font-size-h6">SOIL TYPE</p>
                                    </div>
                                </a>
                                <a href=""  class="col bg-warning px-6 py-8 rounded-xl mb-7">
                                    <div>
                                        <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M18,16 C18,19.3137085 15.3137085,22 12,22 C8.6862915,22 6,19.3137085 6,16 C6,13.7791529 7.20659589,11.8401214 9,10.8026932 L9,5 C9,3.34314575 10.3431458,2 12,2 C13.6568542,2 15,3.34314575 15,5 L15,10.8026932 C16.7934041,11.8401214 18,13.7791529 18,16 Z M12,4 C11.4477153,4 11,4.44771525 11,5 L11,10 C11,10.5522847 11.4477153,11 12,11 C12.5522847,11 13,10.5522847 13,10 L13,5 C13,4.44771525 12.5522847,4 12,4 Z" fill="#000000" fill-rule="nonzero"/>
                                                </g>
                                            </svg>
                                        </span>
                                        <p class="text-white font-weight-bold font-size-h6 mt-2">SOIL TEMP</p>
                                    </div>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 p-4">
                        <div class="card card-custom p-6">
                            <h2 class="mb-5 display-4">Contact Us</h2>
                            <form>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary col-md-12">Send</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/chat.png') }}" alt="Contact Us Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    @livewireScripts

    <script>
        var geojson = <?php echo json_encode($geojson); ?>;

        // initialize map and set its center and zoom level
        var map = L.map('mapid').setView([12.668945714230706, 123.88067528173328], 18);

        // add tile layer to map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
            maxZoom: 18,
            tileSize: 512,
            zoomOffset: -1
        }).addTo(map);

        L.geoJSON(geojson, {
            pointToLayer: function(feature, latlng) {
                return L.marker(latlng);
            },
            onEachFeature: function(feature, layer) {
                var popupContent = "<p>Land Type: " + feature.properties.land_type + "</p>" +
                    "<p>Soil Type: " + feature.properties.soil_type + "</p>" +
                    "<p>Soil Moisture: " + feature.properties.soil_moisture + "</p>" +
                    "<p>Soil Temperature: " + feature.properties.soil_temperature + "</p>" +
                    "<p>Soil PH: " + feature.properties.soil_ph + "</p>";
                layer.bindPopup(popupContent);
            }
        }).addTo(map);
    </script>
@endpush
