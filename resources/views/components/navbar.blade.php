<nav class="grid grid-cols-6 px-16 py-4 text-smoke-700 bg-gray-100">
  <h1 class="col-span-1 text-2xl font-bold "><a href="/">Jobnav.id</a></h1>
  <ul class="text-md flex w-1/2  place-self-center justify-center col-span-4" id="middle">
    <li class="px-3"><a href="#">Jobs</a></li>
    <li class="px-3"><a href="#">Learn</a></li>
    <li class="px-3"><a href="#">Companies</a></li>
    <li class="px-3"><a href="#">Services</a></li>
  </ul>
  <ul class="text-md col-span-1 flex items-center w-3/4 place-self-end">
    @auth
    <li class="px-3 font-semibold"><a href="/user">{{ auth()->user()->name }}</a></li>
    <form action="/logout">
      <button>Logout</button>
    </form>
    @else
    <li class="bg-orange-500 text-white py-2 px-4 rounded-lg mr-3"><a href="/register">Sign up</a></li>
    <li><a href="/login">Log in</a></li>
    @endauth
  </ul>
</nav>