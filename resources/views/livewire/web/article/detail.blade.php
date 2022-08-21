<div class="container">
    <div class="position-relative" style="width:100%; height:300px">
        <img src="{{$article->thumbnail}}" class="w-100 h-100" style="object-fit: cover">
        @if($article->type)
            <svg xmlns="http://www.w3.org/2000/svg" class="position-absolute text-warning bg-white p-1 rounded-circle" style="top:8px; left:8px" width="30px" height="30px" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
        @endif
    </div>

    <div wire:ignore class="py-4 ">
        <h2>{{$article->title}}</h2>
        @if($article->type == 0 && $article->count < 1 || $article->type == 1)
        <div class="py-2 alert-info alert px-4 d-flex justify-content-between align-items-center" x-data="{point:false, addPoint() {$wire.addPoint(); this.point = true}}" x-init="setTimeout(() => {addPoint()}, 15000)">
            <span class="fw-bolded " style="font-size:20px" x-data="{timer:15}" x-init="setInterval(() => {if(timer > 0) {timer--} }, 1000)">
                00:<span :class="timer < 10 ? '' : 'd-none'">0</span><span x-text="timer"></span>
            </span>
            <span x-cloak :class="point ? '' : 'd-none'">Anda Mendapatkan <span  class="fw-bolder" style="font-size:16px">+{{number_format($point, 0, ',', '.')}}</span> Points</span>
        </div>
        @endif
        <div class="pt-5">
            @for($i=0; $i < 10; $i++)
            {{$article->content}}
            @endfor
        </div>
    </div>
</div>
