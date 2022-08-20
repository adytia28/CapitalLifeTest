@extends('layouts.app')
@section('title', 'Balance')
@section('content')
<section class="text-center">
    <div class="card-body py-5 px-md-5">
      <div class="row w-100 d-flex justify-content-center">
        <div class="col-12 bg-white py-4 px-4 rounded-3">
            @if(Session::has('success'))
            <div class="alert alert-success w-100 p-2 fw-bold">
                {{ Session::get('success') }}
            </div>
            @endif

            <div class="d-flex justify-content-center pt-4">
                <div>
                    <h2>Saldo Anda</h2>
                    <div class="text-info" style="font-size:40px">Rp {{number_format($balance, 3, ',', '.')}}</div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
