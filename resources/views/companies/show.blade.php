@extends('layouts.html')

@section('container')
@include('components.navbar')
<div class="bg-slate-100">
    <img class="w-full h-72 object-cover" src="/storage/{{ $company['image_cover'] }}" alt="{{ $company['name'] }}">
    <div class="flex items-center w-1/2 justify-around mx-auto relative">
        <img class="border-2 border-white w-44 " src="/storage/{{ $company['avatar'] }}" alt="{{ $company['name'] }}">
        <div>
            <h1 class="font-bold text-3xl">{{ $company['name'] }}</h1>
            <h2>Location: {{ $company['location'] }}</h2>
            <h2>Address: {{ $company['full_address'] }}</h2>
        </div>
        <h2>Website: <a class="underline decoration-dashed" href="{{ $company['website'] }}">{{explode('/',$company['website'])[2] }}</a></h2>
        @if(auth()->user()->id === $company['ownedby'])
        <a href="#" class="absolute right-0 top-0 text-md py-2 px-7 bg-slate-600 text-white rounded-md">Edit</a>
        @endif
    </div>
</div>

<div class="w-3/5 mx-auto my-6">
    <h1 class="text-2xl border-b-2 pb-5">About - {{ $company['name'] }}</h1>
    <p class="text-md text-justify break-all pt-3">{{ $company['about'] }}</p>
</div>

<x-footer></x-footer>
@endsection