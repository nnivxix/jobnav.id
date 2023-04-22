@extends('layouts.html')

@section('container')
@include('components.navbar')
<div class="flex items-center px-16 text-smoke-800">
    <div class="w-1/3">
        <h1 class="text-3xl pb-6">Grow and Switch at <span class="decoration-dashed underline"><a href="{{env('APP_URL')}}">Jobnav.id</a> </span></h1>
        <form class="flex flex-col w-4/5" action="/regist" method="POST">
            @csrf
            <label class="mb-1" for="name">Name</label>
            <input name="name" class="border-2 p-2 rounded-md mb-6 border-carrot-600" type="text" id="name">
            <label class="mb-1" for="name">Username</label>
            <input name="username" class="border-2 p-2 rounded-md mb-6 border-carrot-600" type="text" id="username">
            <label class="mb-1" for="email">Email</label>
            <input name="email" class="border-2 p-2 rounded-md mb-6 border-carrot-600" type="email" id="email">
            <label class="mb-1" for="password">Password</label>
            <input name="password" class="border-2 p-2 rounded-md mb-6 border-carrot-600" type="password" id="password">
            <button class="bg-carrot-600 text-white p-3 font-bold rounded-md">Register</button>
        </form>
    </div>
    <img class="w-2/3 h-[90vh] object-cover object-bottom" src="{{URL::asset('images/picture_regist.jpg')}}" alt="login banner" srcset="">
</div>
@endsection