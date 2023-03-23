@extends('layouts.app-content')

@section('title')
    Soil Parameter | Create
@endsection

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <x-card title="Add Record" :back-url="route('soil-param.index')">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{-- <label>Location</label> --}}
                                <div id="mapid" style="height: 400px;"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Longitude</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Latitude</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Land Type</label>
                                    <select name="land_type" class="form-control">
                                        <option value="">--Select land type--</option>
                                        @foreach ($landtype as $ltype)
                                            <option value="{{ $ltype }}" @selected(old('land_type') == $ltype)>
                                                {{ $ltype }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Soil Type</label>
                                    <select name="soil_type" class="form-control">
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
                                        <input type="number" name="temperature" class="form-control"
                                            placeholder="Temperature" value="{{ old('temperature') }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text">°C</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Soil Moisture</label>
                                    <select name="moisture" class="form-control">
                                        <option value="">--Select Soil Moisture--</option>
                                        @foreach ($soil_moisture as $moist)
                                            <option value="{{ $moist }}" @selected(old('moisture') == $moist)>
                                                {{ $moist }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Soil pH</label>
                                    <select name="ph" class="form-control">
                                        <option value="">--Select Soil pH--</option>
                                        @foreach ($soil_ph as $ph)
                                            <option value="{{ $ph }}" @selected(old('ph') == $ph)>
                                                {{ $ph }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- submit button --}}
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
