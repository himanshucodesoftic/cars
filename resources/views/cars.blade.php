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
    <div class="px-5 pt-6 pb-5 bg-orange-500 text-center border border-gray-300  rounded lg:w-2/5 items-center">
      <div class="mb-5 font-bold"><h4 class="text-2xl"> @lang('home.BookaRide')</h4></div>
    
      <form class="shadow-lg  p-4 flex flex-col bg-white rounded-lg items-center" action="{{url('/submitbookride')}}" method="post">
        @csrf
        <input type="text" placeholder=" @lang('home.name')"  name="name" class="mb-3 py-3 px-4 w-full border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" />
        <input type="email" placeholder="@lang('home.email')" name="email" class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" />
      
      <p class="max-w-md px-5 mb-3 text-xs text-gray-600 sm:text-sm md:mb-5">
        
      </p>
   
      <button href="/" class="inline-flex items-center bg-orange-500 justify-center  h-12 px-6 font-semibold transition duration-200 border border-gray-300 rounded md:w-auto hover:bg-orange-600 focus:shadow-outline focus:outline-none">
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
     
        <span class="relative"></span>
      </span>   
      @lang('home.Chooseyourcarforrental')
      {{-- Choose your car for rental --}}
    </h2>
  
  </div>





  <div class="grid gap-6 row-gap-5 mb-8 lg:grid-cols-4 sm:row-gap-6 sm:grid-cols-2">
  @foreach($productlist as $list)
   
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
          <button class="bg-white px-3 shadow-lg mt-1 font-semibold  rounded py-1 hover:bg-orange-100" onclick="openModal('mymodaltop')">Book Car </button>  
        </div>
      </div>
    
    
    @endforeach
  
  </div>

</div>
<!---modal pop up start -->]
<form class="shadow-lg  p-4 flex flex-col bg-white rounded-lg items-center" action="{{url('/submitbookride')}}" method="post">
        @csrf
        <dialog id="mymodaltop" class="bg-transparent z-0 relative w-screen h-screen" open="">
  <div class="fixed z-10 inset-0 overflow-y-auto opacity-100">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <!-- <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" onclick="modalClose('mymodaltop')" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div> -->

      <div class="fixed inset-0 transition-opacity" aria-hidden="true">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>
  
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
     
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <span class="absolute right-0 mr-4" onclick="modalClose('mymodaltop')">
          <svg class="h-12 w-12 fill-current text-grey hover:text-grey-darkest" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"></path></svg>
      </span>
        <div class="px-5 pt-6 pb-5 text-center border border-gray-300 rounded  items-center">
          <div class="mb-5 font-bold"><h4 class="text-2xl">Book a Ride</h4></div>
        
          <form class="shadow-lg  p-4 flex flex-col bg-white rounded-lg items-center">

            <input type="text" placeholder="Name" class="mb-3 py-3 px-4 w-full border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500">
            <input type="text" placeholder="Email" class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500">
          
          <p class="max-w-md px-5 mb-3 text-xs text-gray-600 sm:text-sm md:mb-5">
            
          </p>
        
          <button href="/" class="inline-flex items-center bg-yellow-500 justify-center  h-12 px-6 font-semibold transition duration-200 bg-white border border-gray-300 rounded md:w-auto hover:bg-green-500 focus:shadow-outline focus:outline-none">
            Book Ride 
          </button>
          </form>
        </div>
   
      </div>
    </div>
  </div>
  
</dialog> 
</form>



<script>
  function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script>
  $(document).ready(function() {
  $(".nav-toggler").each(function(_, navToggler) {
    var target = $(navToggler).data("target");
    $(navToggler).on("click", function() {
      $(target).animate({
        height: "toggle"
      });
    });
  });
  });
function openModal(key) {
        document.getElementById(key).showModal(); 
        document.body.setAttribute('style', 'overflow: hidden;'); 
        document.getElementById(key).children[0].scrollTop = 0; 
        document.getElementById(key).children[0].classList.remove('opacity-0'); 
        document.getElementById(key).children[0].classList.add('opacity-100')
    }

    function modalClose(key) {
        document.getElementById(key).children[0].classList.remove('opacity-100');
        document.getElementById(key).children[0].classList.add('opacity-0');
        setTimeout(function () {
            document.getElementById(key).close();
            document.body.removeAttribute('style');
        }, 100);
    }
  </script>
@endsection