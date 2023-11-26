@extends('layouts.base')

@section('content')


    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center mt80">
            <div class="col-md-9 col-lg-6 col-xl-5"> <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image"> </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0" hidden></p>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <div>
                            <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Enter a valid login (email)" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <label for="email" class="form-label mt-2" for="form3Example3">{{ __('Email Address') }}</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <div>
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Enter password" name="password" required autocomplete="current-password" />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="password" class="form-label mt-2" for="form3Example4">{{ __('Password') }}</label>
                    </div>

                    <div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">{{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        {{-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="http://localhost:8080/registration" class="link-danger">Register</a></p> --}}
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
