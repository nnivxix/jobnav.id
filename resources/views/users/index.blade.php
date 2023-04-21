@extends('layouts.html')

@section('container')
@include('components.navbar')
<main class="flex flex-col items-center pb-6">
    <img class="w-full h-72 object-cover" src="/storage/{{ $profile['cover'] }}" alt="" srcset="">
    <img class="-mt-16 border-4 border-white w-36 h-36 rounded-full mx-auto object-cover" src="/storage/{{ $profile['avatar'] }}" alt="{{ $user['name']?? null }}">
    <h1 class="text-2xl text-smoke-800 p-5">{{ $user['name'] }} <a href="/user/{{$user['username']}}" class="">@/{{ $user['username'] }}</a></h1>
    <p class="text-xl">{{ $profile['header'] }}</p>
    <p class="mt-3 text-xl mb-1"> Skills: </p>
    <div>
        @foreach(explode(",", $profile['skills']) as $skill)
        <button class="bg-carrot-600 hover:bg-orange-400 text-white py-1 px-3 rounded-md ">{{ $skill }}</button>
        @endforeach
    </div>
</main>
<x-footer></x-footer>
@endsection