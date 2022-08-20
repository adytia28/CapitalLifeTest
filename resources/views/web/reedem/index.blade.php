@extends('layouts.app')
@section('title', 'Profile')

@section('content')
<div class="bg-white p-4">
    @livewire('web.reedem.index')
</div>
@endsection

@section('sidebar')
@livewire('web.reedem.withdraw')
@endsection
