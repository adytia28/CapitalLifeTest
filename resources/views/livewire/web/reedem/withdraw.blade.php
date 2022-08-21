<div class="position-relative bg-white px-4 py-4" x-data="{currentPoint:@entangle('points'), allPoints:0, id:@entangle('pointId')}"
    x-effect="if(points.length > 0) { allPoints = 0; id= []; points.map((value) => {let split = value.split('|'); id.push(split[0]); allPoints += Number(split[1])}) } else {allPoints = 0; id= [];}">
    <h6 class=" fw-bolder text-uppercase" style="font-size:18px">Informasi Reedem:</h6>
    <div class="py-3" >
        <div class="border-bottom pb-4">
            <div class="d-flex align-items-center justify-content-between">
                <span class="fw-bold text-uppercase">Point Reedem</span><span class="pl-4 fw-bold text-info" style="font-size:20px" x-text="currentPoint > 0 ? RupiahConvert(allPoints) : 0"></span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <span class="fw-bold text-uppercase">Price Point </span><span class="pl-4 fw-bold text-info" style="font-size:20px">0,002</span>
            </div>
        </div>
        <div class="border-top pt-4 d-flex align-items-center justify-content-between">
            <span class="fw-bold text-uppercase">Total Konv. Point </span><span class="pl-4 fw-bold text-danger" style="font-size:20px" x-text="currentPoint > 0 ? new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR',minimumFractionDigits: 3,}).format(allPoints * 0.002) : 0"></span>
        </div>
    </div>
    <button :disabled="currentPoint < 1 || allPoints < 1 || allPoints > currentPoint ? true : false" x-on:click="$wire.withdraw(allPoints)" type="button" class="btn btn-primary w-100 text-uppercase">Withdraw</button>

    <div x-data="{messages:@entangle('message')}">
        <div x-cloak  :class="messages ? '' : 'd-none'"  class="w-100 h-100 bg-dark bg-opacity-50 position-fixed d-flex justify-content-center align-items-center" style="top-0;left:0;right:0;bottom:0;z-index:9999">
            <div class="col-4 bg-white rounded-1 border  p-4" class="height:auto">
                <div class="d-flex justify-content-between pb-3 border-bottom">
                    <h4 class=" fw-bold ">Message Point</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" x-on:click="messages = ''" class="text-black " width="20px" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                </div>
                <div class="pt-3 pb-2 fw-bold" x-text="messages"></div>
            </div>
        </div>
    </div>

    <script>
        RupiahConvert = (value) => {
                value = Math.ceil(value).toString();
                value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                return value;
            }

    </script>
</div>
