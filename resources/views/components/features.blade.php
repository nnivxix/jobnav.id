@props(["text", "features"])

<div class="bg-carrot-10 text-smoke-700 pt-4 pb-14 px-16 grid grid-cols-3">
  <h2 class="col-span-3 text-2xl mx-28 w-1/2 justify-self-center py-8 text-center justify-items-center">{{ $text }}</h2>

  @foreach ($features as $feature )
  <div class="col-span-1 justify-self-center">
    <img src="{{ $feature['icon'] }}" alt="{{ $feature['title'] }}" srcset="">
    <h5 class="text-center text-xl text-smoke-700 font-medium">{{ $feature['title'] }}</h5>
  </div>
  @endforeach


</div>
