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
                    <h3 class="text-center mb-4">Log In</h3>
                    <form method="POST" action="{{ route('login') }}" class="login-form">
                        @csrf
                        <div class="form-group">
                            <input type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" class="form-control rounded-left @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control rounded-left @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary" for="remember">{{ __('Remember Me') }}
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                {{-- <a href="#">Forgot Password</a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
