@extends('layouts.html')

@section('container')
@include('components.navbar')
<main class="flex flex-col items-center">
    <img class="w-28 h-28 rounded-full mx-auto object-cover" src="/storage/{{ $profile['avatar'] }}" alt="{{ $user['name']?? null }}">
    <h1 class="text-2xl text-smoke-800 p-5">{{ $user['name'] }} <a href="/user/{{$user['username']}}" class="">@/{{ $user['username'] }}</span></h1>
    <h1></h1>
</main>
<x-footer></x-footer>
@endsection