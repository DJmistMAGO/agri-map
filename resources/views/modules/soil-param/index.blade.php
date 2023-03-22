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
                        <i class=" fas fa-leaf text-success"></i>
                    </span>
                    <h3 class="card-label">
                        Soil Parameter
                    </h3>
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
                                <th>Land Type</th>
                                <th>Soil Type</th>
                                <th>Ph</th>
                                <th>Moisture</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>
                                        <a href="{{-- route('soil-param.show',1) --}}" class="btn btn-sm btn-success" title="View details">
                                            VIEW
                                        </a>
                                        <a href="{{-- route('soil-param.edit',1) --}}" class="btn btn-sm btn-primary" title="Edit details">
                                            EDIT
                                        </a>
                                        <a href="{{-- route('soil-param.destroy',1) --}}" class="btn btn-sm btn-danger" title="Delete">
                                            DELETE
                                        </a>
                                </tr>
                        </tbody>
                    </table>
                    {{-- {!! $donors->appends(\Request::except('page'))->render() !!} --}}
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
