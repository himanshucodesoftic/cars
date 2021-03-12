
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
        @csrf   <input type="text" placeholder=" @lang('home.name')"  name="name" class="mb-3 py-3 px-4 w-full border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" />
        <input type="text" placeholder="@lang('home.phone')" name="phone" class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" />
      
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


<div class="max-w-xl mb-10  md:mx-auto text-center lg:max-w-2xl md:mb-12 ">
  <div>
    <p class="inline-block px-3 py-px mb-4 text-xs text font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
    @lang('home.ourcars')
    </p>
  </div>
  <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
    <span class="relative inline-block">
     
      <span class="relative">  @lang('home.Ridesafe')  !</span>
    </span>
   
  </h2>

</div>
<div class="px-3 lg:mx-20">
<div class="grid gap-6 row-gap-5 mb-8    space-y-2 lg:grid-cols-3 md:grid-cols-2 sm:row-gap-1 sm:grid-cols-1 sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
  <!--car 1 card start--> 
  
  @foreach($productlist as $list)
  <div class="md:w-full lg:w-full">
   <div class="max-w-md  max-w-sm">
     <div class="swiper-container  h-64">
<!-- Additional required wrapper -->
<div class="swiper-wrapper" >
 <!-- Slides -->
 <div class="swiper-slide">
   <img src="{{asset($list['image'])}}" class="max-w-sm max-w-md" >
 </div>
 <div class="swiper-slide">
   <img src="{{asset($list['image'])}}" class="max-w-sm max-w-md">
 </div>
</div>
<!-- If we need navigation buttons -->
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
<!-- If we need pagination -->
<div class="swiper-pagination"></div>   
</div>

<div class="bg-orange-200">
  
 
 <p class="text-lg text-center font-bold">DESECRIPTION</p>
 <div class="overflow-auto">
 <table class="rounded-t-lg table-auto mx-auto sm:w-1/2 bg-gray-800 text-gray-200 ">
   <tr class="text-left border-b border-gray-300 w-1/2">
     <th class="px-4 py-3 ">Name</th>
     <th class="px-4 py-3">Price</th>
     <th class="px-4 py-3">Description</th>
     <th class="px-4 py-3">model</th>
   </tr>
   <tr class="bg-gray-700 border-b border-gray-600">
     <td class="px-4 py-3">{{ $list['name'] }}</td>
     <td class="px-4 py-3">{{ $list['price'] }}</td>
     <td class="px-4 py-3">{{ $list['description'] }}</td>
     <td class="px-4 py-3">{{ $list['model'] }}</td>
   </tr>    
 </table>
 </div>
 <!-- dark design -->
 
 <div class=" mb-5">
  <center>
  <button class="bg-green-500 px-5 py-2 hover:bg-orange-500 rounded-lg mt-5" data-toggle="modal" data-target="#mymodaltop{{ $list['id'] }}" onclick="openModal('mymodaltop')"   data-toggle="modal" data-target="#modal-delete-{{ $list['id']}}" >Book Car</button></center>
 
    <!-- <button class="bg-green-500 px-5 py-2   hover:bg-orange-500 rounded-lg mt-5">Book Car</button></center> -->
 </div>
   </div>
   </div>
  </div>
  @endforeach

 
  

  </div>
 </div>
<!--our cars-->

<!--modal-->

<form class="shadow-lg  p-4 flex flex-col bg-white rounded-lg items-center" action="{{url('/submitbookride')}}" method="post">
        @csrf
 <dialog id="mymodaltop" class="bg-transparent z-0 relative w-screen h-screen">
  <div class="fixed z-10 inset-0 overflow-y-auto">
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
          <svg class="h-12 w-12 fill-current text-grey hover:text-grey-darkest" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
      </span>
        <div class="px-5 pt-6 pb-5 text-center border border-gray-300 rounded  items-center">
          <div class="mb-5 font-bold"><h4 class="text-2xl">Book a Ride</h4></div>
        
          <!-- <form class="shadow-lg  p-4 flex flex-col bg-white rounded-lg items-center"> -->

          <input type="text" placeholder="Enter Your Name" name="name" class="mb-3 py-3 px-4 w-full border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500"   >
            <input type="text" placeholder="Enter Your Email" name="email" class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" >
            <input type="text" placeholder="Enter Your phone" name="phone" class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" >
            
              <input type="text" placeholder="Enter Your Address" name="address" class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500">
              <input type="text" placeholder="Enter Duration"  name="Duration" class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500">
              <input type="text" placeholder="Confirm Car Name" name="CarName" class="mb-3 py-3 px-4 w-full  border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500">
            
          
          <p class="max-w-md px-5 mb-3 text-xs text-gray-600 sm:text-sm md:mb-5">
            
          </p>
        
          <button href="/" class="inline-flex items-center bg-yellow-500 justify-center  h-12 px-6 font-semibold transition duration-200 bg-white border border-gray-300 rounded md:w-auto hover:bg-green-500 focus:shadow-outline focus:outline-none">
            Book Ride 
          </button>
          <!-- </form> -->
        </div>
   
      </div>
    </div>
  </div>
  
</dialog>
</form>



<script>


  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })
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
        setTimeo  ut(function () {
            document.getElementById(key).close();
            document.body.removeAttribute('style');
        }, 100);
    }



    var cont=0;
function loopSlider(){
  var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
        cont=1;
        
        break;
        }
        case 1:
        {
        
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
           
        cont=0;
        
        break;
        }
        
        
        }},8000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}


  </script>
@endsection