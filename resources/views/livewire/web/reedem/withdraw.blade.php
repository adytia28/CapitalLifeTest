<div class="bg-white px-4 py-4" x-data="{currentPoint:@entangle('points')}">
    <h6 class=" fw-bolder text-uppercase" style="font-size:18px">Informasi Reedem:</h6>
    <div class="py-3">
        <div class="border-bottom pb-4">
            <div class="d-flex align-items-center justify-content-between">
                <span class="fw-bold text-uppercase">Point Reedem</span><span class="pl-4 fw-bold text-info" style="font-size:20px" x-text="currentPoint > 0 ? RupiahConvert(points) : 0"></span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <span class="fw-bold text-uppercase">Price Point </span><span class="pl-4 fw-bold text-info" style="font-size:20px">0,002</span>
            </div>
        </div>
        <div class="border-top pt-4 d-flex align-items-center justify-content-between">
            <span class="fw-bold text-uppercase">Total Konversi Point </span><span class="pl-4 fw-bold text-danger" style="font-size:20px" x-text="currentPoint > 0 ? new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR',minimumFractionDigits: 3,}).format(points * 0.002) : 0"></span>
        </div>
    </div>
    <button :disabled="currentPoint < 1 || points < 1 || points > currentPoint ? true : false" x-on:click="$wire.withdraw(points)" type="button" class="btn btn-primary w-100 text-uppercase">Withdraw</button>
    <script>
        RupiahConvert = (value) => {
                value = Math.ceil(value).toString();
                value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                return value;
            }

    </script>
</div>
