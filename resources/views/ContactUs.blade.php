@extends('layout.home_layout')
@section('content')


<!-- header start-->
<!--  start-->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
    <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
      <div class="max-w-xl mb-6">
        <div>
        
        </div>
        <h2 class="max-w-lg mb-6 font-sans  text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
          <span class=" "> @lang('home.FeelFreeto')</span><br class="hidden md:block" />
          <span class="text " > @lang('home.contactus')</span>
          <span class=" "> </span>
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
          @lang('home.wewillreachyou.')
          {{-- we will reach you. --}}
        </p>
      </div>
      <hr class="mb-6 border-gray-300" />
      <div class="flex">
        <a href="/" aria-label="Play Song" class="mr-3">
          <div class="flex items-center bg-orange-500 justify-center w-10 h-10 text-white transition duration-300 transform rounded-full shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 hover:scale-110">
            <svg class="w-6" fill="currentColor" viewBox="0 0 576 512">
              <path
                d="M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 400H48V80h480v352zM208 256c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm-89.6 128h179.2c12.4 0 22.4-8.6 22.4-19.2v-19.2c0-31.8-30.1-57.6-67.2-57.6-10.8 0-18.7 8-44.8 8-26.9 0-33.4-8-44.8-8-37.1 0-67.2 25.8-67.2 57.6v19.2c0 10.6 10 19.2 22.4 19.2zM360 320h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8z"
              ></path>
            </svg>
          </div>
        </a>
        
        <div class="flex flex-col">
          <div class="text-sm font-semibold"> @lang('home.phoneat')phone at:  &amp; +372 5535603 </div>
          <div class="text-xs text-gray-700">Akadeemia tee 6, Tallinn, Estonia,  12611</div>
        </div>
   
        
      
      </div>

    </div>
    <div class="flex items-center justify-center lg:w-1/2 ">
      <div class="w-4/5">
        <img class="object-cover" src="{{asset('../assets/img/contactus.jpg')}}" alt="" />
      </div>
   
    </div>
  </div>

</div>
  <!-- header end-->

  

@endsection