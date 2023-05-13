<div class="grid grid-cols-2 h-2/3 w-3/4  grid-rows-3 my-4 mx-auto">
  <h1 class="col-span-1 col-start-1 col-end-2 text-4xl font-bold self-center text-grass-500">Your Dream Job Awaits Start Your Search Today</h1>
  <p class="col-span-1 col-start-1 col-end-2 row-start-2 py-7 text-xl text-smoke-700">Whether you're looking for your first job or transitioning to a new career, our platfprm offers a wide range of job opportunities to match your skills and experience.</p>
  <form action="{{ route('jobs.index') }}" method="get" class="col-span-1 col-start-1 col-end-2 row-start-3 self-center object-cover">
    <input type="text" name="keyword" class="p-5 text-smoke-700 border-2 rounded-l-xl rounded-r-none focus:ring-0 focus:outline-0  border-orange-500 w-3/4" placeholder="Back-end Developer" name="" id="">
    <button class="bg-orange-500 font-bold border-2 border-orange-500 focus:ring-0 outline-0 rounded-l-none rounded-r-xl text-white px-4 py-5 -m-1.5">Find Jobs</button>
  </form>
  <img class="col-start-2 row-span-3 place-self-end" src="{{URL::asset('images/coop.svg')}}" alt="jobnav hero image" srcset="">
</div>