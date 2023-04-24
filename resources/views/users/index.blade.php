@extends('layouts.html')

@section('container')
@include('components.navbar')
<main class="flex flex-col items-center pb-6">
    <img class="w-full h-72 object-cover" src="/storage/{{ $profile['cover'] ?? 'covers/default_banner.jpg' }}" alt="" srcset="">
    <img class="-mt-16 border-4 border-white w-36 h-36 rounded-full mx-auto object-cover" src="/storage/{{ $profile['avatar'] ?? '/avatars/default.webp' }}" alt="{{ $user['name']?? null }}">
    <h1 class="text-2xl text-smoke-800 p-5">{{ $user['name'] }} <a href="/user/{{$user['username']}}" class="">@/{{ $user['username'] }}</a><span class="bg-gray-600 text-white text-sm px-1 ml-3"><a href="/user/{{ $user['username']}}/edit">edit</a></span></h1>
    <p class="text-xl">{{ $profile['header'] }}</p>
    <p class=" mt-3 text-xl mb-1"> Skills: </p>
    <div>
        @if(is_null($profile['skills']))
        <p>No skill</p>
        @else
        @foreach(explode(",", $profile['skills']) as $skill)
        <button class="bg-carrot-600 hover:bg-orange-400 text-white py-1 px-3 rounded-md ">{{ $skill }}</button>
        @endforeach
        @endif
    </div>
</main>
<hr>
<h1 class="text-3xl text-center">Experiences</h1>
<div name="experiences" class="w-3/4 mx-auto flex px-12">
    @foreach($experiences as $experience)
    <div class="grid grid-cols-4 w-1/2 m-3 relative text-smoke-800">
        @if($experience->still_work)
        <span class="absolute bg-green-600 text-white px-2">still working</span>
        @endif
        <img class="row-span-2 w-32" src="/storage/company/avatars/nmEEzaZMOn8gGYgK7QmGsFZdFHSI6hKBEDTjGyIg.jpg" alt="{{$experience->company_name}}">
        <h1 class="col-start-2 col-end-5 text-2xl font-semibold">{{ $experience->title }}</h1>
        <h2 class="col-start-2 col-end-4 text-lg">at {{ $experience->company_name }}</h2>
        <p class="col-span-5 text-lg">{{ $experience->location }}</p>
        <p class="col-span-full text-justify py-4">{{ $experience->description }}</p>
        <span class="col-start-1 place-self-end justify-self-start">{{ $experience->started }}</span>
        <span class="col-start-4 place-self-end justify-self-end">{{ $experience->ended }}</span>
    </div>

    @endforeach
</div>
<x-footer></x-footer>
@endsection