@extends('layouts.app-content')

@section('title')
    Create | Soil Parameter
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class=" fas fa-leaf text-success"></i>
                    </span>
                    <h3 class="card-label">
                        Create Soil Parameter
                    </h3>
                </div>
                <div class="card-toolbar">
                    <a href="{{ route('soil-param.index') }}" class="btn btn-light-danger font-weight-bolder mr-2">
                        CANCEL
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="form-label ">PH Level</label>
                        <input type="text" class="form-control" placeholder="Enter Ph" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label ">Temperature</label>
                        <input type="text" class="form-control" placeholder="Enter Temperature" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label ">Moisture</label>
                        <input type="text" class="form-control" placeholder="Enter Moisture" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label ">Land Type</label>
                        <select class="form-control " id="kt_select2_1" name="param">
                            <option value="">--Please Select--</option>
                            <option value="1">Agricultural</option>
                            <option value="2">Forest</option>
                            <option value="3">Grassland</option>
                            <option value="4">Wetland</option>
                            <option value="5">Desert</option>
                            <option value="6">Urban</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label ">Soil Type</label>
                        <select class="form-control " id="kt_select2_1" name="param">
                            <option value="">--Please Select--</option>
                            <option value="1">Clay</option>
                            <option value="2">Sandy</option>
                            <option value="3">Loamy</option>
                            <option value="4">Silty</option>
                            <option value="5">Peaty</option>
                            <option value="6">Chalky</option>
                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label ">Latitude</label>
                        <input type="text" class="form-control" placeholder="Enter Latitude" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label ">Longitude</label>
                        <input type="text" class="form-control" placeholder="Enter Longitude" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
