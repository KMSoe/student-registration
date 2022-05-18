@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nrc" class="col-md-4 col-form-label text-md-end">{{ __('NRC') }}</label>

                            <div class="col-md-6">
                                <!-- <div class="row g-1">
                                    <div class="col-2">
                                        <select name="" id="" class="form-control">
                                            <option value="1" selected>1&nbsp;/</option>
                                            <option value="2">2/</option>
                                            <option value="3">3/</option>
                                            <option value="4">4/</option>
                                            <option value="5">5/</option>
                                            <option value="6">6/</option>
                                            <option value="7">7/</option>
                                            <option value="8">8/</option>
                                            <option value="9">9/</option>
                                            <option value="10">10/</option>
                                            <option value="11">11/</option>
                                            <option value="12">12/</option>
                                            <option value="13">13/</option>
                                            <option value="14">14/</option>
                                        </select>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-2">
                                        <select name="" id="" class="form-control col-1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control">
                                    </div>
                                </div> -->

                                <input id="nrc" type="text" class="form-control @error('nrc') is-invalid @enderror" name="nrc" value="{{ old('nrc') }}" required>
                                
                                @error('nrc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="birth-date" class="col-md-4 col-form-label text-md-end">{{ __('Birth Date') }}</label>

                            <div class="col-md-6">
                                <input id="birth-date" type="date" class="form-control @error('birth-date') is-invalid @enderror" name="birth_date" required >

                                @error('birth-date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection