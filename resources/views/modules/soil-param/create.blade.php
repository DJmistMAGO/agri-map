@extends('layouts.app-content')

@section('title')
    Soil Parameter | Create
@endsection

@section('content')
    <form action="{{ route('soil-param.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <x-card title="Add Record" :back-url="route('soil-param.index')">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Draw a polygon first on the map on your specified location</label>
                                <div id="mapid" style="height: 500px;"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    {{-- <label>Location</label> --}}
                                    <input type="hidden" name="polygon" id="polygon" class="form-control"
                                        value="{{ old('polygon') }}" readonly>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" class="form-control" value="{{ old('location') }}"
                                        required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Land Type</label>
                                    <select name="land_type" class="form-control" required>
                                        <option value="">--Select land type--</option>
                                        @foreach ($landtype as $ltype)
                                            <option value="{{ $ltype }}" @selected(old('land_type') == $ltype)>
                                                {{ $ltype }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Soil Type</label>
                                    <select name="soil_type" class="form-control" required>
                                        <option value="">--Select Soil Type--</option>
                                        @foreach ($soiltype as $stype)
                                            <option value="{{ $stype }}" @selected(old('soil_type') == $stype)>
                                                {{ $stype }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Temperature</label>
                                    <div class="input-group">
                                        <input type="number" name="soil_temperature" class="form-control" step="0.01"
                                            placeholder="Temperature" value="{{ old('soil_temperature') }}" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">°C</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Soil Moisture</label>
                                    <select name="soil_moisture" class="form-control" required>
                                        <option value="">--Select Soil Moisture--</option>
                                        @foreach ($soil_moisture as $moist)
                                            <option value="{{ $moist }}" @selected(old('soil_moisture') == $moist)>
                                                {{ $moist }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Soil pH</label>
                                    <input type="number" name="soil_ph" step="0.01" class="form-control" required
                                        value="{{ old('soil_ph') }}">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" id="submit" class="btn btn-primary"
                                        style="display: none;">Submit</button>
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
        var map = L.map('mapid').setView([12.668945714230706, 123.88067528173328], 15);

        L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>',
            maxZoom: 19,
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

        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);
        var drawControl = new L.Control.Draw({
            position: 'bottomleft',
            draw: {
                polygon: {
                    shapeOptions: {
                        color: 'purple' //polygons being drawn will be purple color
                    },
                    allowIntersection: false,
                    drawError: {
                        color: 'orange',
                        timeout: 1000
                    },
                    showArea: true, //the area of the polygon will be displayed as it is drawn.
                    metric: false,
                    repeatMode: false,

                },
                polyline: false, //polyline type has been disabled.
                circlemarker: false, //circlemarker type has been disabled.
                rect: false, //rectangle type has been disabled.
                circle: false, //circle type has been disabled.
            },
            edit: {
                featureGroup: drawnItems
            }
        });
        map.addControl(drawControl);
        map.on('draw:created', function(e) {
            var type = e.layerType,
                layer = e.layer;
            drawnItems.addLayer(layer);
            // show submit button
            $('#submit').show();
            $('#polygon').val(JSON.stringify(layer.toGeoJSON())); //saving the layer to the input field using jQuery
        });

        // on edit, update the input field and save the layer
        map.on('draw:edited', function(e) {
            var layers = e.layers;
            layers.eachLayer(function(layer) {
                $('#polygon').val(JSON.stringify(layer
                    .toGeoJSON())); //saving the layer to the input field using jQuery
            });
        });

        map.on('draw:deleted', function(e) {
            var type = e.layerType,
                layer = e.layer;
            // hide submit button
            $('#submit').hide();
            $('#polygon').val(''); //saving the layer to the input field using jQuery
        });
    </script>
@endpush
