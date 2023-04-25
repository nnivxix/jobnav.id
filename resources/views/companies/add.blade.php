@extends('layouts.html')

@section('container')
@include('components.navbar')
<form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data" class="grid w-3/4 mx-auto my-4">
    @csrf
    <div class="flex flex-col">
        <div class="relative w-36 h-36">
            <span id="clear" class="absolute right-0 top-0 text-lg" style="cursor: pointer;">x</span>
            <img class="w-36 h-36 rounded-full object-cover" src="/images/company.jpg" alt="" id="preview">
        </div>
        <input type="file" accept="image/png, image/jpeg" name="avatar" id="imageInput" onchange="previewFiles()" class="pt-6" />
    </div>
    <div class="my-5 flex flex-col">
        <label for="name">Name</label>
        <input type="text" class="border-2 w-1/2 p-2" id="name" name="name" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="slug">slug</label>
        <input type="text" class="border-2 w-1/2 p-2" id="slug" name="slug" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="about">About</label>
        <textarea class="border-2 w-1/2 p-2" id="about" name="about"></textarea>
    </div>
    <div class="my-4 flex flex-col">
        <label for="location">location</label>
        <input type="text" class="border-2 w-1/2 p-2" id="location" name="location" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="website">website</label>
        <input type="text" class="border-2 w-1/2 p-2" id="website" name="website" />
    </div>
    <div class="my-4 flex flex-col">
        <label for="full_address">full_address</label>
        <input type="text" class="border-2 w-1/2 p-2" id="full_address" name="full_address" />
    </div>
    <button class="bg-carrot-600 text-white text-xl py-4 px-2 w-1/2 ">Create</button>
</form>
<x-footer></x-footer>
<script>
    const clearBtn = document.getElementById('clear')
    const preview = document.querySelector("#preview");
    const inputImage = document.querySelector("#imageInput");

    function clearImage(event) {
        event.preventDefault();
        inputImage.value = "";
        preview.setAttribute("src", "/images/company.jpg");
        clearBtn.style.display = 'none';
    }

    clearBtn.addEventListener('click', clearImage)
    clearBtn.style.display = 'none';

    function previewFiles() {
        const oFReader = new FileReader();

        clearBtn.style.display = 'block';
        oFReader.readAsDataURL(inputImage.files[0]);
        oFReader.onload = function(oFREvent) {
            preview.src = oFREvent.target.result;
            preview.alt = "preview image post";
            preview.title = "preview image post";
        }
    }
</script>
@endsection