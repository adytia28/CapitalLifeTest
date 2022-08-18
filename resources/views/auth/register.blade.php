@extends('layouts.app')

@section('content')
<section class="text-center">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-4 bg-white py-4 rounded-3">
          <h2 class="fw-bold mb-5">{{strtoupper('Sign up')}}</h2>
          <form class="px-4" method="POST" action="{{ route('register') }}">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="col-md-12 mb-4">
              <div class="form-outline">
                <label class="form-label fw-bold d-flex justify-content-start" for="name">Name</label>
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" />
                @error('name')
                    <span class="invalid-feedback d-flex justify-content-start" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label fw-bold d-flex justify-content-start " for="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>Email</label>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" />
                    @error('email')
                        <span class="invalid-feedback d-flex justify-content-start" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
              </div>
              <div class="col-md-6 mb-4">
                  <label class="form-label fw-bold d-flex justify-content-start" for="email">Gender</label>
                  <select class="form-select @error('gender') is-invalid @enderror" aria-label="Default select example">
                      <option selected>Select Gender</option>
                      <option value="M">Male</option>
                      <option value="F">Female</option>
                    </select>
                    @error('gender')
                        <span class="invalid-feedback d-flex justify-content-start" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                  <div class="form-outline">
                      <label class="form-label fw-bold d-flex justify-content-start" for="phone_number">Phone Number</label>
                    <input type="text" id="phone_number" class="form-control @error('email') is-invalid @enderror" />
                    @error('phone_number')
                        <span class="invalid-feedback d-flex justify-content-start" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                      <label class="form-label fw-bold d-flex justify-content-start" for="identity_number">Identity Number</label>
                    <input type="text" id="identity_number" class="form-control @error('identity_number') is-invalid @enderror" />
                    @error('identity_number')
                        <span class="invalid-feedback d-flex justify-content-start" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                  <div class="form-outline">
                      <label class="form-label fw-bold d-flex justify-content-start" for="city">City</label>
                    <input type="text" id="city" class="form-control @error('city') is-invalid @enderror" />
                    @error('city')
                        <span class="invalid-feedback d-flex justify-content-start" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                      <label class="form-label fw-bold d-flex justify-content-start" for="referral_code">Referral Code</label>
                    <input type="text" id="referral_code" class="form-control" name="referral_code" value="{{ old('referral_code') }}" autocomplete="referral_code" autofocus/>
                  </div>
                </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                  <div class="form-outline mb-4">
                      <label class="form-label fw-bold d-flex justify-content-start" for="email">Password</label>
                    <input type="password" id="password" name="password" required autocomplete="current-password" class="form-control @error('password') is-invalid @enderror" />
                    @error('password')
                        <span class="invalid-feedback d-flex justify-content-start" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
              </div>
              <div class="col-md-6 mb-4">
                  <div class="form-outline mb-4">
                      <label class="form-label fw-bold d-flex justify-content-start" for="confirmpasword">Confirm Password</label>
                    <input type="password" id="confirmpassword" class="form-control"  name="confirmpassword" required autocomplete="current-password"/>
                  </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary px-5 fw-bold">{{ __('Register') }}</button>
            <div>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('login') }}">
                    {{ __('Do you have account?') }}
                </a>
                @endif
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
