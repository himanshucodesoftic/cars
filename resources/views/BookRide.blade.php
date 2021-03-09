
@extends('layout.home_layout')
@section('content')
<!-- header start-->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
    <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
      <div class="max-w-xl mb-6">
        <div>
          <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
            @lang('home.brandnew')   
            {{-- Brand new --}}
          </p>
        </div>
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
          @lang('home.Everythingyou')   
          
          <br class="hidden md:block" />
          @lang('home.canimagine')   
         
          {{-- can imagine --}}
          <span class="inline-block text-deep-purple-accent-400">
            @lang('home.Everythingyou')   
          
            @lang('home.isreal') </span>
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
        </p>
      </div>
      <div class="flex items-center space-x-3">
        <a href="/" class="w-32 transition duration-300 hover:shadow-lg">
          <img src="{{asset('https://kitwind.io/assets/kometa/app-store.png')}}" class="object-cover object-top w-full h-auto mx-auto" alt="" />
        </a>
        <a href="/" class="w-32 transition duration-300 hover:shadow-lg">
          <img src="{{asset('https://kitwind.io/assets/kometa/google-play.png')}}" class="object-cover object-top w-full h-auto mx-auto" alt="" />
        </a>
      </div>
    </div>
    <div class="flex items-center justify-center lg:w-1/2">
      <div class="w-2/5">
        <img class="object-cover" src="{{asset('https://kitwind.io/assets/kometa/one-girl-phone.png')}}" alt="" />
      </div>
      <div class="w-5/12 -ml-16 lg:-ml-32">
        <img class="object-cover" src="{{asset('https://kitwind.io/assets/kometa/two-girls-phone.png')}}" alt="" />
      </div>
    </div>
  </div>
  <a
    href="/"
    aria-label="Scroll down"
    class="flex items-center justify-center w-10 h-10 mx-auto text-gray-600 duration-300 transform border border-gray-400 rounded-full hover:text-deep-purple-accent-400 hover:border-deep-purple-accent-400 hover:shadow hover:scale-110"
  >
    <svg xmlns="{{asset('http://www.w3.org/2000/svg')}}" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
      <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z"></path>
    </svg>
  </a>
</div>
<form class="shadow-lg  p-4 flex flex-col bg-white rounded-lg items-center" action="{{url('/submitbookride')}}" method="post">
        @csrf
<dialog id="mymodaltop" class="bg-transparent z-0 relative w-screen h-screen">
  <div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
   
      <div class="fixed inset-0 transition-opacity" aria-hidden="true">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>
  
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
 
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="px-5 pt-6 pb-5 text-center border border-gray-300 rounded  items-center">
          <div class="mb-5 font-bold"><h4 class="text-2xl">Book a Ride</h4></div>
        
          <form class="shadow-lg  p-4 flex flex-col bg-white rounded-lg items-center">
            <input type="text" placeholder="Name" name="name" class="mb-3 py-3 px-4 w-full border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" />
            <input type="text" placeholder="Email"  name="email" class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" />
          
          <p class="max-w-md px-5 mb-3 text-xs text-gray-600 sm:text-sm md:mb-5">
            
          </p>
       
          <button href="" class="inline-flex items-center bg-yellow-500 justify-center  h-12 px-6 font-semibold transition duration-200 bg-white border border-gray-300 rounded md:w-auto hover:bg-green-500 focus:shadow-outline focus:outline-none">
            Book Ride
          </button>
          </form>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button type="button" onclick="modalClose('mymodaltop')"  class="w-full bg-red-500 inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
            Cancel Booking
          </button>
          
        </div>
      </div>
    </div>
  </div>
</div>
  
</dialog>
</form>



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