@extends('layouts.html')

@section('container')
@include('components.navbar')

<form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data" class="grid w-3/4 mx-auto my-4">
    @csrf
    <div class="my-5 flex w-1/2 flex-col">
        <label for="company_id">Choose a company:</label>
        <select class="p-2 w-auto" name="company_id" id="company_id">
            <option value="" selected> - </option>

            @foreach ($companies as $company)
            <option value="{{$company->id}}">{{$company->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="my-5 flex flex-col">
        <label for="title">title</label>
        <input type="text" class="border-2 w-1/2 p-2" id="title" name="title" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="position">position</label>
        <input type="text" class="border-2 w-1/2 p-2" id="position" name="position" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="location">location</label>
        <input type="text" class="border-2 w-1/2 p-2" id="location" name="location" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="salary">salary</label>
        <input type="text" class="border-2 w-1/2 p-2" id="salary" name="salary" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="categories">categories</label>
        <input type="text" class="border-2 w-1/2 p-2" id="categories" name="categories" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="posted_at">posted_at</label>
        <input type="date" class="border-2 w-1/2 p-2" id="posted_at" name="posted_at" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="description">description</label>
        <textarea class="border-2 w-1/2 p-2" id="description" name="description"></textarea>
    </div>
    <button class="bg-carrot-600 text-white text-xl py-4 px-2 w-1/2 ">Create job</button>
</form>
<x-footer></x-footer>
@endsection