@extends('layouts.app')
@section('title', 'Profile')

@section('content')
<div class="bg-white p-4">
    <div>
        <h3>Reedem Point</h3>
    </div>
</div>
@endsection

@section('sidebar')
    @livewire('web.point.index')
@endsection
