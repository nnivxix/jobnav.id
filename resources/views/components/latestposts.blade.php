@props(['latest_posts'])

<div class="grid grid-cols-3 gap-5 my-7 mx-20">
  <h1 class="text-smoke-800 text-3xl col-span-3 font-bold py-5">Latest Tips For You</h1>
  @foreach ($latest_posts as $post )
  <article class="shadow-lg grid-cols-1 rounded-md overflow-clip border border-gray-400">
    <figure class="relative h-[400px] overflow-hidden">
      <img class="aspect-square h-full w-full object-cover hover:scale-110 transition-all" src="{{ $post['image'] }}" alt="{{ $post['title'] }}" srcset="">
    </figure>
    <h1 class="px-4 py-2 text-xl text-smoke-800 font-bold">
      <a href="#">
        {{ $post['title'] }}
    </h1>
    </a>
    <h5 class="px-4 py-2 text-lg text-smoke-700 font-medium  ">Published at {{ $post['posted_at'] }}</h5>
    <p class="px-4 text-smoke-400 pb-7">{{ $post['excerpt'] }}</p>
  </article>
  @endforeach
</div>