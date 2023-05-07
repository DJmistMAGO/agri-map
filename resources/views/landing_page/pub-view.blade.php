@extends('layouts.app')

@section('title')
    Publication
@endsection



@section('content')
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" data-spy="affix" data-offset-top="100" data-offset-bottom="100"
        id="navbar">
        <div class="container-fluid ms-5 me-5">
            <a class="navbar-brand mb-auto" href="#">
                <div style="display: flex; align-items: center;">
                    <img src="{{ asset('images/7.png') }}" alt="" class="d-inline-block align-text-top max-h-40px">
                </div>
            </a>
            <button class="navbar-toggler text-warning" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase m-scroll-top" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{ route('pub.index') }}">Publication</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-uppercase m-scroll-top" href="{{ route('login') }}">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 <main>
    <section class="publication">
        <div class="container">
            <div class="row mt-25">
                <div class="col-md-12 ">
                    <h1 class="" style="color: #05b514;"><b>{{ $news->title }}</b></h1>
                    <br>
                    {{-- author --}}
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-justify">
                                <i>
                                    {{ $news->author }} | {{ $news->date }}
                                </i></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('images/'.$news->image) }}" alt="" class="w-100">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <p class="text-justify">{!! $news->content !!}</p>
            </div>

        </div>
    </section>
 </main>
@endsection

@push('scripts')
    @livewireScripts

@endpush
