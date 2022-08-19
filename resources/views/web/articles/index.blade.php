@extends('layouts.app')
@section('title', 'Article')

@section('content')
<div class="container bg-white">
    <div class="row">
        @forelse($articles as $article)
        <div class="col-6 px-4 py-4  ">
            <div class="bg-white border">
                <div>
                    <img src="{{$article->thumbnail}}" alt="" class="w-100 " height="200px" style="object-fit: cover;">
                </div>
                <div class="px-4 py-4">
                    <h3>{{Str::limit($article->title, 15)}}</h3>
                    <div >{{Str::limit($article->description, 75)}}</div>
                    <div class="d-flex justify-content-end" style="margin-top:10px">
                        <button type="button" class="btn btn-primary px-4 text-white">
                            <a href="{{route('article-detail', $article->slug)}}" class="text-white" style="text-decoration: none">Read More</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @empty
        No Articles
        @endforelse
    </div>
    <div class="px-2 d-flex justify-content-end">
        {{ $articles->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
@endsection

@section('sidebar')
    @livewire('web.point.index')
@endsection
