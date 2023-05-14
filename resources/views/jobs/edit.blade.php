@extends('layouts.html')

@section('container')
@include('components.navbar')

@if (isset($errors) && count($errors))

<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }} </li>
    @endforeach
</ul>

@endif
<section class="flex items-center  ml-56 my-8">
    <img class="w-36 h-36 rounded-full aspect-square object-cover" src="{{ asset('/storage/'. $job->company['avatar']) }}" alt="{{$job->company['name']}}">
    <h1 class="text-2xl ml-3 font-semibold text-smoke-700">{{$job->company['name']}}</h1>
</section>
<form action="{{ env('APP_URL') }}/jobs/update/{{$job['uuid']}}" method="post" enctype="multipart/form-data" class="grid w-3/4 mx-auto my-4">
    {{ method_field('put') }}
    @csrf
    <div class="my-5 flex flex-col">
        <label for="title">title</label>
        <input type="text" class="border-2 w-1/2 p-2" id="title" name="title" value="{{ old('title', $job['title']) }}" />
    </div>

    <div class="my-4 flex flex-col">
        <label for="position">position</label>
        <input type="text" class="border-2 w-1/2 p-2" id="position" name="position" value="{{ old('position', $job['position']) }}" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="location">location</label>
        <input type="text" class="border-2 w-1/2 p-2" id="location" name="location" value="{{ old('location', $job['location']) }}" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="salary">salary</label>
        <input type="text" class="border-2 w-1/2 p-2" id="salary" name="salary" value="{{ old('salary', $job['salary']) }}" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="categories">categories</label>
        <input type="text" class="border-2 w-1/2 p-2" id="categories" name="categories" value="{{ old('categories', $job['categories']) }}" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="posted_at">posted_at</label>
        <input type="date" class="border-2 w-1/2 p-2" id="posted_at" name="posted_at" value="{{ old('posted_at', $job['posted_at']) }}" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="description">description</label>
        <textarea class="border-2 w-1/2 p-2" id="description" name="description">{{ old('description', $job['description']) }}</textarea>
    </div>
    <button class="bg-carrot-600 text-white text-xl py-4 px-2 w-1/2 ">update job</button>
</form>
<x-footer></x-footer>
@endsection