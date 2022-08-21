<div class="bg-white px-4 py-4">
    <h6 class=" fw-bold ">{{strtoupper('Informasi Point:')}}</h6>
    <div class="py-3">
        <div class="d-flex pt-1 fw-bold justify-content-between">
            <span class="fw-bold text-uppercase">Point: </span><span class="pl-4">{{number_format($point, 0, ',', '.')}}</span>
        </div>
        <div class="d-flex pt-1 fw-bold justify-content-between">
            <span class="fw-bold text-uppercase">Konversi Point: </span><span class="pl-4">Rp {{number_format(($point * 0.002 ), 3, ',', '.')}}</span>
        </div>
        <div class="d-flex pt-1 fw-bold justify-content-between">
            <span class="fw-bold text-uppercase ">Point Expirate Date: </span><span class="pl-4 text-danger">{{date('d M Y', strtotime("+1 month", strtotime(date('Y-m-01'))))}}</span>
        </div>
    </div>
    <a href="{{route('reedem')}}" class="btn btn-primary w-100 text-uppercase">Withdraw</a>
</div>
