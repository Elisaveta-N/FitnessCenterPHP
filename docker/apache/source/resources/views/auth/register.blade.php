@extends('layouts.base')

@section('content')
    <!-- Main Container -->
    <div class="mb140">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h3 fw-bold mb-3 mx-1 mx-md-4 mt-3">{{ __('Регистрация') }}</p>
                                <form class="mx-1 mx-md-4" form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="d-flex flex-row align-items-center mb-3"> <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <div >
                                                <input id="name" type="text" name="name" class="form-control" @error('name') is-invalid @enderror value="{{ old('name') }}" required autocomplete="name" autofocus/>

                                                @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                            <label class="form-label" for="name">{{ __('Имя') }}</label>
                                        </div>
                                    </div>


                                    <div class="d-flex flex-row align-items-center mb-3"> <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <div>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-3"> <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <div>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <label class="form-label" for="password">{{ __('Пароль') }}</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-3"> <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            {{-- <input type="password" class="form-control" name="password-confirm" id="password-confirm" /> --}}
                                            <div>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>

                                            <label class="form-label" for="password-confirm">{{ __('Повторите пароль') }}</label>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <div>
                                            <button class="btn btn-primary btn-lg" type="submit">{{ __('Зарегистрироваться') }}</button>
                                        </div>
                                    </div>


                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2"> <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container -->
@endsection
