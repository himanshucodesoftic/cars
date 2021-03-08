@extends('layout.home_layout')
@section('content')
<!-- header start-->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col justify-between lg:flex-row">
    <div class="mb-12 lg:max-w-lg lg:pr-5 lg:mb-0">
      <div class="max-w-xl mb-6">
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
          @lang('home.Thequick,HasselFreeRentalServicesby')
          {{-- The quick, Hassel Free Rental Services by --}}
          <br class="hidden md:block" />
          
          <span class="inline-block text-red-800">
            {{-- Red Auto Rent. --}}
            @lang('home.RedAutoRent.')
        
          </span>
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
          @lang('home.foranyquerycontactusbyphoneat.'): +372 5535603<br />        @lang('home.orvia') <span class="border-orange-500  border-b-2 pb-1">        @lang('home.email'):  redautorent@gmail.com</span> <br />@lang('home.orjustfilloutaformat:') <span class="text-red-800">www.RedAutoRent.ee</span>
        </p>
      </div>

    </div>
    <div class="px-5 pt-6 pb-5 text-center border border-gray-300 rounded lg:w-2/5 items-center">
      <div class="mb-5 font-bold"><h4 class="text-2xl"> @lang('home.BookaRide')</h4></div>
    
      <form class="shadow-lg  p-4 flex flex-col bg-white rounded-lg items-center" action="{{url('/submitbookride')}}" method="post">
        @csrf
        <input type="text" placeholder=" @lang('home.name')"  name="name" class="mb-3 py-3 px-4 w-full border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" />
        <input type="email" placeholder="@lang('home.email')" name="email" class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" />
      
      <p class="max-w-md px-5 mb-3 text-xs text-gray-600 sm:text-sm md:mb-5">
        
      </p>
   
      <button href="/" class="inline-flex items-center bg-yellow-500 justify-center  h-12 px-6 font-semibold transition duration-200 bg-white border border-gray-300 rounded md:w-auto hover:bg-gray-100 focus:shadow-outline focus:outline-none">
        Book Ride
      </button>
      </form>
    </div>
  </div>
</div>
  <!-- header end-->

 <!--- our cars -->
 <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <div>
      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
        @lang('home.ourcars')
        {{-- Our Cars --}}
      </p>
    </div>
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <!-- <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="18302e52-9e2a-4c8e-9550-0cbb21b38e55" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#18302e52-9e2a-4c8e-9550-0cbb21b38e55)" width="52" height="24"></rect>
        </svg> -->
        <span class="relative"></span>
      </span>   
      @lang('home.Chooseyourcarforrental')
      {{-- Choose your car for rental --}}
    </h2>
  
  </div>





  <div class="grid gap-6 row-gap-5 mb-8 lg:grid-cols-4 sm:row-gap-6 sm:grid-cols-2">
  @foreach($productlist as $list)
    <a href="/" aria-label="View Item">
      <div class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
         <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="{{asset('image')}}" alt="" /> 
        <div class="absolute inset-x-0 bottom-0 px-6 py-4 bg-black bg-opacity-75">
          <p class="text-sm font-medium tracking-wide text-white">
        Name:{{ $list['name'] }}<br>
        Model:{{ $list['model'] }}<br>
        price:{{ $list['price'] }}<br>
        Gearbox:{{ $list['Gearbox'] }}<br>
        price:{{ $list['description'] }}<br>
        Gearbox:{{ $list['year'] }}<br>
          </p>
        </div>
      </div>
    </a>
    
    @endforeach
  
  </div>

</div>

@endsection