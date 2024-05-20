@extends('layouts.app')

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    <h3 class="text-center mb-4">{{ __('Register') }}</h3>
                    <form  method="POST" action="{{ route('register') }}" class="login-form">
                        @csrf
                        <div class="form-group">
                            <input id="name" type="text" class="form-control rounded-left @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" class="form-control rounded-left @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}" required autocomplete="email" >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control rounded-left @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group d-flex">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3"> {{ __('Register') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
