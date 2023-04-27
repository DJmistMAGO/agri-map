@extends('layouts.app-content')

@section('title')
    Soil Parameter | Create
@endsection

@section('content')
    <x-errors></x-errors>
    <x-success></x-success>
    <form action="{{ route('soil-param.update', $soilParam->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <x-card title="Edit Record" :back-url="route('soil-param.index')">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Draw a polygon on the map on your specified location</label>
                                <div id="mapid" style="height: 500px;"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    {{-- <label>Location</label> --}}
                                    <input type="hidden" name="polygon" id="polygon" class="form-control"
                                        value="{{ $soilParam->polygon }}" readonly>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" class="form-control"
                                        value="{{ $soilParam->location }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Land Type</label>
                                    <select name="land_type" class="form-control" required>
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
                                    <select name="soil_type" class="form-control" required>
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
                                        <input type="number" name="soil_temperature" class="form-control" step="0.01"
                                            placeholder="Temperature" value="{{ $soilParam->soil_temperature }}" required>
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
                                            <option value="{{ $moist }}" @selected($soilParam->soil_moisture == $moist)>
                                                {{ $moist }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Soil pH</label>
                                    <input type="number" name="soil_ph" step="0.01" class="form-control" required
                                        value="{{ $soilParam->soil_ph }}">
                                </div>
                                {{-- submit button --}}
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
                maxZoom: 17,
                tileSize: 512,
                zoomOffset: -1
            })
        };
        L.control.layers(baseMaps).addTo(map);

        var drawnItems = new L.FeatureGroup();

        var polygon = @json($soilParam->polygon);
        layer = L.geoJSON(JSON.parse(polygon), {
            style: {
                color: 'purple'
            },
            onEachFeature: function(feature, layer) {
                drawnItems.addLayer(layer);
            }
        });

        drawnItems.addLayer(layer);

        // drawnItems.addLayer(layer);
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
                    edit: {
                        featureGroup: drawnItems
                    }
                },
                polyline: false,
                circlemarker: false,
                rect: false,
                circle: false,
                marker: false,
            },
            edit: {
                featureGroup: drawnItems
            }
        });
        map.addControl(drawControl);

        map.on(L.Draw.Event.CREATED, function(event) {
            var layer = event.layer;
            drawnItems.addLayer(layer);
            var polygon = JSON.stringify(drawnItems.toGeoJSON());
            $('#polygon').val(polygon);
        });

        map.on(L.Draw.Event.EDITED, function(event) {
            var layers = event.layers;
            var countOfEditedLayers = 0;
            layers.eachLayer(function(layer) {
                countOfEditedLayers++;
            });
            console.log("Edited " + countOfEditedLayers + " layers");
            var polygon = JSON.stringify(drawnItems.toGeoJSON());
            $('#polygon').val(polygon);
        });

        map.on(L.Draw.Event.DELETED, function(event) {
            var layers = event.layers;
            var countOfEditedLayers = 0;
            layers.eachLayer(function(layer) {
                countOfEditedLayers++;
            });
            console.log("Deleted " + countOfEditedLayers + " layers");
            var polygon = JSON.stringify(drawnItems.toGeoJSON());
            $('#polygon').val(polygon);
        });
    </script>
@endpush
