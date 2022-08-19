@extends('layouts.app')
@section('title', 'Article')

@section('content')
    @livewire('web.article.detail', compact('article'))
@endsection

@section('sidebar')
    @livewire('web.point.index')
@endsection
