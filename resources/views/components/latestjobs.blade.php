@props(["latest_jobs"])

<div class="grid grid-cols-3 gap-5 my-7 mx-20">
  <h1 class="text-smoke-800 text-3xl col-span-3 font-bold py-5">Latest Jobs</h1>
  @foreach ($latest_jobs as $job )
  <article class="border border-carrot-600 p-6 rounded-md hover:bg-gray-100 ">
    <div class="grid grid-cols-6 my-3">
      <img class="col-start-1 place-self-center p-3 col-end-2 row-start-1 row-end-3" src="{{ $job['icon'] }}" alt="{{ $job['company'] }}" srcset="">
      <h1 class="text-smoke-700 col-start-2 col-end-5" id="company">{{ $job['company'] }}</h1>
      <h2 class="text-smoke-700 row-start-2 col-start-2 col-end-5" id="position">{{ $job['position'] }}</h2>
      <button class="col-start-6 row-span-2 rounded-md flex justify-end items-center">
        <img src="{{ URL::asset('images/bookmark.svg') }}" class="w-[24px]" alt="bookmark" title="bookmark icon">
      </button>
    </div>
    <h3 class="py-4 font-bold text-xl text-smoke-800" id="job title">{{ $job['title'] }}</h3>
    <p class="text-smoke-400 text-md">{{ $job['description'] }}</p>
    <div class="grid grid-cols-3 gap-2 content-center mt-4">
      <button class="place-self-start py-2 px-5 rounded-md bg-carrot-600 text-white">Apply</button>
      <p class=" text-smoke-700 text-center self-center">{{ $job['location'] }}</p>
      <p class=" text-smoke-700 text-end self-center">{{ $job['job_type'] }}</p>
    </div>
  </article>
  @endforeach
</div>