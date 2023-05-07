@extends('layouts.app-content')

@section('title')
    Announcement
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
                        <i class=" fas fa-bullhorn text-success"></i>
                    </span>
                    <h2 class="card-label"> Announcements </h2>
                </div>
                <div class="card-toolbar">
                    <a href="{{ route('announcement.create') }}" class="btn btn-sm btn-success font-weight-bold">
                        <i class="fas fa-bullhorn"></i> ADD ANNOUNCEMENT
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                        <thead>
                            <tr class="text-left">
                                <th>Date</th>
                                <th>Announcement Title</th>
                                <th>Details</th>
                                <th>Author</th>
                                {{-- <th>Image</th> --}}
                                <th style="min-width: 150px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($announcements as $item)
                                <tr>
                                    <td>{{ $item->date->format('F d, Y') }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->content }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>
                                        <a href="{{ route('announcement.edit',$item->id) }}" class="btn btn-sm btn-primary"
                                            title="Edit details">
                                            EDIT
                                        </a>
                                        @livewire('announcement.delete', ['announcements' => $item], key($item->id))
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No records found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $announcements->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @livewireScripts()
@endpush
