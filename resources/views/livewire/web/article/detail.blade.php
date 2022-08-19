<div class="container">
    <img src="{{$article->thumbnail}}" class="w-100" height="300px" style="object-fit: cover">

    <div wire:ignore class="py-4 ">
        <h2>{{$article->title}}</h2>
        @if($article->type == 0 && $article->count < 1 || $article->type == 1)
        <div class="py-4 bg-success text-white px-4 d-flex justify-content-between align-items-center" x-data="{point:false, addPoint() {$wire.addPoint(); this.point = true}}" x-init="setTimeout(() => {addPoint()}, 15000)">
            <span class="fw-bolded " style="font-size:20px" x-data="{timer:15}" x-init="setInterval(() => {if(timer > 0) {timer--} }, 1000)">
                00:<span :class="timer < 10 ? '' : 'd-none'">0</span><span x-text="timer"></span>
            </span>
            <span x-cloak :class="point ? '' : 'd-none'">Anda Mendapatkan <span  class="fw-bolder" style="font-size:16px">+{{$point}}</span> Point</span>
        </div>
        @endif
        <div class="pt-5">
            @for($i=0; $i < 10; $i++)
            {{$article->content}}
            @endfor
        </div>
    </div>
</div>
