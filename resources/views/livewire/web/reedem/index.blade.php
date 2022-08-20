<div>
    <div>
        <h3 class="fw-bold">Reedem Point</h3>
        <div class="pt-4">
            <div class="bg-light p-4">
                @if($point >= 1)
                <div class=" fw-bold d-flex justify-content-between">
                    <div>Point anda saat ini : <span class="text-info"><span style="font-size:20px">{{number_format(($point), 0, ',', '.')}}</span> Points</span></div>

                    <svg xmlns="http://www.w3.org/2000/svg" class=" text-info" width="24px" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="mt-4 px-4 pt-3 pb-3 alert alert-info  d-flex align-content-center ">
                    <p>Maximal point untuk melakukan reedem adalah <span class="fw-bold text-danger">{{number_format((100000 / 0.002 ), 0, ',', '.')}}</span> points atau setara dengan konversi point sebesar  <span class="fw-bold text-danger">Rp {{number_format((100000 ), 0, ',', '.')}}</span></p>
                </div>
                @else
                <div class="mt-4 px-4 pt-3 pb-3 alert alert-warning  d-flex align-items-center ">
                    Maaf, point anda masih <span class="px-1" style="font-size:20px">{{number_format(($point), 0, ',', '.')}}</span> Points, belum bisa melakukan apapun disini
                </div>
                @endif
            </div>
        </div>

        @if($point >= 1)
        <div x-data="{maxPoints:@entangle('point'), warning:false, setPoints() {this.points = this.maxPoints; this.warning = true; }}" x-effect="points > maxPoints ? setPoints() : ''">
            <div x-cloak x-show="warning" class="alert alert-warning px-4 py-2 mt-4 " role="alert" x-effect="warning ? setTimeout(() => {warning = false }, 5000): ''">
                Maaf, anda tidak bisa memasukkan point melebihi dari point yang anda dapatkan
            </div>

            <div class="d-flex align-items-start justify-content-between pt-4" >
                <button type="button" :disabled="points > 1 ? false : true" :class="points > 1 ? 'btn btn-primary' : 'btn btn-light'" x-on:click="points > 1 ? points-- : ''">-</button>
                <div class="w-75 d-flex justify-content-center">
                    <div class="w-100  mx-4">
                        <input type="text" onkeypress="return event.keyCode === 8 || event.charCode >= 48 && event.charCode <= 57" class="form-control"  x-model="points"  :value="points" id="point" placeholder="Enter Your Point in here"/>
                        <span x-cloak :class="points == '' || points < 1  ? '' : 'd-none'" class="text-danger" style="font-size:12px">Point is required</span>
                    </div>
                </div>
                <button type="button" :disabled="points < maxPoints ? false : true" :class="points < maxPoints ? 'btn btn-primary' : 'btn btn-light'" x-on:click="points < maxPoints ? points++ : ''">+</button>
            </div>
        </div>
        @endif
    </div>
</div>
