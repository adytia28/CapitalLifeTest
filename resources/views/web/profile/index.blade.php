@extends('layouts.app')
@section('title', 'Profile')

@section('content')
<div class="bg-white p-4">
    Welcome <span class="fw-bold">{{$users->name}},</span>
    <div class="pt-4">
        <table>
            <tr>
                <td class="fw-bold">Email</td>
                <td class="px-4">:</td>
                <td>{{$users->email}}</td>
            </tr>
            <tr>
                <td class="fw-bold">Gender</td>
                <td class="px-4">:</td>
                <td>{{$users->gender == 'M' ? 'Male' : 'Female'}}</td>
            </tr>
            <tr>
                <td class="fw-bold">Phone Number</td>
                <td class="px-4">:</td>
                <td>{{$users->phone_number}}</td>
            </tr>
            <tr>
                <td class="fw-bold">Identity Number</td>
                <td class="px-4">:</td>
                <td>{{$users->identity_number}}</td>
            </tr>
            <tr>
                <td class="fw-bold">City</td>
                <td class="px-4">:</td>
                <td>{{$users->city}}</td>
            </tr>
            <tr>
                <td class="fw-bold">Referral Code</td>
                <td class="px-4">:</td>
                <td>{{$users->referral_code ?? '-'}}</td>
            </tr>
        </table>
    </div>
</div>
@endsection

@section('sidebar')
    @livewire('web.point.index')
@endsection
