@extends('layouts.app')

@section('title')
    Welcome to Agri-Map!
@endsection

@section('content')
    <section id="landingHome" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Welcome to AGri-Map</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod bibendum
                        tortor, vel tincidunt quam ullamcorper eu.</p>
                    <a href="#about" class="btn btn-primary btn-lg mt-3">Learn More</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('location.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center text-uppercase mb-5">About Us</h2>
            <div class="row">
                <div class="col-md-4 text-center mt-3">
                    <i class="fa fa-map fa-4x mb-5 text-primary"></i>
                    <h3>Accurate Soil Analysis</h3>
                    <p class="text-justify">Our soil mapping system is designed to help farmers and agricultural
                        professionals accurately analyze
                        the health and quality of their soil. By providing detailed soil maps and data, we empower our users
                        to make informed decisions about their crops and land management practices.</p>
                </div>
                <div class="col-md-4 text-center mt-3">
                    <i class="fa fa-wifi fa-4x mb-5 text-warning"></i>
                    <h3>Advanced Technology</h3>
                    <p class="text-justify">Our system uses state-of-the-art technology to collect and analyze soil data,
                        including satellite
                        imagery and ground-based sensors. Our algorithms are designed to provide high-resolution maps of
                        soil properties such as nutrient levels, pH, and moisture content.</p>
                </div>
                <div class="col-md-4 text-center mt-3">
                    <i class="fa fa-leaf fa-4x mb-5 text-success"></i>
                    <h3>Sustainable Agriculture</h3>
                    <p class="text-justify">We believe that sustainable agriculture starts with a deep understanding of the
                        soil. Our system is
                        designed to help farmers and land managers optimize their use of resources, reduce waste, and
                        improve crop yields. With our soil mapping system, you can take control of your soil health and make
                        data-driven decisions for the future of your farm or land.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="soil" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="mapid" style="height: 400px;"></div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Soil Parameters</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis arcu et turpis
                        scelerisque
                        auctor. Curabitur volutpat eget felis id maximus. Donec id velit dolor.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 p-4">
                    <h2>Contact Us</h2>
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
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/chat.png') }}" alt="Contact Us Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    @livewireScripts
    <script>
        // initialize map and set its center and zoom level
        var map = L.map('mapid').setView([12.668945714230706, 123.88067528173328], 18);

        // add tile layer to map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
            maxZoom: 18,
            tileSize: 512,
            zoomOffset: -1
        }).addTo(map);

        // add marker to map
        L.marker([12.668945714230706, 123.88067528173328]).addTo(map)
            .bindPopup("<b>Bulan National High School!</b><br />Lorem Ipsum.").openPopup();
    </script>
@endpush
