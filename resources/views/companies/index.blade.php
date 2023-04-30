@extends('layouts.html')

@section('container')
@include('components.navbar')
<h1 class="text-center text-2xl py-4 font-bold">List Companies</h1>
<ul class="grid grid-cols-2 w-3/4 mx-auto gap-4">
    @foreach($companies as $company)
    <li class="bg-gray-200 flex my-3 w-full mx-4 relative">
        @if(auth()->user())
        @if ($company->ownedby === auth()->user()->id)
        <span class="absolute text-white right-0 bg-green-600 px-2">owned</span>
        @endif
        @endif
        <img class="w-20 h-20 object-cover" src="/storage/{{$company->avatar}}" alt="">
        <div class="flex flex-col justify-center ml-3">
            <a href="/companies/{{$company['slug']}}">
                <h1 class="text-xl">{{$company->name}}</h1>
            </a>
            <p class="text-md">{{$company->location}} - {{$company->full_address}}</p>
            <a class="text-sm" href="{{$company->website}}">{{explode('/',$company->website)[2] }}</a>
        </div>
    </li>
    @endforeach
</ul>
<x-footer></x-footer>
@endsection