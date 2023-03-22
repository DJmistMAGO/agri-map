@extends('layouts.app-auth')

@section('title')
    Log in to Agri-Map!
@endsection

@section('body')
    <div class="d-flex flex-column flex-root">
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
                style="background-image: url('{{ asset('images/0.webp') }}');">
                <div class="login-form text-center p-7 position-relative overflow-hidden">
                    <div class="login-signin" class=""
                        style="background-color: #ffff; padding: 30px 30px; border-radius: 10px; box-shadow: 9px 9px 21px -4px rgba(0,0,0,0.59);
                    -webkit-box-shadow: 9px 9px 21px -4px rgba(0,0,0,0.59);
                    -moz-box-shadow: 9px 9px 21px -4px rgba(0,0,0,0.59); border: solid 1px #062f58 ;  ">
                        <div class="mb-5">
                            <a href="#">
                                <img src="{{ asset('images/7.png') }}" class="max-h-75px mb-5" alt="" />
                            </a>
                            <div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
                        </div>
                        <form action="{{ route('auth.store') }}" class="form" method="POST">
                            @csrf
                            <div class="form-group mb-5">
                                <input
                                    class="form-control h-auto form-control-solid py-4 px-8 @error('username') is-invalid @enderror"
                                    type="text" placeholder="Username" name="username" autocomplete="off" autofocus
                                    style="border-color: #062f58;" required />
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-5">
                                <input
                                    class="form-control h-auto form-control-solid py-4 px-8 @error('password') is-invalid @enderror"
                                    type="password" placeholder="Password" name="password" style="border-color: #062f58;"
                                    required />
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="btn font-weight-bold px-9 py-4 my-3 mx-4 text-white"
                                style="background-color: #062f58;">Sign In</button>
                        </form>
                    </div>
                    {{-- <div class="login-forgot">
                        <div class="mb-20">
                            <h3>Forgotten Password ?</h3>
                            <div class="text-muted font-weight-bold">Enter your email to reset your password</div>
                        </div>
                        <form class="form" id="kt_login_forgot_form">
                            <div class="form-group mb-10">
                                <input class="form-control form-control-solid h-auto py-4 px-8" type="text"
                                    placeholder="Email" name="email" autocomplete="off" />
                            </div>
                            <div class="form-group d-flex flex-wrap flex-center mt-10">
                                <button id="kt_login_forgot_submit"
                                    class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Request</button>
                                <button id="kt_login_forgot_cancel"
                                    class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
