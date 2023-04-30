@extends('layouts.html')

@section('container')
@include('components.navbar')
<main class="w-3/4 mx-auto my-4">
    <div class="flex items-center">
        <img class="w-36" src="{{URL::asset('/storage/'.$job->company->avatar)}}" alt="">
        <div class="ml-4">
            <h1 class="text-2xl">{{$job['title']}}</h1>
            <h1 class="text-xl">{{$job['position']}}</h1>
            <h1 class="text-blue-500 text-lg">
                <a href="/companies/{{$job->company->slug}}">{{$job->company->name}}</a>
            </h1>
            <p class="text-lg">$ {{$job['salary']}}</p>
        </div>
    </div>
    @foreach (explode(",", $job['categories']) as $category)
    <button class="mt-5 bg-carrot-600 hover:bg-orange-400 text-white py-1 px-3 rounded-md">{{ $category }}</button>
    @endforeach
    <h1 class="text-2xl mt-6 font-bold">Description</h1>
    <p class="text-lg">{{$job['description']}}</p>
</main>
@endsection