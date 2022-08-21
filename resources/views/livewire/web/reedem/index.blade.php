<div>
    <div>
        <h3 class="fw-bold">Reedem Point</h3>
        <div class="pt-4">
            <div class="bg-light p-4">
                @if($totalPoint >= 1)
                <div class=" fw-bold d-flex justify-content-between">
                    <div>Point anda saat ini : <span class="text-info"><span style="font-size:20px">{{number_format(($totalPoint), 0, ',', '.')}}</span> Points</span></div>

                    <svg xmlns="http://www.w3.org/2000/svg" class=" text-info" width="24px" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="mt-4 px-4 pt-3 pb-3 alert alert-info  d-flex align-content-center ">
                    <p>Minimum point untuk melakukan reedem adalah <span class="fw-bold text-danger">{{number_format((100000 / 0.002 ), 0, ',', '.')}}</span> points atau setara dengan konversi point sebesar  <span class="fw-bold text-danger">Rp {{number_format((100000 ), 0, ',', '.')}}</span></p>
                </div>
                @else
                <div class="mt-4 px-4 pt-3 pb-3 alert alert-warning   ">
                    Maaf, point anda masih <span class="px-1" style="font-size:20px">{{number_format(($totalPoint), 0, ',', '.')}}</span> Points, belum bisa melakukan apapun disini. Silahkan cari point dengan membaca <a href="{{route('article')}}"> artikel di halaman ini</a>
                </div>
                @endif
            </div>
        </div>

        @if($totalPoint >= 1)
            <div class="bg-light px-4 py-4 mt-4" x-data="{pointArray:@js($points), all:false, checkAll() { if(this.all == false) {points= [];  this.pointArray.map((value) => {points.push(value.id+'|'+value.points)})} else {points = []} } }"
                x-effect="points.length == 0 ? all = false : ''">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="pb-2 pt-2">List Points</h4>
                    <label for="allPoints" >
                        <span>
                        <input type="checkbox" x-on:click="checkAll()" id="allPoints" x-model="all" name="all" class="mr-2 form-check-input" name="allPoints"/>
                        <span class="ml-2 fw-bold">All</span>
                        </span>
                    </label>
                </div>
                @foreach($points as $point)
                    <div class="d-flex justify-content-between bg-white border rounded-2 border-info p-2 my-2">
                        <div style="width:5%">
                            <input type="checkbox" class="form-check-input" id="points{{$point->id}}" name="points" x-model="points"  value="{{$point->id.'|'.$point->points}}"/>
                        </div>
                        <label for="points{{$point->id}}" style="width:95%">
                            <div class="d-flex justify-content-between " >
                                <span class="fw-bold">{{Str::limit($point->article->title, 25)}}</span>
                                <span class="fw-bold text-info">+ {{number_format(($point->points), 0, ',', '.')}} points</span>
                            </div>
                        </label>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
