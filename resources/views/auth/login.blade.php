@extends('layouts.app')
@section('title', 'Login')
@section('content')
<section class="text-center">
    <div class="card-body py-5 px-md-5">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-4 bg-white py-4 rounded-3">
          <h2 class="fw-bold mb-5">{{strtoupper('Login')}}</h2>
          <form class="px-4" method="POST" action="{{ route('login') }}">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="col-md-12 mb-4">
              <div class="form-outline">
                <label class="form-label fw-bold d-flex justify-content-start" for="name">Username (No. Phone) <span class="text-danger">*</span></label>
                <input type="text" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus/>
                @error('phone_number')
                    <span class="invalid-feedback d-flex justify-content-start" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="col-md-12 mb-4">
                <div class="form-outline">
                    <label class="form-label fw-bold d-flex justify-content-start" for="email">Password <span class="text-danger">*</span></label>
                  <input type="password" id="password" name="password" required autocomplete="current-password" class="form-control d-flex justify-content-start @error('password') is-invalid @enderror" />
                  @if (Route::has('password.request'))
                            <a class="btn btn-link d-flex justify-content-start" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                  @error('password')
                      <span class="invalid-feedback d-flex justify-content-start" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 ">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary px-5 fw-bold">{{ __('Login') }}</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
