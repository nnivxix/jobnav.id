@extends('layouts.html')

@section('container')
@include('components.navbar')
<x-hero></x-hero>
<x-features :$text :features="$features"></x-features>
<x-latestjobs :$latest_jobs></x-latestjobs>
<x-latestposts :$latest_posts></x-latestposts>
<x-subscribe></x-subscribe>
@endsection