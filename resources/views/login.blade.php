@extends('layouts.html')

@section('container')
@include('components.navbar')
<div class="flex items-center px-16 text-smoke-800">
  <div class="w-1/3">
    <h1 class="text-3xl pb-6">Welcome back to <span class="decoration-dashed underline"><a href="{{env('APP_URL')}}">Jobnav.id</a> </span></h1>
    <form class="flex flex-col w-4/5" action="" method="post" class="flex flex-col">
      <label class="mb-1" for="email">Email</label>
      <input class="border-2 p-2 rounded-md mb-6 border-carrot-600" type="email" id="email">
      <label class="mb-1" for="password">Password</label>
      <input class="border-2 p-2 rounded-md mb-6 border-carrot-600" type="password" id="password">
      <button class="bg-carrot-600 text-white p-3 font-bold rounded-md">Log in</button>
    </form>
  </div>
  <img class="w-2/3 h-[90vh] object-cover object-bottom" src="{{URL::asset('images/picture_login.jpg')}}" alt="login banner" srcset="">
</div>
@endsection