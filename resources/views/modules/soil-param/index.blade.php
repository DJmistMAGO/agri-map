@extends('layouts.app-content')

@section('title')
    Soil Parameter
@endsection

@push('styles')
    @livewireStyles()
@endpush

@section('content')
    <x-success></x-success>
    <x-errors></x-errors>
    <div class="col-md-12">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class=" fas fa-leaf text-success"></i>
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
                            @forelse ($params as $item)
                                <tr>
                                    <td>{{ $item->location }}</td>
                                    <td>{{ $item->land_type }}</td>
                                    <td>{{ $item->soil_type }}</td>
                                    <td>{{ $item->soil_ph }}</td>
                                    <td>{{ $item->soil_temperature }}</td>
                                    <td>{{ $item->soil_moisture }}</td>
                                    <td>
                                        <a href="{{ route('soil-param.show', $item->id) }}" class="btn btn-sm btn-success"
                                            title="View details">
                                            VIEW
                                        </a>
                                        <a href="{{ route('soil-param.edit', $item->id) }}" class="btn btn-sm btn-primary"
                                            title="Edit details">
                                            EDIT
                                        </a>
                                        @livewire('soil-param.delete', ['soilParam' => $item], key($item->id))
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No records found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @livewireScripts()
@endpush
