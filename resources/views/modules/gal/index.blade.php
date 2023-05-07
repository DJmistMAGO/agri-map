@extends('layouts.app-content')

@section('title')
    News
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
                        <i class=" far fa-newspaper text-success"></i>
                    </span>
                    <h2 class="card-label"> Agri Gallery </h2>
                </div>
                <div class="card-toolbar">
                    <a href="{{ route('agrigal.create') }}" class="btn btn-sm btn-success font-weight-bold">
                        <i class="far fa-newspaper"></i> ADD IMAGE
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                        <thead>
                            <tr class="text-left">
                                <th>Image</th>
                                <th style="min-width: 150px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($gals as $gal)
                                <tr>
                                    <td>
                                        <img style="height: 100px; width: auto;" class="img-thumbnail" src="{{ asset('images/' . $gal->image) }}" alt="News Image">
                                    </td>
                                    <td>
                                        @livewire('gal.delete', ['gal' => $gal], key($gal->id))
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No records found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- {{ $gals->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @livewireScripts()
@endpush
