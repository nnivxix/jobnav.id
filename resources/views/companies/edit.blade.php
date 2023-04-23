@extends('layouts.html')

@section('container')
@include('components.navbar')
<form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data" class="grid w-3/4 mx-auto my-4">
    {{ method_field('put') }}
    @csrf
    <div class="flex flex-col">
        <img class="w-36 h-36 rounded-full object-cover" src="{{ asset('/storage/'. $company['avatar']) }}" alt="" id="preview">
        <input type="file" accept="image/png, image/jpeg" name="avatar" id="imageInput" onchange="previewFiles()" class="pt-6" />
    </div>
    <div class="my-5 flex flex-col">
        <label for="name">Name</label>
        <input type="text" class="border-2 w-1/2 p-2" id="name" name="name" value="{{ old('name', $company['name']) }}" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="slug">slug</label>
        <input type="text" class="border-2 w-1/2 p-2" id="slug" name="slug" value="{{ old('slug', $company['slug']) }}" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="about">About</label>
        <textarea class="border-2 w-1/2 p-2" id="about" name="about">{{ old('about', $company['about']) }}</textarea>
    </div>
    <div class="my-4 flex flex-col">
        <label for="location">location</label>
        <input type="text" class="border-2 w-1/2 p-2" id="location" name="location" value="{{ old('location', $company['location']) }}" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="website">website</label>
        <input type="text" class="border-2 w-1/2 p-2" id="website" name="website" value="{{ old('website', $company['website']) }}" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="full_address">full_address</label>
        <input type="text" class="border-2 w-1/2 p-2" id="full_address" name="full_address" value="{{ old('full_address', $company['full_address']) }}" />
    </div>
    <button class="bg-carrot-600 text-white text-xl py-4 px-2 w-1/2 ">update</button>
</form>
<x-footer></x-footer>
<script>
    function previewFiles() {
        const preview = document.querySelector("#preview");
        const image = document.querySelector("#imageInput");
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            preview.src = oFREvent.target.result;
            preview.alt = "preview image post";
            preview.title = "preview image post";
        }
    }
</script>
@endsection