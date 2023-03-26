@extends('layouts.html')

@section('container')
@include('components.navbar')
<x-hero></x-hero>
<x-features :$text :features="$features"></x-features>
@endsection
