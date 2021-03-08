
<!--footer start-->
<div class="bg-gray-900">
    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
      <div class="grid row-gap-10 mb-8 lg:grid-cols-6">
        <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
          <div>
            <p class="font-medium tracking-wide text-gray-300">@lang('home.Quicklinks')</p>
            <ul class="mt-2 space-y-2">
            
              <li>
                <a href="{{url('cars')}}" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">@lang('home.viewcars')</a>
              </li>
         
            </ul>
          </div>
          <div>
          <p class="font-medium tracking-wide text-gray-300">@lang('home.Terms&Conditions')</p>
            <ul class="mt-2 space-y-2">
              <li>
                <a href="{{url('TermsAndConditions')}}" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">@lang('home.Terms')</a>
              </li>
            
              <li>
                <a href="{{url('contactus')}}" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">@lang('home.contactus')</a>
              </li>
            </ul>
          </div>
       
  
  
          <div>
            <p class="font-medium tracking-wide text-gray-300">@lang('home.BussinessLocation')</p>
            <ul class="mt-2 space-y-2">
              <li>
                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">@lang('home.INDIA')</a>
              </li>
              <li>
                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">@lang('home.RUSSIA')</a>
              </li>
              <li>
                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">@lang('home.ESTONIA')</a>
              </li>
     
            </ul>
          </div>
        </div>
        <div class="md:max-w-md lg:col-span-2">
          <span class="text-base font-medium tracking-wide text-gray-300">@lang('home.subscribeforupdate')</span>
          <form class="flex flex-col mt-4 md:flex-row" action="{{url('/emailsubmit')}}" method="post">
            @csrf
            <input
              placeholder="@lang('home.email')"
              required=""
              type="email"
              name="email"
              class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
            />
            <button
              type="submit"
              class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white  bg-black hover:bg-black-500 transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
            >
            @lang('home.subscribe')
            </button>
          </form>
          <p class="mt-4 text-sm text-gray-500">
            @lang('home.Tostayupdatedwithourltestoffersdosubscribe') 
          </p>,
        </div>
      </div>
      <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-800 sm:flex-row">
        <p class="text-sm text-gray-500 mt-2 text-center">
          © Copyright 2021 RedAuto Pvt Ltd. All rights reserved.
        </p>
      
      
      </div>
      <div class="flex justify-center items-center pt-5 pb-10 border-t border-gray-800 sm:flex-row">
        <p class="text-sm text-gray-500 mt-2">
          Designed by <span class="text-green-500">Codesoftic </span>
       </p>
     
     </div>
    </div>
  </div>
   
  
  <!--modal -->
  
  
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
              <input type="text" placeholder="Name" class="mb-3 py-3 px-4 w-full border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" />
              <input type="text" placeholder="Email" class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" />
            
            <p class="max-w-md px-5 mb-3 text-xs text-gray-600 sm:text-sm md:mb-5">
              
            </p>
         
            <button href="/" class="inline-flex items-center bg-yellow-500 justify-center  h-12 px-6 font-semibold transition duration-200 bg-white border border-gray-300 rounded md:w-auto hover:bg-green-500 focus:shadow-outline focus:outline-none">
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
    
  </dialog>
  
  
  
  
  
    <script>
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
      }
    </script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js')}}" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
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
    <script src="{{asset('https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js')}}" defer></script>