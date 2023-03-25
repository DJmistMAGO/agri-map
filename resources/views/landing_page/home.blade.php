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

        <section id="landingHome" class=""
            style="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6" >
                        <div class="" data-aos="fade-right" data-aos-duration="1500"  style=" padding: 20px; height: 280px; /* From https://css.glass */
                        background: rgba(255, 255, 255, 0.24);
                        border-radius: 16px;
                        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                        backdrop-filter: blur(2.9px);
                        -webkit-backdrop-filter: blur(2.9px);
                        border: 1px solid rgba(255, 255, 255, 0.307);">
                            <h2 class="display-2 mb-3" style="font-weight: 900;">
                            <span class="" style="color: #24812d;">AGRI</span><span class="" style="color: #ffc400;">-Map</span></h2>
                            <h1>Digital Mapping System</h1>
                            <p class="h4 mb-3">For the Municipality of Bulan</p>
                            <a href="#about" class="btn btn-primary btn-lg mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center"
                        style="">
                        <img  data-aos="fade-left" data-aos-duration="1500"  src="{{ asset('images/5.5.png') }}" alt="agrimap" class="" style="max-height: 400px">
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="">
            <div class="container">
                <h2 class="text-center text-uppercase mb-10 display-3"><b>About Us</b></h2>
                <div class="row">
                    <div class="col-md-4 text-center mt-3" >
                        <div class="card card-custom px-8 py-8" style="height: 360px;" data-aos="zoom-in" data-aos-duration="1000">
                            <i class="fa fa-map fa-4x mb-5 text-primary"></i>
                            <h3 class="mb-5 mt-5">Accurate Soil Analysis</h3>
                            <p class="text-justify">Our soil mapping system is designed to help farmers and agricultural
                                professionals accurately analyze
                                the health and quality of their soil. By providing detailed soil maps and data, we empower our
                                users
                                to make informed decisions about their crops and land management practices.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mt-3">
                        <div class="card card-custom px-8 py-8"style="height: 360px;"  data-aos="zoom-in" data-aos-duration="1000">
                            <i class="fa fa-wifi fa-4x mb-5 text-warning"></i>
                            <h3 class="mb-5 mt-5">Advanced Technology</h3>
                            <p class="text-justify">Our system uses state-of-the-art technology to collect and analyze soil
                                data,
                                including satellite
                                imagery and ground-based sensors. Our algorithms are designed to provide high-resolution maps of
                                soil properties such as nutrient levels, pH, and moisture content.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mt-3" >
                        <div class="card card-custom px-8 py-8" style="height: 360px; " data-aos="zoom-in" data-aos-duration="1000">
                            <i class="fa fa-leaf fa-4x mb-5 text-success"></i>
                            <h3 class="mb-5 mt-5">Sustainable Agriculture</h3>
                            <p class="text-justify">We believe that sustainable agriculture starts with a deep understanding of
                                the
                                soil. Our system is
                                designed to help farmers and land managers optimize their use of resources, reduce waste, and
                                improve crop yields. With our soil mapping system, you can take control of your soil health and
                                make
                                data-driven decisions for the future of your farm or land.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="weather"  style="background-color: #062f58;">
            <div class="weather">
                <h2 class="text-center text-white text-uppercase mb-10 display-3"><b>Weather</b></h2>
                <div class="row">
                    <div class="col-md-12 text-center mt-3">
                        <iframe width="1250" height="450"
                            src="https://embed.windy.com/embed2.html?lat=12.626&lon=123.912&detailLat=12.686&detailLon=123.907&width=650&height=450&zoom=11&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=true&metricWind=default&metricTemp=default&radarRange=-1"
                            frameborder="0"></iframe>
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
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
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
