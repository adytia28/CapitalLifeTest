<div class="bg-white px-4 py-4">
    <h6 class=" fw-bold ">{{strtoupper('Informasi Point:')}}</h6>
    <div class="py-3">
        <div>
            <span class="fw-bold text-uppercase">Point: </span><span class="pl-4">{{number_format('10000', 0, ',', '.')}}</span>
        </div>
        <div>
            <span class="fw-bold text-uppercase">Konversi Point: </span><span class="pl-4">Rp {{number_format('10000', 0, ',', '.')}}</span>
        </div>
        <div>
            <span class="fw-bold text-uppercase">Expirate Date: </span><span class="pl-4">{{date('Y-m-d')}}</span>
        </div>
    </div>
    <button type="button" class="btn btn-primary w-100 text-uppercase">Withdraw</button>
</div>
