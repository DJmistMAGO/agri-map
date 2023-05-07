@extends('layouts.app-content')

@section('title')
    News | Create
@endsection

@section('content')
    <form action="{{ route('agrigal.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <x-card title="Add Record" :back-url="route('news.index')">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" value="{{ old('image') }}" id="image" required>
                                <img src="" alt="" id="preview" class="img-fluid img-thumbnail">
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
