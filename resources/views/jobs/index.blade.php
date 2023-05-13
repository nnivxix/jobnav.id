@extends('layouts.html')

@section('container')
@include('components.navbar')
<h1 class="text-center p-4 text-2xl font-bold text-smoke-700">Find Jobs</h1>
<main class="grid grid-cols-3 w-3/4 mx-auto">
    <aside class="flex col-span-1  mx-auto mb-3 mr-6 pt-2">
        <form action="{{ route('jobs.index') }}" method="get">
            <div class="flex">
                <input autofocus type="text" class="p-2 text-smoke-700 border-2 rounded-l-xl rounded-r-none focus:ring-0 focus:outline-0  border-orange-500 w-3/4" placeholder="Back-end Developer" name="keyword" value="{{$keyword}}" id="">
                <button class="bg-orange-500 font-bold text-xl rounded-l-none rounded-r-xl text-white px-4 py-3 w-52">Find Jobs</button>
            </div>
            <div class="my-3">
                <label for="type_job">Filter by Type Job</label>
                <select class="p-2" name="type_job" id="">
                    <option value="remote">Remotes</option>
                    <option value="intership">Intership</option>
                    <option value="full-time">Full Time</option>
                    <option value="part-time">Part Time</option>
                    <option value="freelance">Freelance</option>
                </select>
            </div>
        </form>
    </aside>
    <section class="col-span-2 grid grid-cols-2 gap-2">
        @foreach($jobs as $job)
        <div class="flex my-2 items-center relative">
            @if(auth()->user() && $job->company->ownedby === auth()->user()->id)
            <a href="{{ env('APP_URL') }}/jobs/{{$job['uuid']}}/edit" class="absolute text-white top-0 right-0 bg-green-600 px-2">edit</a>
            @endif
            <img class="w-24 aspect-square object-cover" src="{{URL::asset('/storage/'.$job->company->avatar)}}" alt="{{$job['title']}}">
            <div class="px-3 w-full">
                <h1 class="text-xl font-medium w-full">
                    <a href="/jobs/{{$job['uuid']}}">
                        {{ $job['title'] }}
                </h1>
                </a>
                <h2 class="text-lg">{{ $job['position'] }}</h2>
                <div class="flex justify-between">
                    <span>{{ $job['location'] }}</span>
                    <span>$ {{ number_format($job['salary'], 0, "," )}}</span>
                </div>
            </div>
        </div>
        @endforeach
    </section>

</main>
<x-footer></x-footer>
@endsection