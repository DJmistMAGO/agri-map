@extends('layouts.app-content')

@section('title')
    News | Update
@endsection

@section('content')
    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <x-card title="Add Record" :back-url="route('news.index')">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>News Title or Headline</label>
                                    <input type="text" name="title" class="form-control" value="{{ $news->title }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control" value="{{ $news->date->format('Y-m-d') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" name="author" class="form-control" value="{{ $news->author }}" required>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" class="form-control" rows="8" required>{{ $news->content }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" value="{{ $news->image }}" id="image">
                                <img src="{{ asset('images/' . $news->image) }}" alt="" id="preview" class="img-fluid img-thumbnail">
                            </div>
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

    <script>
    function previewImage() {
        var preview = document.querySelector('#preview');
        var file    = document.querySelector('#image').files[0];
        var reader  = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }

    var imageInput = document.querySelector('#image');
    imageInput.addEventListener('change', previewImage);
</script>
@endpush
