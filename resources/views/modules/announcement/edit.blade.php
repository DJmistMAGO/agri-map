@extends('layouts.app-content')

@section('title')
    Announcement | Update
@endsection

@section('content')
    <form action="{{ route('announcement.update', $announcement->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <x-card title="Update Record" :back-url="route('announcement.index')">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Announcement Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $announcement->title }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control" value="{{ $announcement->date->format('Y-m-d') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" name="author" class="form-control" value="{{ $announcement->author  }}" required>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" class="form-control" rows="8" required>{{ $announcement->content }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <button type="submit" id="submit" class="btn btn-primary">Update</button>
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
