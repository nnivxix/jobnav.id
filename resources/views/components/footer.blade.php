<footer class="grid grid-cols-5 bg-carrot-600 text-orange-100 px-20">
  <a class="col-start-1 col-end-1 text-4xl font-bold py-6 mt-8" href="{{env('APP_URL')}}">Jobnav.id</a>
  <a class="col-start-1 col-end-1 text-sm" href="emailto:email@jobnav.id">email@jobnav.id</a>
  <div class="col-start-1 col-end-1 flex  py-4">
    <img class="pr-4" src="{{ URL::asset('images/ic_discord.svg') }}" alt="" srcset="">
    <img class="px-4" src="{{ URL::asset('images/ic_facebook.svg') }}" alt="" srcset="">
    <img class="px-4" src="{{ URL::asset('images/ic_linkedin.svg') }}" alt="" srcset="">
    <img class="px-4" src="{{ URL::asset('images/ic_twitter.svg') }}" alt="" srcset="">
  </div>
  <p class="col-start-1 col-end-1  pb-4">Copyright 2023 - Alright Reserved</p>
  <ul class="col-start-5 flex justify-self-end w-auto pb-4">
    <li class="px-4"><a href="#">Term of Us</a></li>
    <li><a href="#">Privacy Policy</a></li>
  </ul>
</footer>