@extends('layouts.app')
@section('title', 'Landing Page')

@section('content')

<div class="bg-light shadow-none ">
    <div class="bg-landing position-relative text-white w-100 " style="height:auto;z-index:1;">
        <img src="{{asset('img/background/bg-insurance.jpg')}}" class="w-100" style="height:500px;object-fit: cover;z-index:1;"/>
        <div class="w-100 h-100 bg-landing opacity-75 position-absolute top-0" style="z-index:1;"></div>
        <div class="position-absolute d-flex align-items-center h-100 w-100 justify-content-center" style="top:0;left:0;z-index:1;">
            <div>
                <h2 class="fw-bolder display-6  text-center text-capitalize">Temukan<span class="alert text-warning">Masa depan</span>Anda <br>yang aman di Jakarta  <br>bersama <br>Capital Life Indonesia</h2>
                <p class="text-center pt-4">Tentukan asuransi terbaik yang bisa <br>menjamin kehidupan mu dengan aman sekarang. <br>Jangan sampai lewatkan penawaran terbaik dari kami buat anda.</p>
                <div class="d-flex justify-content-center">
                    <button onclick="toSection()" type="button" class="btn btn-warning text-black py-2 fw-bolder px-5 mt-3">Start Now</button>
                </div>
            </div>
        </div>
    </div>

    <div  id="start" class="py-4">
        <div class="row ">
            <div class="col-md-4 py-2">
                <div class="rounded-2 px-5 py-4 bg-white shadow-sm w-100 h-100 align-items-center gap-2">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('img/landing/home.png')}}" class="alert alert-info p-2 rounded-circle" width="80px" height="80px"/>
                    </div>
                    <h5 class="fw-bold text-center mt-3" style="font-size:18px;">Asuransi Rumah</h5>
                    <div class="pt-3 text-center">
                        <p >Amanakan rumah kesayangan anda dengan asuransi terbaik. Agar anda tenang dan aman, tanpa merasa khawatir dengan keadaan rumah anda. Serahkah pada kami, semua akan menjadi mudah, aman tanpa ribet seperti yang anda inginkan. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-2">
                <div class="rounded-2 px-5 py-4 bg-white shadow-sm w-100 h-100 align-items-center gap-2">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('img/landing/health.png')}}" class="alert alert-info p-2 rounded-circle" width="80px" height="80px"/>
                    </div>
                    <h5 class="fw-bold text-center mt-3" style="font-size:18px;">Asuransi Kesehatan</h5>
                    <div class="pt-3 text-center">
                        <p >Amanakan kesehatan anda dengan asuransi terbaik. Agar anda tenang dan aman, tanpa merasa khawatir dengan keadaan kesehatan anda. Serahkah pada kami, semua akan menjadi mudah, aman tanpa ribet seperti yang anda inginkan. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-2">
                <div class="rounded-2 px-5 py-4 bg-white shadow-sm w-100 h-100 align-items-center gap-2">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('img/landing/education.png')}}" class="alert alert-info p-2 rounded-circle" width="80px" height="80px"/>
                    </div>
                    <h5 class="fw-bold text-center mt-3" style="font-size:18px;">Asuransi Pendidikan</h5>
                    <div class="pt-3 text-center">
                        <p >Amanakan pendidikan anak anda dengan asuransi terbaik. Agar anda tenang dan aman, tanpa merasa khawatir dengan keadaan rumah anda. Serahkah pada kami, semua akan menjadi mudah, aman tanpa ribet seperti yang anda inginkan. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4 bg-white">
        <div class="row ">
            <div class="col-sm-4 py-2">
                <div class="d-flex justify-content-center rounded-2 px-4 py-5 bg-secondary bg-opacity-10 shadow-sm w-100 h-100 align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" text-primary" width="25px" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                      <span class="fw-semibold" style="font-size:18px;">Terpercaya</span>
                </div>
            </div>
            <div class="col-sm-4 py-2">
                <div class="d-flex justify-content-center rounded-2 px-4 py-5 bg-secondary bg-opacity-10 shadow-sm w-100 h-100 align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg"  class=" text-primary" width="25px" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                      <span class="fw-semibold" style="font-size:18px;">Aman</span>
                </div>
            </div>
            <div class="col-sm-4 py-2">
                <div class="d-flex justify-content-center rounded-2 px-4 py-5 bg-secondary bg-opacity-10 shadow-sm w-100 h-100 ign-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" text-primary" width="25px" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
                    <span class="fw-semibold" style="font-size:18px;">Terbaik</span>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="row ">
            <div class="col-md-4 py-2">
                <div class="rounded-2 px-5 py-4 bg-white shadow-sm w-100 h-100 align-items-center gap-2">
                    <img src="{{asset('img/landing/home.png')}}" class="alert alert-danger p-2 rounded-2" width="80px" height="80px"/>
                    <h5 class="fw-bolder mt-3" style="font-size:22px;">Proteksi Keluarga</h5>
                    <div class="pt-2 fw-semibold" style="margin-left:-20px">
                        <ul class="text-secondary">
                            <li class="pt-2 fw-semibold">Keluarga adalah aset yang berharga</li>
                            <li class="pt-2 fw-semibold">Keluarga adalah aset yang berharga</li>
                            <li class="pt-2 fw-semibold">Keluarga adalah aset yang berharga</li>
                            <li class="pt-2 fw-semibold">Keluarga adalah aset yang berharga</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-2">
                <div class="rounded-2 px-5 py-4 bg-white shadow-sm w-100 h-100 align-items-center gap-2">
                    <img src="{{asset('img/landing/health2.png')}}" class="alert alert-danger p-2 rounded-2" width="80px" height="80px"/>
                    <h5 class="fw-bolder mt-3" style="font-size:22px;">Proteksi Kesehatan</h5>
                    <div class="pt-2 fw-semibold" style="margin-left:-20px">
                        <ul class="text-secondary">
                            <li class="pt-2 fw-semibold">Kesehatan itu sangat penting</li>
                            <li class="pt-2 fw-semibold">Kesehatan itu sangat penting</li>
                            <li class="pt-2 fw-semibold">Kesehatan itu sangat penting</li>
                            <li class="pt-2 fw-semibold">Kesehatan itu sangat penting</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-2">
                <div class="rounded-2 px-5 py-4 bg-white shadow-sm w-100 h-100 align-items-center gap-2">
                    <img src="{{asset('img/landing/education.png')}}" class="alert alert-danger p-2 rounded-2" width="80px" height="80px"/>
                    <h5 class="fw-bolder mt-3" style="font-size:22px;">Periksa Kesusaian</h5>
                    <div class="pt-2 fw-semibold" style="margin-left:-20px">
                        <ul class="text-secondary">
                            <li class="pt-2 fw-semibold">Lakukan pemeriksaan sekarang</li>
                            <li class="pt-2 fw-semibold">Lakukan pemeriksaan sekarang</li>
                            <li class="pt-2 fw-semibold">Lakukan pemeriksaan sekarang</li>
                            <li class="pt-2 fw-semibold">Lakukan pemeriksaan sekarang</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toSection() {
            let start = document.getElementById('start');
            let positionStart = start.getBoundingClientRect().top;
            window.scrollTo({ top: positionStart, behavior: 'smooth' });
        }
    </script>
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
