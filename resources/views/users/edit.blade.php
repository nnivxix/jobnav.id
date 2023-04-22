@extends('layouts.html')

@section('container')
@include('components.navbar')
<form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data" class="grid w-1/2 mx-auto my-4">
    {{ method_field('put') }}
    @csrf
    <div class="flex flex-col">
        <img class="w-36 h-36 rounded-full object-cover" src="{{ asset('/storage/'. $profile['avatar']) }}" alt="" id="preview">
        <input type="file" name="avatar" id="imageInput" onchange="previewFiles()" class="pt-6" />
    </div>
    <div class="my-5 flex flex-col">
        <label for="name">Name</label>
        <input type="text" class="border-2 w-1/2 p-2" id="name" name="name" value="{{ old('name', $user['name']) }}" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="username">Username</label>
        <input type="text" class="border-2 w-1/2 p-2" id="username" name="username" value="{{ old('username', $user['username']) }}" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="header">Header</label>
        <textarea class="border-2 w-1/2 p-2" id="header" name="header">{{ old('header', $profile['header']) }}</textarea>
    </div>
    <div class="my-4 flex flex-col">
        <label for="skills">Skills</label>
        <input type="text" class="border-2 w-1/2 p-2" id="skills" name="skills" value="{{ old('skills', $profile['skills']) }}" />
        <span class="text-sm">please separate with comma ","</span>
    </div>
    <button class="bg-carrot-600 text-white text-xl py-4 px-2 w-1/2 ">update</button>
</form>


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