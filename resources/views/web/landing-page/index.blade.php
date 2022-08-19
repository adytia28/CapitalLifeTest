@extends('layouts.app')
@section('title', 'Landing Page')

@section('content')
<div class="bg-danger px-4">
    Column
</div>
@endsection

@section('sidebar')
@guest
<div class="bg-white px-4 py-4">
    <h2 class="text-center fw-bold ">{{strtoupper('Login')}}</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row mb-3">
            <label for="username" class="col-md-12 col-form-label">{{ __('Username (No. Telephone)') }}</label>

            <div class="col-md-12">
                <input id="phone_number" type="phone_number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-12 col-form-label ">{{ __('Password') }}</label>

            <div class="col-md-12">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @if (Route::has('password.request'))
                    <a  href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12 offset-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

        </div>

        <div class="row pb-4">
            <div class="col-md-12 offset-md-12  d-flex justify-content-end">
                <button type="submit" class="btn btn-primary px-4">
                    {{ __('Login') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endguest
@endsection
