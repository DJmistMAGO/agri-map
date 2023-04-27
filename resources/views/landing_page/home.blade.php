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
                        ">
                            <h2 class="display-2 mb-3" style="font-weight: 900;">
                                <span class="" style="color: #315000; text-stroke: 3px white;">AGRI</span><span
                                    class="" style="color: #ffc400;">-Map</span>
                            </h2>
                            <h1 class="text-white">Digital Mapping System</h1>
                            <p class="h4 mb-3 text-white-50">For the Municipality of Bulan</p>
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
                                of the soil. Our system is designed to help farmers and land managers optimize their use of
                                resources, reduce waste, and improve crop yields. With our soil mapping system, you can take
                                control of your soil health and make data-driven decisions for the future of your farm or
                                land.</p>
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
                                src="https://embed.windy.com/embed2.html?lat=12.668945714230706&lon=123.88067528173328&detailLat=12.668945714230706&detailLon=123.88067528173328&width=650&height=450&zoom=11&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=true&metricWind=default&metricTemp=default&radarRange=-1"
                                frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="soil" class=" bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div id="mapid" style="height: 450px;"></div>
                    </div>
                    <div class="col-md-4">
                        <h2 class="text-center">Soil Parameters</h2>
                        <div class="row m-0 text-center">
                            <button onclick="landType()" class="col bg-danger px-6 py-8 rounded-xl mr-7 mb-7"
                                style="text-decoration: none; border: none;">
                                <div class="d-flex align-items-center">
                                    <span class="svg-icon svg-icon-3x svg-icon-white mr-4">
                                        <span class="svg-icon svg-icon-white svg-icon-2x">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" x="2" y="5"
                                                        width="20" height="2" rx="1" />
                                                    <rect fill="#000000" opacity="0.3" x="2" y="17"
                                                        width="20" height="2" rx="1" />
                                                    <rect fill="#000000" opacity="0.3" x="2" y="9"
                                                        width="5" height="2" rx="1" />
                                                    <rect fill="#000000" opacity="0.3" x="16" y="13"
                                                        width="6" height="2" rx="1" />
                                                    <rect fill="#000000" opacity="0.3" x="9" y="9"
                                                        width="13" height="2" rx="1" />
                                                    <rect fill="#000000" opacity="0.3" x="2" y="13"
                                                        width="12" height="2" rx="1" />
                                                </g>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="text-white font-weight-bold font-size-h6">LAND TYPE</span>
                                </div>
                            </button>
                            <button onclick="soilPh()" class="col bg-primary px-6 py-8 rounded-xl mr-7 mb-7"
                                style="text-decoration: none; border: none;">
                                <div class="d-flex align-items-center">
                                    <span class="svg-icon svg-icon-3x svg-icon-white mr-4">
                                        <span class="svg-icon svg-icon-white svg-icon-2x">
                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo13\dist/../src/media/svg/icons\Text\Filter.svg-->
                                            <svg fill="#ffffff" height="800px" width="800px" version="1.1"
                                                id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M316.362,73.297c-4.466,0-8.084,3.62-8.084,8.084v30.72h-35.57v-30.72c0-4.465-3.619-8.084-8.084-8.084
                                                        c-4.466,0-8.084,3.62-8.084,8.084v81.92c0,4.465,3.618,8.084,8.084,8.084c4.466,0,8.084-3.62,8.084-8.084v-35.032h35.57v35.032
                                                        c0,4.465,3.618,8.084,8.084,8.084c4.466,0,8.084-3.62,8.084-8.084v-81.92C324.446,76.916,320.828,73.297,316.362,73.297z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M238.754,73.297h-43.116c-4.466,0-8.084,3.62-8.084,8.084v38.804v43.116c0,4.465,3.618,8.084,8.084,8.084
                                                        c4.466,0,8.084-3.62,8.084-8.084v-35.032h35.032c4.466,0,8.084-3.62,8.084-8.084V81.381
                                                        C246.838,76.916,243.219,73.297,238.754,73.297z M230.669,112.101h-26.947V89.465h26.947V112.101z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M381.036,0H130.964c-4.466,0-8.084,3.62-8.084,8.084v53.895c0,4.465,3.618,8.084,8.084,8.084
                                                        c4.466,0,8.084-3.62,8.084-8.084v-45.81h233.903v216.643L300.5,293.187h-89l-72.452-60.376V98.627
                                                        c0-4.465-3.618-8.084-8.084-8.084c-4.466,0-8.084,3.62-8.084,8.084v137.971c0,2.399,1.065,4.675,2.908,6.211l74.7,62.25v121.249
                                                        c0,4.465,3.619,8.084,8.084,8.084h9.162v69.524c0,4.465,3.618,8.084,8.084,8.084h60.362c4.466,0,8.084-3.62,8.084-8.084v-69.524
                                                        h9.162c4.466,0,8.084-3.62,8.084-8.084V305.058l74.7-62.25c1.843-1.536,2.908-3.811,2.908-6.211V8.084
                                                        C389.12,3.62,385.502,0,381.036,0z M278.097,495.832h-44.194v-61.44h44.194V495.832z M295.343,418.223h-78.686V309.356h78.686
                                                        V418.223z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M346.543,38.804H165.457c-4.466,0-8.084,3.62-8.084,8.084v150.905c0,4.465,3.619,8.084,8.084,8.084h181.086
                                                        c4.466,0,8.084-3.62,8.084-8.084V46.888C354.627,42.424,351.009,38.804,346.543,38.804z M338.459,189.709H173.541V54.973h164.918
                                                        V189.709z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M215.04,215.579c-15.156,0-27.486,12.33-27.486,27.486c0,15.156,12.33,27.486,27.486,27.486
                                                        c15.156,0,27.486-12.33,27.486-27.486C242.526,227.909,230.196,215.579,215.04,215.579z M215.04,254.383
                                                        c-6.241,0-11.318-5.077-11.318-11.318c0-6.241,5.077-11.318,11.318-11.318c6.241,0,11.318,5.077,11.318,11.318
                                                        C226.358,249.306,221.281,254.383,215.04,254.383z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M296.96,215.579c-15.156,0-27.486,12.33-27.486,27.486c0,15.156,12.33,27.486,27.486,27.486
                                                        c15.156,0,27.486-12.33,27.486-27.486C324.446,227.909,312.116,215.579,296.96,215.579z M296.96,254.383
                                                        c-6.241,0-11.318-5.077-11.318-11.318c0-6.241,5.077-11.318,11.318-11.318s11.318,5.077,11.318,11.318
                                                        C308.278,249.306,303.201,254.383,296.96,254.383z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M273.246,353.995c-4.466,0-8.084,3.62-8.084,8.084v29.736c0,4.465,3.618,8.084,8.084,8.084
			                                            c4.466,0,8.084-3.62,8.084-8.084v-29.736C281.331,357.614,277.712,353.995,273.246,353.995z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M273.246,323.368c-4.466,0-8.084,3.62-8.084,8.084v8.511c0,4.465,3.618,8.084,8.084,8.084c4.466,0,8.084-3.62,8.084-8.084
			                                            v-8.511C281.331,326.988,277.712,323.368,273.246,323.368z" />
                                                    </g>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="text-white font-weight-bold font-size-h6">SOIL PH</span>
                                </div>
                            </button>
                            <button onclick="soilMoisture()" class="col bg-success px-6 py-8 rounded-xl mr-7 mb-7"
                                style="text-decoration: none; border: none;">
                                <div class="d-flex align-items-center">
                                    <span class="svg-icon svg-icon-3x svg-icon-white mr-4">
                                        <span class="svg-icon svg-icon-white svg-icon-2x">
                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo13\dist/../src/media/svg/icons\Text\Filter.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M4.30769231,13 C3.03318904,13 2,11.9926407 2,10.75 C2,9.92157288 2.76923077,8.67157288 4.30769231,7 C5.84615385,8.67157288 6.61538462,9.92157288 6.61538462,10.75 C6.61538462,11.9926407 5.58219558,13 4.30769231,13 Z M19.6923077,13 C18.4178044,13 17.3846154,11.9926407 17.3846154,10.75 C17.3846154,9.92157288 18.1538462,8.67157288 19.6923077,7 C21.2307692,8.67157288 22,9.92157288 22,10.75 C22,11.9926407 20.966811,13 19.6923077,13 Z M8.30769231,20 C7.03318904,20 6,18.9926407 6,17.75 C6,16.9215729 6.76923077,15.6715729 8.30769231,14 C9.84615385,15.6715729 10.6153846,16.9215729 10.6153846,17.75 C10.6153846,18.9926407 9.58219558,20 8.30769231,20 Z M16,20 C14.7254967,20 13.6923077,18.9926407 13.6923077,17.75 C13.6923077,16.9215729 14.4615385,15.6715729 16,14 C17.5384615,15.6715729 18.3076923,16.9215729 18.3076923,17.75 C18.3076923,18.9926407 17.2745033,20 16,20 Z"
                                                        fill="#000000" opacity="0.3" />
                                                    <path
                                                        d="M12,13 C13.2745033,13 14.3076923,11.9926407 14.3076923,10.75 C14.3076923,9.92157288 13.5384615,8.67157288 12,7 C10.4615385,8.67157288 9.69230769,9.92157288 9.69230769,10.75 C9.69230769,11.9926407 10.7254967,13 12,13 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="text-white font-weight-bold font-size-h6">SOIL MOISTURE</span>
                                </div>
                            </button>
                            <button onclick="soilType()" class="col bg-info px-6 py-8 rounded-xl mr-7 mb-7"
                                style="text-decoration: none; border: none;">
                                <div class="d-flex align-items-center">
                                    <span class="svg-icon svg-icon-3x svg-icon-white mr-4">
                                        <span class="svg-icon svg-icon-white svg-icon-2x">
                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo13\dist/../src/media/svg/icons\Text\Filter.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="text-white font-weight-bold font-size-h6">SOIL TYPE</span>
                                </div>
                            </button>
                            <button onclick="soilTemp()" class="col bg-warning px-6 py-8 rounded-xl mr-7 mb-7"
                                style="text-decoration: none; border: none;">
                                <div class="d-flex align-items-center">
                                    <span class="svg-icon svg-icon-3x svg-icon-white mr-4">
                                        <span class="svg-icon svg-icon-white svg-icon-2x">
                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo13\dist/../src/media/svg/icons\Text\Filter.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M18,16 C18,19.3137085 15.3137085,22 12,22 C8.6862915,22 6,19.3137085 6,16 C6,13.7791529 7.20659589,11.8401214 9,10.8026932 L9,5 C9,3.34314575 10.3431458,2 12,2 C13.6568542,2 15,3.34314575 15,5 L15,10.8026932 C16.7934041,11.8401214 18,13.7791529 18,16 Z M12,4 C11.4477153,4 11,4.44771525 11,5 L11,10 C11,10.5522847 11.4477153,11 12,11 C12.5522847,11 13,10.5522847 13,10 L13,5 C13,4.44771525 12.5522847,4 12,4 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="text-white font-weight-bold font-size-h6">SOIL TYPE</span>
                                </div>
                            </button>
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
        var polygonCoords = [];
        var params = [];

        var map = L.map('mapid').setView([12.668945714230706, 123.88067528173328], 16);

        // add tile layer to map
        L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>',
            maxZoom: 18,
            tileSize: 512,
            zoomOffset: -1
        }).addTo(map);

        var baseMaps = {
            "Street View": L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                maxZoom: 19,
                tileSize: 512,
                zoomOffset: -1
            }),
            "Satellite View": L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>',
                maxZoom: 18,
                tileSize: 512,
                zoomOffset: -1
            })
        };
        L.control.layers(baseMaps).addTo(map);

        function landType() {
            // Remove existing layers
            map.eachLayer(function(layer) {
                if (layer.options.color) {
                    map.removeLayer(layer);
                }
            });

            // Add new layers
            @foreach ($params as $param)
                var polygon = @json($param->polygon);
                var landType = '{{ $param->land_type }}';
                var color;
                if (landType === 'Highland') {
                    color = 'red';
                } else if (landType === 'Lowland') {
                    color = 'blue';
                } else {
                    color = 'yellow';
                }
                var layer = L.geoJSON(JSON.parse(polygon), {
                    style: {
                        color: color
                    }
                }).addTo(map);
                layer.bindPopup(
                    '<div class="text-left"><strong>Location:</strong> {{ $param->location }}<br><strong>Land Type:</strong> {{ $param->land_type }}<br><strong>Soil Type:</strong> {{ $param->soil_type }}<br><strong>Soil Temperature:</strong> {{ $param->soil_temperature }}&deg;C<br><strong>Soil PH:</strong> {{ $param->soil_ph }}</div>'
                );
                layer.on('mouseover', function(e) {
                    this.openPopup();
                });
            @endforeach
        }

        function soilPh() {
            // Remove existing layers
            map.eachLayer(function(layer) {
                if (layer.options.color) {
                    map.removeLayer(layer);
                }
            });

            // Add new layers
            @foreach ($params as $param)
                var polygon = @json($param->polygon);
                var soilPh = '{{ $param->soil_ph }}';
                var color;
                if (soilPh > 6.8) {
                    color = 'red';
                } else if (soilPh > 5.6) {
                    color = 'blue';
                } else if (soilPh > 5.1) {
                    color = 'green';
                } else if (soilPh > 4.6) {
                    color = 'yellow';
                } else {
                    color = 'orange';
                }

                var layer = L.geoJSON(JSON.parse(polygon), {
                    style: {
                        color: color
                    }
                }).addTo(map);
                layer.bindPopup(
                    '<div class="text-left"><strong>Location:</strong> {{ $param->location }}<br><strong>Land Type:</strong> {{ $param->land_type }}<br><strong>Soil Type:</strong> {{ $param->soil_type }}<br><strong>Soil Temperature:</strong> {{ $param->soil_temperature }}&deg;C<br><strong>Soil PH:</strong> {{ $param->soil_ph }}</div>'
                );
                layer.on('mouseover', function(e) {
                    this.openPopup();
                });
            @endforeach
        }




        function soilMoisture() {
            @foreach ($params as $param)
                var polygon = @json($param->polygon);
                var soilMoisture = '{{ $param->soil_moisture }}';
                var color;
                if (soilMoisture === '<15% = Very Dry') {
                    color = 'blue';
                } else if (soilMoisture === '15-20% = Dry') {
                    color = 'green';
                } else if (soilMoisture === '20-25% = Moist') {
                    color: 'yellow';
                }
                else if (soilMoisture === '25-30% = Wet') {
                    color: 'orange';
                }
                else {
                    color: 'red';
                }

                var layer = L.geoJSON(JSON.parse(polygon), {
                    style: {
                        color: color
                    }
                }).addTo(map);
                layer.bindPopup(
                    '<div class="text-left"><strong>Location:</strong> {{ $param->location }}<br><strong>Land Type:</strong> {{ $param->land_type }}<br><strong>Soil Type:</strong> {{ $param->soil_type }}<br><strong>Soil Temperature:</strong> {{ $param->soil_temperature }}&deg;C<br><strong>Soil PH:</strong> {{ $param->soil_ph }}</div>'
                );
                layer.on('mouseover', function(e) {
                    this.openPopup();
                });
            @endforeach
        }
    </script>
@endpush
