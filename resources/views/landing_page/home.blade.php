@extends('layouts.app')

@section('title')
Welcome to Agri-Map!
@endsection



@section('content')
<nav class="navbar navbar-expand-md navbar-dark fixed-top" data-spy="affix" data-offset-top="100" data-offset-bottom="100" id="navbar">
    <div class="container-fluid ms-5 me-5">
        <a class="navbar-brand mb-auto" href="#">
            <div style="display: flex; align-items: center;">
                <img src="{{ asset('images/7.png') }}" alt="" class="d-inline-block align-text-top max-h-40px">
            </div>
        </a>
        <button class="navbar-toggler text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link text-uppercase m-scroll-top" href="{{ route('pub.index') }}">Publication</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase m-scroll-top" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase m-scroll-top" href="#team">Our Team</a>
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
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('banner-img/farm1.webp') }}" class="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('banner-img/farm2.png') }}" class="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('banner-img/farm3.jpg') }}" class="" alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="{{ asset('banner-img/farm4.jpg') }}" class="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('banner-img/Screenshot2.png') }}" class="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('banner-img/Screenshot3.png') }}" class="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('banner-img/Screenshot4.png') }}" class="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('banner-img/Screenshot5.png') }}" class="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('banner-img/Screenshot6.png') }}" class="" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="" id="date_time">
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
                        <div id="dateTime"><span id="current-date"></span> | <span id="current-time"></span></div>
                        <a href="#about" class="btn btn-primary btn-lg mt-3">Learn More</a>
                    </div>
                </div>
        </div>
    </section>

    <section id="about" class="" style="padding: 90px 90px;">
        <div class="container">
            <h2 class="text-center text-uppercase mb-10 display-3"><b>About Us</b></h2>
            <div class="row">
                <div class="col-md-4 text-center mt-3">
                    <div class="card card-custom px-8 py-8" style="height: 360px;" data-aos="zoom-in" data-aos-duration="1000">
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
                    <div class="card card-custom px-8 py-8" style="height: 360px;" data-aos="zoom-in" data-aos-duration="1000">
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
                    <div class="card card-custom px-8 py-8" style="height: 360px; " data-aos="zoom-in" data-aos-duration="1000">
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

    <section id="weather" style="background-color: #d3eb23; padding: 90px 90px;">
        <div class="container">
            <h2 class="text-center text-white text-uppercase mb-10 display-3"><b>Weather</b></h2>
            <div class="row">
                <div class="col-md-6 text-center mt-3 d-flex justify-content-center">
                    <div>
                        <iframe width="600" height="450" src="https://embed.windy.com/embed2.html?lat=12.668945714230706&lon=123.88067528173328&detailLat=12.668945714230706&detailLon=123.88067528173328&width=650&height=450&zoom=11&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=true&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="col-md-6 pl-10" id="weather_news">
                    <div class="card">
                        <div class="search mb-3">
                            <input type="text" placeholder="Search location" class="search-bar" />
                            <span>
                                <button class="btn btn-light rounded-pill">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                        <div class="weather-div loading text-center">
                            <h2 class="city">Weather in Bulan</h2>
                            <h1 class="temp">51&#8451;</h1>
                            <img src="http://openweathermap.org/img/wn/02n.png" alt="" class="icon" style="height:150px; width: 150px;" />
                            <div class="description">Cloudy</div>
                        </div>
                        <div class="humidity mt-4">Humidity: 60%</div>
                        <div class="wind">Wind speed: 6.2 km/h</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="soil" class=" bg-light" style="padding: 90px 90px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div id="mapid" style="height: 450px;"></div>
                </div>
                <div class="col-md-5">
                    <h2 class="text-center">Soil Parameters</h2>
                    <p class="text-justify">Soil parameters are the characteristics used to
                        measure and describe the soil. These parameters can be used to determine the land type, soil pH,
                        soil type, soil moisture, and soil temperature.</p>
                    <div class="row m-0 text-center justify-content-center">
                        <button onclick="landType()" class="btn btn-danger rounded-xl mr-3 mb-3 d-inline-block">
                            <i class="fas fa-mountain mr-2"></i>
                            LAND TYPE
                        </button>

                        <button onclick="soilPh()" class="btn btn-primary rounded-xl mr-3 mb-3 d-inline-block">
                            <i class="fa fa-flask mr-2"></i>
                            SOIL PH
                        </button>

                        <button onclick="soilType()" class="btn btn-info rounded-xl mr-3 mb-3 d-inline-block">
                            <i class="fas fa-filter mr-2"></i>
                            SOIL TYPE
                        </button>

                        <button onclick="soilMoisture()" class="btn btn-success rounded-xl mr-3 mb-3 d-inline-block">
                            <i class="fas fa-tint-slash mr-2"></i>
                            SOIL MOISTURE
                        </button>

                        <button onclick="soilTemp()" class="btn btn-warning rounded-xl mr-3 mb-3 d-inline-block">
                            <i class="fas fa-thermometer-half mr-2"></i>
                            SOIL TEMPERATURE
                        </button>
                    </div>
                    <p>Click on the buttons above to display data on the map.</p>
                    <div class="card border-dark border rounded-sm">
                        <div class="card-body">
                            <h4 class="text-center mt-0">Legends</h4>
                            <div class="p-2" id="landTypeLegends" style="display: none;">
                                <span><i class="fas fa-square" style="color: red;"></i> Highland</span> <br>
                                <span><i class="fas fa-square" style="color: blue;"></i> Lowland</span> <br>
                                <span><i class="fas fa-square" style="color: yellow;"></i> Coastal</span>
                            </div>
                            <div class="p-2" id="soilPhLegends" style="display: none;">
                                <span><i class="fas fa-square" style="color: blue;"></i> 6.8 or higher (Nearly Neutral
                                    to Extremely Alkaline)</span> <br>
                                <span><i class="fas fa-square" style="color: green;"></i> 5.6 - 6.8 (Moderately and
                                    Slightly Acid)</span> <br>
                                <span><i class="fas fa-square" style="color: yellow;"></i> 5.1 - 5.5 (Strongly
                                    Acid)</span> <br>
                                <span><i class="fas fa-square" style="color: orange;"></i> 4.6 – 5.0 (Very Strongly
                                    Acid)</span> <br>
                                <span><i class="fas fa-square" style="color: red;"></i> Less than 4.6 (Extremely
                                    Acid)</span>
                            </div>
                            <div class="p-2" id="soilTypeLegends" style="display: none;">
                                <span><i class="fas fa-square" style="color: yellow;"></i> Macabare Sandy Loam</span>
                                <br>
                                <span><i class="fas fa-square" style="color: orange;"></i> Beach Sand</span> <br>
                                <span><i class="fas fa-square" style="color: blue;"></i> Bulusan Sandy Loam</span>
                                <br>
                                <span><i class="fas fa-square" style="color: red;"></i> Bascaran Sandy Loam</span>
                                <br>
                                <span><i class="fas fa-square" style="color: green;"></i> Ubay Clay Loam</span> <br>
                                <span><i class="fas fa-square" style="color: purple;"></i> Silay Fine Sandy
                                    Loam</span>
                            </div>
                            <div class="p-2" id="soilMoistureLegends" style="display: none;">
                                <span><i class="fas fa-square" style="color: blue;"></i> 30% or higher (Very
                                    Wet)</span> <br>
                                <span><i class="fas fa-square" style="color: green;"></i> 25% – 30% (Wet)</span> <br>
                                <span><i class="fas fa-square" style="color: yellow;"></i> 20% – 25% (Moderate)</span>
                                <br>
                                <span><i class="fas fa-square" style="color: orange;"></i> 15% – 20% (Dry)</span> <br>
                                <span><i class="fas fa-square" style="color: red;"></i> Less than 15% (Very
                                    Dry)</span>
                            </div>
                            <div class="p-2" id="soilTempLegends" style="display: none;">
                                <span><i class="fas fa-square" style="color: red;"></i> 60&deg;C above </span> <br>
                                <span><i class="fas fa-square" style="color: orange;"></i> 49&deg;C </span> <br>
                                <span><i class="fas fa-square" style="color: yellow;"></i> 45&deg;C </span>
                                <br>
                                <span><i class="fas fa-square" style="color: green;"></i> 38&deg;C </span> <br>
                                <span><i class="fas fa-square" style="color: blue;"></i> 32&deg;C</span> <br>
                                <span><i class="fas fa-square" style="color: violet;"></i> 21&deg;C</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="" style="padding: 90px 90px;">
        <div class="container">
            <h2 class="text-center text-uppercase mb-10 display-3"><b>Gallery</b></h2>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('gallery/2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('gallery/3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('gallery/4.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <a href="{{ route('pub.gallery') }}" class="btn btn-success col-md-3 mt-5 text-center">View More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="" style="padding: 90px 90px;">
        <div class="container">
            <h2 class="text-center text-uppercase mb-10 display-3" style="color: #4ee22d"><b>MEET OUR TEAM</b></h2>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center flex-wrap">
                    <div class="box text-center" style="background-color: #ebf37f;">
                        <div class="imgBx">
                            <img src="{{ asset('team/MHARIAN.png') }}" alt="" style="border: solid 10px #FFEA00;">
                        </div>
                        <div class="content">
                            <p>
                                <h5 class="mb-0">PERSONAL INFORMATION</h5><br>
                                <b>Mharian Marcela M. Balbas</b> <br>
                                Age: 18 years-old<br>
                                Birthdate: November 25, 2004<br>
                                Religion: Roman Catholic<br>
                                Civil Status: Single<br>
                                Nationality: Filipino<br>

                                <b>EDUCATION:</b><br>
                                Bulan South Central School - 2012-2017<br>
                                Bulan National High School (Junior High School) - 2017-2021<br>
                                Bulan National High School (Junior High School) - 2021- present<br>

                                <b>SKILLS AND INTERESTS:</b> <br>
                                Creativity<br>
                                Good Organization Skills<br>
                                Teamwork and Leadership Skill<br>
                                Multitasking Skill<br>
                                Communicative Skill<br>
                            </p>
                        </div>
                    </div>

                    <div class="box text-center" style="background-color: #ebf37f;">
                        <div class="imgBx">
                            <img src="{{ asset('team/JHENYL.jpg') }}" alt="" style="border: solid 10px #FFEA00;">
                        </div>
                        <div class="content">
                            <p>
                               <h5>PERSONAL INFORMATION<br></h5>
                            <b>Jhenyl G. Luzuriaga<br></b>
                                Age: 17 years-old<br>
                                Birthdate: October 14, 2005<br>
                                Religion: Roman Catholic<br>
                                Civil Status: Single<br>
                                Nationality: Filipino<br>

                                <b>EDUCATION:<br> </b>
                                Bulan North Central School-B 2012-2017<br>
                                Bulan National High School (Junior High School) - 2017-2021<br>
                                Bulan National High School (Junior High School) - 2021- present<br>

                               <b> SKILLS AND INTERESTS:<br> </b>
                                Problem Solving Skill<br>
                                Coordination & Organizing Skills<br>
                                Critical & Structured Thinking<br>
                                Creativity<br>
                            </p>
                        </div>
                    </div>

                    <div class="box text-center" style="background-color: #ebf37f;">
                        <div class="imgBx">
                            <img src="{{ asset('team/KRISHIA.jpg') }}" alt="" style="border: solid 10px #FFEA00;">
                        </div>
                        <div class="content">
                            <p>
                                <h5>PERSONAL INFORMATION<br> </h5>
                                 <b>Krishia Mae G. Dasig<br></b>
                                Age: 17 years-old<br>
                                Birthdate: November 18, 2005<br>
                                Religion: Roman Catholic<br>
                                Civil Status: Single<br>
                                Nationality: Filipino<br>

                                <b>EDUCATION:<br> </b>
                                Bulan South Central School - 2012-2017<br>
                                Bulan National High School (Junior High School) - 2017-2021<br>
                                Bulan National High School (Junior High School) - 2021- present<br>

                                <b>SKILLS AND INTERESTS:<br> </b>
                                Artistic skills<br>
                                Creativity<br>
                                Organizing skills<br>
                                Problem solving skills<br>

                            </p>
                        </div>
                    </div>

                    <div class="box text-center" style="background-color: #ebf37f;">
                        <div class="imgBx">
                            <img src="{{ asset('team/SAMANTHA.JPG') }}" alt="" style="border: solid 10px #FFEA00;">
                        </div>
                        <div class="content">
                            <p>
                                <h5>PERSONAL INFORMATION<br> </h5>
                                <b>Samantha Mae H. Lagahit<br></b>
                                Age: 18 years-old<br>
                                Birthdate: May 14, 2004<br>
                                Religion: Roman Catholic<br>
                                Civil Status: Single<br>
                                Nationality: Filipino<br>

                               <b> EDUCATION:<br> </b>
                                Bulan South Central School - 2012-2017<br>
                                Bulan National High School (Junior High School) - 2017-2021<br>
                                Bulan National High School (Junior High School) - 2021- present<br>

                                <b>SKILLS AND INTERESTS:<br> </b>
                                Time Management Skill
                                Problem Solving Skill<br>
                                Critical Thinking Skill<br>
                                Interpersonal Skill<br>
                            </p>
                        </div>
                    </div>

                    <div class="box text-center" style="background-color: #ebf37f;">
                        <div class="imgBx">
                            <img src="{{ asset('team/JENSELLE.jpg') }}" alt="" style="border: solid 10px #FFEA00;">
                        </div>
                        <div class="content">
                            <p>
                           <h5>PERSONAL INFORMATION<br></h5>
                                 <b> Jenselle G. Gratela<br></b>
                                Age: 18 years-old<br>
                                Birthdate: September 13, 2004<br>
                                Religion: Roman Catholic<br>
                                Civil Status: Single<br>
                                Nationality: Filipino<br>

                                <b>EDUCATION:<br> </b>
                                Bulan South Central School - 2012-2017<br>
                                Bulan National High School (Junior High School) - 2017-2021<br>
                                Bulan National High School (Junior High School) - 2021- present<br>

                                <b>SKILLS AND INTERESTS:<br> </b>
                                Art Skills<br>
                                Problem Solving Skills<br>
                                Multitasking Skill<br>
                                Creativity<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="" style="padding: 90px 90px;">
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
    $(document).ready(function() {
      function displayDateTime() {
        var now = new Date();
        var date = now.toDateString();
        var time = now.toLocaleTimeString();

        $('#current-date').text(date);
        $('#current-time').text(time);
      }

      displayDateTime();
      setInterval(displayDateTime, 1000);
    });
  </script>

<script>
    let weather = {
        "apiKey": "64abc55e59789f117ea006b07717f6e9"
        , fetchWeather: function(city) {
            fetch(
                    "https://api.openweathermap.org/data/2.5/weather?q=" +
                    city +
                    "&units=metric&APPID=" +
                    this.apiKey
                ).then((response) => response.json())
                .then((data) => this.displayWeather(data));
        }
        , displayWeather: function(data) {
            const {
                name
            } = data;
            const {
                icon
                , description
            } = data.weather[0];
            const {
                temp
                , humidity
            } = data.main;
            const {
                speed
            } = data.wind;
            document.querySelector(".city").innerText = "Weather in " + name;
            document.querySelector(".icon").src =
                "http://openweathermap.org/img/wn/" + icon + ".png"
            document.querySelector(".description").innerText = description;
            document.querySelector(".temp").innerText = temp + "°C";
            document.querySelector(".humidity").innerText = "Humidity: " + humidity + "%";
            document.querySelector(".wind").innerText = "Wind speed: " + speed + "km/h";
            document.querySelector(".weather-div").classList.remove("loading");
            // document.body.style.backgroundImage = "url('https://source.unsplash.com/random/forecast/?" + description +"')"
        }
        , search: function() {
            this.fetchWeather(document.querySelector(".search-bar").value);
        }
    };

    document.querySelector(".search button")
        .addEventListener("click", function() {
            weather.search();
        })

    document.querySelector(".search-bar").addEventListener("keyup", function(event) {
        if (event.key == "Enter") {
            weather.search();
        }
    })

    weather.fetchWeather("Bulan, Sorsogon");

</script>

<script>
    var polygonCoords = [];
    var params = [];

    var map = L.map('mapid').setView([12.668945714230706, 123.88067528173328], 14);

    // add tile layer to map
    L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
        , maxZoom: 18
        , tileSize: 512
        , zoomOffset: -1
    }).addTo(map);

    var baseMaps = {
        "Street View": L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            , maxZoom: 19
            , tileSize: 512
            , zoomOffset: -1
        })
        , "Satellite View": L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
            , maxZoom: 18
            , tileSize: 512
            , zoomOffset: -1
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

        // show legends
        document.getElementById('landTypeLegends').style.display = 'block';
        // hide other legends
        document.getElementById('soilMoistureLegends').style.display = 'none';
        document.getElementById('soilPhLegends').style.display = 'none';
        document.getElementById('soilTypeLegends').style.display = 'none';
        document.getElementById('soilTempLegends').style.display = 'none';

        // Add new layers
        @foreach($params as $param)
        var polygon = @json($param -> polygon);
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
            '<strong class="text-center font-size-lg">{{ $param->location }}</strong> <div class="text-left"><strong>Land Type:</strong> {{ $param->land_type }}<br><strong>Soil Type:</strong> {{ $param->soil_type }}<br><strong>Soil Moisture:</strong> {{ $param->soil_moisture }}<br><strong>Soil Temperature:</strong> {{ $param->soil_temperature }}&deg;C<br><strong>Soil PH:</strong> {{ $param->soil_ph }}</div>'
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

        // show legends
        document.getElementById('soilPhLegends').style.display = 'block';
        // hide other legends
        document.getElementById('landTypeLegends').style.display = 'none';
        document.getElementById('soilMoistureLegends').style.display = 'none';
        document.getElementById('soilTypeLegends').style.display = 'none';
        document.getElementById('soilTempLegends').style.display = 'none';

        // Add new layers
        @foreach($params as $param)
        var polygon = @json($param -> polygon);
        var soilPh = '{{ $param->soil_ph }}';
        var color;
        if (soilPh > 6.8) {
            color = 'blue';
        } else if (soilPh > 5.6) {
            color = 'green';
        } else if (soilPh > 5.1) {
            color = 'yellow';
        } else if (soilPh > 4.6) {
            color = 'orange';
        } else {
            color = 'red';
        }

        var layer = L.geoJSON(JSON.parse(polygon), {
            style: {
                color: color
            }
        }).addTo(map);
        layer.bindPopup(
            '<strong class="text-center font-size-lg">{{ $param->location }}</strong> <div class="text-left"><strong>Land Type:</strong> {{ $param->land_type }}<br><strong>Soil Type:</strong> {{ $param->soil_type }}<br><strong>Soil Moisture:</strong> {{ $param->soil_moisture }}<br><strong>Soil Temperature:</strong> {{ $param->soil_temperature }}&deg;C<br><strong>Soil PH:</strong> {{ $param->soil_ph }}</div>'
        );
        layer.on('mouseover', function(e) {
            this.openPopup();
        });
        @endforeach
    }

    function soilMoisture() {
        // Remove existing layers
        map.eachLayer(function(layer) {
            if (layer.options.color) {
                map.removeLayer(layer);
            }
        });

        // show legends
        document.getElementById('soilMoistureLegends').style.display = 'block';
        // hide other legends
        document.getElementById('landTypeLegends').style.display = 'none';
        document.getElementById('soilPhLegends').style.display = 'none';
        document.getElementById('soilTypeLegends').style.display = 'none';
        document.getElementById('soilTempLegends').style.display = 'none';


        // Add new layers
        @foreach($params as $param)
        var polygon = @json($param -> polygon);
        var soilMoisture = '{{ $param->soil_moisture }}';
        var color;
        if (soilMoisture === '<15% = Very Dry') {
            color = 'red';
        } else if (soilMoisture === '15-20% = Dry') {
            color = 'orange';
        } else if (soilMoisture === '20-25% = Moist') {
            color = 'yellow';
        } else if (soilMoisture === '25-30% = Wet') {
            color = 'green';
        } else {
            color = 'blue';
        }

        var layer = L.geoJSON(JSON.parse(polygon), {
            style: {
                color: color
            }
        }).addTo(map);
        layer.bindPopup(
            '<strong class="text-center font-size-lg">{{ $param->location }}</strong> <div class="text-left"><strong>Land Type:</strong> {{ $param->land_type }}<br><strong>Soil Type:</strong> {{ $param->soil_type }}<br><strong>Soil Moisture:</strong> {{ $param->soil_moisture }}<br><strong>Soil Temperature:</strong> {{ $param->soil_temperature }}&deg;C<br><strong>Soil PH:</strong> {{ $param->soil_ph }}</div>'
        );
        layer.on('mouseover', function(e) {
            this.openPopup();
        });
        @endforeach
    }

    function soilType() {
        // Remove existing layers
        map.eachLayer(function(layer) {
            if (layer.options.color) {
                map.removeLayer(layer);
            }
        });

        //show legends
        document.getElementById('soilTypeLegends').style.display = 'block';
        // hide other legends
        document.getElementById('landTypeLegends').style.display = 'none';
        document.getElementById('soilPhLegends').style.display = 'none';
        document.getElementById('soilMoistureLegends').style.display = 'none';
        document.getElementById('soilTempLegends').style.display = 'none';

        // Add new layers
        @foreach($params as $param)
        var polygon = @json($param -> polygon);
        var soilType = '{{ $param->soil_type }}';
        var color;
        if (soilType === "Macabare Sandy Loam") {
            color = 'yellow';
        } else if (soilType === "Beach Sand") {
            color = 'orange';
        } else if (soilType === "Bulusan Sandy Loam") {
            color = 'blue';
        } else if (soilType === "Bascaran Sandy Loam") {
            color = 'red';
        } else if (soilType === "Ubay Clay Loam") {
            color = 'green';
        } else {
            color = 'purple';
        }

        var layer = L.geoJSON(JSON.parse(polygon), {
            style: {
                color: color
            }
        }).addTo(map);
        layer.bindPopup(
            '<strong class="text-center font-size-lg">{{ $param->location }}</strong> <div class="text-left"><strong>Land Type:</strong> {{ $param->land_type }}<br><strong>Soil Type:</strong> {{ $param->soil_type }}<br><strong>Soil Moisture:</strong> {{ $param->soil_moisture }}<br><strong>Soil Temperature:</strong> {{ $param->soil_temperature }}&deg;C<br><strong>Soil PH:</strong> {{ $param->soil_ph }}</div>'
        );
        layer.on('mouseover', function(e) {
            this.openPopup();
        });
        @endforeach
    }

    function soilTemp() {
        // Remove existing layers
        map.eachLayer(function(layer) {
            if (layer.options.color) {
                map.removeLayer(layer);
            }
        });

        //show legends
        document.getElementById('soilTempLegends').style.display = 'block';
        // hide other legends
        document.getElementById('landTypeLegends').style.display = 'none';
        document.getElementById('soilPhLegends').style.display = 'none';
        document.getElementById('soilTypeLegends').style.display = 'none';
        document.getElementById('soilMoistureLegends').style.display = 'none';

        // Add new layers
        @foreach($params as $param)
        var polygon = @json($param -> polygon);
        var soilTemp = '{{ $param->soil_temperature }}';
        var color;
        if (soilTemp >= 60) {
            color = 'red';
        } else if (soilTemp >= 49) {
            color = 'orange';
        } else if (soilTemp >= 45) {
            color = 'yellow';
        } else if (soilTemp >= 38) {
            color = 'green';
        } else if (soilTemp >= 32) {
            color = 'blue';
        } else {
            color = 'violet';
        }

        var layer = L.geoJSON(JSON.parse(polygon), {
            style: {
                color: color
            }
        }).addTo(map);
        layer.bindPopup(
            '<strong class="text-center font-size-lg">{{ $param->location }}</strong> <div class="text-left"><strong>Land Type:</strong> {{ $param->land_type }}<br><strong>Soil Type:</strong> {{ $param->soil_type }}<br><strong>Soil Moisture:</strong> {{ $param->soil_moisture }}<br><strong>Soil Temperature:</strong> {{ $param->soil_temperature }}&deg;C<br><strong>Soil PH:</strong> {{ $param->soil_ph }}</div>'
        );
        layer.on('mouseover', function(e) {
            this.openPopup();
        });
        @endforeach
    }

</script>


@endpush
