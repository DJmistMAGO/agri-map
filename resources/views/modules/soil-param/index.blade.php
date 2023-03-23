@extends('layouts.app-content')

@section('title')
    Soil Parameter
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="  text-primary"></i>
                    </span>
                    <h2 class="card-label"> Soil Parameters </h2>
                </div>
                <div class="card-toolbar">
                    <a href="{{ route('soil-param.create') }}" class="btn btn-sm btn-success font-weight-bold">
                        <i class="fas fa-mountain"></i> ADD SOIL PARAMETER
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                        <thead>
                            <tr class="text-left">
                                <th>Location</th>
                                <th>Land Type</th>
                                <th>Soil Type</th>
                                <th>Ph</th>
                                <th>Temperature</th>
                                <th>Moisture</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
