@extends('layouts.app-content')

@section('title')
    Soil Parameter | Edit
@endsection

@section('content')
    <form action="{{ route('soil-param.update', [$soilParam]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <x-card title="View Record" :back-url="route('soil-param.index')">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Drag the marker or click on the map to select location</label>
                                <div id="mapid" style="height: 400px;"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Longitude</label>
                                    <input type="text" class="form-control" name="longitude" id="est_lng" required
                                        readonly>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Latitude</label>
                                    <input  type="text" class="form-control" name="latitude" id="est_lat" required
                                        readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Land Type</label>
                                    <select disabled name="land_type" class="form-control" required>
                                        <option value="">--Select land type--</option>
                                        @foreach ($landtype as $ltype)
                                            <option value="{{ $ltype }}" @selected($soilParam->land_type == $ltype)>
                                                {{ $ltype }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Soil Type</label>
                                    <select disabled name="soil_type" class="form-control" required>
                                        <option value="">--Select Soil Type--</option>
                                        @foreach ($soiltype as $stype)
                                            <option value="{{ $stype }}" @selected($soilParam->soil_type == $stype)>
                                                {{ $stype }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Temperature</label>
                                    <div class="input-group">
                                        <input readonly type="number" name="soil_temperature" class="form-control"
                                            placeholder="Temperature" value="{{ $soilParam->soil_temperature }}" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">°C</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Soil Moisture</label>
                                    <select disabled name="soil_moisture" class="form-control" required>
                                        <option value="">--Select Soil Moisture--</option>
                                        @foreach ($soil_moisture as $moist)
                                            <option value="{{ $moist }}" @selected($soilParam->soil_moisture == $moist)>
                                                {{ $moist }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Soil pH</label>
                                    <select disabled name="soil_ph" class="form-control" required>
                                        <option value="">--Select Soil pH--</option>
                                        @foreach ($soil_ph as $ph)
                                            <option value="{{ $ph }}" @selected($soilParam->soil_ph == $ph)>
                                                {{ $ph }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- submit button --}}
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary col-md-12 mt-5">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-card>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    @livewireScripts
    <script>
        var map = L.map('mapid').setView([{{ $soilParam->latitude }}, {{ $soilParam->longitude }}], 18);

        // add tile layer to map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
            maxZoom: 18,
            tileSize: 512,
            zoomOffset: -1
        }).addTo(map);

        // add draggable marker to map
        var marker = L.marker([{{ $soilParam->latitude }}, {{ $soilParam->longitude }}], {
            draggable: true
        }).addTo(map);

        marker.on('drag', function(e) {
            var latlng = marker.getLatLng();
            var lat = latlng.lat;
            var lng = latlng.lng;

            marker.bindPopup("<b>Your marker location</b><br />Latitude: " + lat + "<br />Longitude: " + lng)
                .openPopup();

            document.getElementById("est_lat").value = lat;
            document.getElementById("est_lng").value = lng;
        });

        // update marker position when map is clicked
        map.on('click', function(e) {
            marker.setLatLng(e.latlng);
            var popLat = e.latlng.lat;
            var popLng = e.latlng.lng;

            var popup = L.popup()
                .setLatLng([popLat, popLng])
                .setContent('<h4 class="text-center text-primary" id="popUp">You\'ve clicked here!</h4>' +
                    '<h6 style="font-weight: bold;" id="popUp"> Latitude: ' + popLat + '</h6>' +
                    '<h6 style="font-weight: bold;" id="popUp"> Longitude: ' + popLng + '</h6>')
                .openOn(map);

            document.getElementById("est_lat").value = popLat;
            document.getElementById("est_lng").value = popLng;
        });

        // update input fields with initial marker position
        document.getElementById("est_lat").value = marker.getLatLng().lat;
        document.getElementById("est_lng").value = marker.getLatLng().lng;
    </script>
@endpush
