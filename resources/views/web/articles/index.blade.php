@extends('layouts.app')
@section('title', 'Article')

@section('content')
<div class="container bg-white">
    <div class="row">
        @forelse($articles as $article)
        <div class="col-md-6 px-4 py-4  ">
            <div class="bg-white border">
                <div class="position-relative w-100 " style="height:200px">
                    <img src="{{$article->thumbnail}}" alt="" class="w-100 h-100"  style="object-fit: cover;">
                    @if($article->type)
                    <svg xmlns="http://www.w3.org/2000/svg" class="position-absolute text-warning bg-white p-1 rounded-circle" style="top:5px; left:5px" width="30px" height="30px" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
                      @endif
                </div>
                <div class="px-4 py-4">
                    <h3>{{Str::limit($article->title, 15)}}</h3>
                    <div >{{Str::limit($article->description, 60)}}</div>
                    <div class="d-flex justify-content-end" style="margin-top:10px">
                        <a href="{{route('article-detail', $article->slug)}}" class="text-white btn btn-primary px-4 text-white" style="text-decoration: none">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        No Articles
        @endforelse
    </div>
    <div class="px-2 d-flex justify-sm-content-end">
        {{ $articles->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
@endsection

@section('sidebar')
    @livewire('web.point.index')
@endsection
