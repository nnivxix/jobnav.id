@extends('layouts.html')

@section('container')
@include('components.navbar')
<div class="bg-slate-100">
    <img class="w-full h-72 object-cover" src="/storage/{{ $company['image_cover'] }}" alt="{{ $company['name'] }}">
    <div class="flex items-center w-1/2 justify-around mx-auto relative">
        <img class="border-2 border-white w-44 object-cover" src="/storage/{{ $company['avatar'] }}" alt="{{ $company['name'] }}">
        <div>
            <h1 class="font-bold text-3xl">{{ $company['name'] }}</h1>
            <h2>Location: {{ $company['location'] }}</h2>
            <h2>Address: {{ $company['full_address'] }}</h2>
        </div>
        <h2>Website: <a class="underline decoration-dashed" href="{{ $company['website'] }}">{{explode('/',$company['website'])[2] }}</a></h2>
        @if( auth()->check() && auth()->user()->id === $company['ownedby'])
        <a href="/companies/{{ $company['slug']}}/edit" class="absolute right-0 top-0 text-md py-2 px-7 bg-slate-600 text-white rounded-md">Edit</a>
        @endif
    </div>
</div>

<div class="w-3/5 mx-auto my-6">
    <h1 class="text-2xl border-b-2 pb-5">About - {{ $company['name'] }}</h1>
    <p class="text-md text-justify break-all pt-3">{{ $company['about'] }}</p>
</div>
<h1 class="text-center font-medium text-xl pb-4">Latest Job in {{$company['name']}}</h1>
<div class="grid grid-cols-3 w-2/3 mx-auto justify-items-start">
    @foreach($jobs as $job)
    <div class="flex justify-self-start my-2 items-center">
        <img class="w-24" src="{{URL::asset('/storage/'.$job->company->avatar)}}" alt="{{$job['title']}}">
        <div class="px-3 w-full">
            <h1 class="text-xl font-medium w-full">
                <a href="/jobs/{{$job['uuid']}}">
                    {{ $job['title'] }}
            </h1>
            </a>
            <h2 class="text-lg">{{ $job['position'] }}</h2>
            <p>{{ $job['location'] }}</p>
            <p>$ {{ number_format($job['salary'], 0, "," )}}</p>

        </div>
    </div>
    @endforeach
</div>
<x-footer></x-footer>
@endsection