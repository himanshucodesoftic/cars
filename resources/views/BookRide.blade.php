
@extends('layout.home_layout')
@section('content')
<!-- header start-->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl  md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col justify-between lg:flex-row">
    <div class="mb-12 lg:max-w-lg lg:pr-5 lg:mb-0">
      <div class="max-w-xl mb-6">
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
        @lang('home.Thequick,HasselFreeRentalServicesby')<br class="hidden md:block">
          
          <span class="inline-block text-red-800">   @lang('home.RedAutoRent.')</span>
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
        @lang('home.foranyquerycontactusbyphoneat.'): +372 5535603<br> @lang('home.orvia')  <span class="border-orange-500  border-b-2 pb-1"> @lang('home.email'):  redautorent@gmail.com</span> <br>@lang('home.orjustfilloutaformat:') <span class="text-red-800">www.RedAutoRent.ee</span>
        </p>
      </div>

    </div>
    <div class="px-5 pt-6 pb-5 text-center bg-orange-500 border border-gray-300 rounded-lg  hover:bg-orange-400 lg:w-2/5 items-center">
      <div class="mb-5 font-bold"><h4 class="text-2xl">@lang('home.BookaRide')</h4></div>
    
      <form class="shadow-lg  p-4 flex flex-col bg-white rounded-lg items-center" action="{{url('/submitbookride')}}" method="post">
        @csrf    <input type="text" placeholder="@lang('home.name')"  required name="name" class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500">
        <input type="text" placeholder="Email" name="@lang('home.email')"required class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500">
      
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