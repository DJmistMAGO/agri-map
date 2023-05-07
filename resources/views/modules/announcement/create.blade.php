@extends('layouts.app-content')

@section('title')
    Announcement | Create
@endsection

@section('content')
    <form action="{{ route('announcement.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <x-card title="Add Record" :back-url="route('announcement.index')">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Announcement Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control" value="{{ old('date') ?? date('Y-m-d') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" name="author" class="form-control" value="{{ old('author') ?? 'Agri-Map' }}" required>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" class="form-control" rows="8" required>{{ old('content') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
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
@endpush
