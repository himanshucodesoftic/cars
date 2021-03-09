@extends('layout.home_layout')
@section('content')

<!--- nav bar end-->
       

<!-- header start-->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
    <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
      <div class="max-w-xl mb-6">
        <div>
          
          <p class="inline-block px-3 py-px mb-4 text-red-500 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
            @lang('home.REDAUTORENT')
          </p>
        </div>
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
          @lang('home.BookyourRidesOnline') <br class="hidden md:block" />
    
          <span class="inline-block  text-red-500">@lang('home.RentalServices.')</span>
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
         @lang('home.REDAutorentisanaffordablecarrentalcompanyinTallinn,withpricesstartingat€6.66perday.')
        </p>
      </div>
      <div class="flex items-center space-x-3">
  
          <a href="{{url('contactus')}}" class=" w-32 transition duration-300 text-center cta bg-orange-500 hover:bg-red-600  hover:shadow-lg px-3 py-2 rounded text-white font-normal"> @lang('home.contactus')</a>
        
          <a href="{{url('BookRide')}}" class=" w-32 transition duration-300 text-center cta bg-orange-500 hover:bg-red-600  hover:shadow-lg px-3 py-2 rounded text-white font-normal">@lang('home.bookride')</a>
      </div>
    </div>
    <div class="flex items-center justify-center lg:w-1/2">
      <div class="">
        <img class="object-cover" src="{{asset('assets/img/cars.png')}}" alt="" />
      </div>
    </div>
  </div>
  <a
    href=""
    aria-label="Scroll down"
    class="flex items-center justify-center w-10 h-10 mx-auto text-gray-600 duration-300 transform border border-gray-400 rounded-full hover:text-deep-purple-accent-400 hover:border-deep-purple-accent-400 hover:shadow hover:scale-110"
  >
    <svg xmlns="{{url('http://www.w3.org/2000/svg')}}" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
      <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z"></path>
    </svg>
  </a>
</div>
  <!-- header end-->

  <div class="flex flex-col bg-white m-auto p-auto">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
          @lang('home.Ridesafe') 
        </p>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
         
          <span class="relative">@lang('home.RideSafeAndHealthy!') </span>
        </span>
       
      </h2>
   
    </div>
          <div
            class="flex overflow-x-scroll pb-10 hide-scroll-bar"
          >
            <div
              class="flex flex-nowrap lg:ml-40 md:ml-20 ml-10 "
            >
              <div class="inline-block px-3"  >
                <div
                   class="w-64 h-64 
                   justify-center
                    max-w-xs overflow-hidden
                     rounded-lg
                      shadow-md bg-green-300 
                      hover:shadow-xl
                       transition-shadow duration-300 ease-in-out"

                       style="
                       background-image: url('https://image.freepik.com/free-vector/flat-design-hand-sanitizer-illustration_23-2148473782.jpg');
                       background-repeat: no-repat;
                       background-size: cover;
                       background-blend-mode: multiply;
                     "
                >

                <h6 class="text-3xl font-bold  text-white text-center my-10 mt-10 pt-10 items-center">@lang('home.Safety&Hyegiene')</h6>

              </div>
              </div>
              <div class="inline-block px-3">
                <div
                  class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-blue-300 hover:shadow-xl transition-shadow duration-300 ease-in-out"
               
                  style="
                  background-image: url('https://cdn.pixabay.com/photo/2020/04/01/21/05/mask-4992753_960_720.png');
                  background-repeat: no-repat;
                  background-size: cover;
                  background-blend-mode: multiply;
                " >
                 <h6 class="text-3xl font-bold  text-white text-center my-10 mt-10 pt-10 items-center">@lang('home.wearmask')</h6>

                </div>
              </div>
              <div class="inline-block px-3">
                <div
                  class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-red-300 hover:shadow-xl transition-shadow duration-300 ease-in-out"
                
                  style="
                  background-image: url('https://media.istockphoto.com/vectors/coronavirus-disinfection-taxi-driver-in-a-protective-mask-and-gloves-vector-id1221783151?k=6&m=1221783151&s=612x612&w=0&h=q9Wj50jxgQ-4SY--wOi2cUjRkrogw0Sv6U2G7bDaLo4=');
                  background-repeat: no-repat;
                  background-size: cover;
                  background-blend-mode: multiply;
                ">
                  <h6 class="text-3xl font-bold  text-white text-center my-10 mt-10 pt-10 items-center">@lang('home.Internal&ExternalSanitization')</h6>

                </div>
              </div>
              <div class="inline-block px-3">
                <div
                  class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-yellow-600 hover:shadow-xl transition-shadow duration-300 ease-in-out"
                  
                  style="
                  background-image: url('https://image.freepik.com/free-vector/buying-renting-new-used-speedy-sports-car_3446-651.jpg');
                  background-repeat: no-repat;
                  background-size: cover;
                  background-blend-mode: multiply;
                "
                  >
                  <h6 class="text-3xl font-bold  text-white text-center my-10 mt-10 pt-10 items-center">@lang('home.ContactLessDelievry')</h6>

                </div>
              </div>
           
            </div>
          </div>
    </div>
   


  <!-- feauters start-->
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
          @lang('home.whywe')
        </p>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
      
          <span class="relative">@lang('home.OneStopDestinationFor')</span>
        </span>
        @lang('home.Affordable&EfficientcarServices')
        {{-- Affordable & Efficient car Services --}}
      </h2>
      <p class="text-base text-gray-700 md:text-lg">
        @lang('home.REDAutorentofferscarsatcompetitiveratestoprivateindividualsandcompaniesalike.Ourcarscanberentedforpersonalorbusinessuse.YoucanuseourcarsasacourierforBOLTandBOLTFOOD,WOLT,orYANDEX.')
      
        {{-- RED Autorent offers cars at competitive rates to private individuals and companies alike. Our cars can be rented for personal or business use. You can use our cars as a courier for BOLT and BOLT FOOD, WOLT, or YANDEX. --}}
      </p>
    </div>
    <div class="grid gap-8 row-gap-5 lg:grid-cols-3">
      <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl bg-green-500 hover:bg-green-400">
        <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
        <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
        <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
        <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
        <div class="relative p-5  rounded-sm ">
          <div class="flex flex-col mb-2 lg:items-center  lg:flex-row">
            <div class="flex items-center justify-center w-10 h-10 mb-4 mr-2 rounded-full bg-indigo-50 lg:mb-0">
              <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
              </svg>
            </div>
            <h6 class="font-semibold leading-5">  @lang('home.clean')
              {{-- Clean  --}}
            </h6>
          </div>
          <p class="mb-2 text-sm text-gray-900">
            @lang('home.Wecareforourcustomers,wemaintainhealthycheckbeforeofferingaservice.')
             {{-- We care for our customers , we maintain healthy check before offering a service. --}}
          </p>
     
        </div>
      </div>
        <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100 "></div>
      <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl  bg-red-400 hover:bg-500 ">
        <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
        <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
        <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
        <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
        <div class="relative p-5  rounded-sm ">
          <div class="flex flex-col mb-2 lg:items-center lg:flex-row">
            <div class="flex items-center justify-center w-10 h-10 mb-4 mr-2 rounded-full bg-indigo-50 lg:mb-0">
              <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
              </svg>
            </div>
            <h6 class="font-semibold leading-5">@lang('home.Efficient')</h6>
          </div>
          <p class="mb-2 text-sm text-gray-900">
            @lang('home.UnlikeothersourpriorityistoprovideHasselfreeandcosteffectiveservices.')
           {{-- Unlike others our priority is to provide Hassel free and cost effective services. --}}
          </p>
     
        </div>
      </div>
      <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl bg-blue-400 hover:bg-blue-500">
        <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
        <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
        <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
        <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
        <div class="relative p-5  rounded-sm ">
          <div class="flex flex-col mb-2 lg:items-center lg:flex-row">
            <div class="flex items-center justify-center w-10 h-10 mb-4 mr-2 rounded-full bg-indigo-50 lg:mb-0">
              <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
              </svg>
            </div>
            <h6 class="font-semibold leading-5">@lang('home.24x7Support')</h6>
          </div>
          <p class="mb-2 text-sm text-gray-900">
            @lang('home.Havinganissuedontworrywearethereforyou')
               {{-- Having an issue don't worry we are there for you .   --}}
          </p>
        
        </div>
      </div>
    </div>
  </div>

  <!-- feauter end -->

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

        <span class="relative"> @lang('home.the')</span>
      </span>
      @lang('home.BeginTheRide')
       {{-- Begin The Ride --}}
    </h2>
  
  </div>

<div class="row">
<div class="col-md-3">
  <div class="grid gap-6 row-gap-5 mb-8 lg:grid-cols-4 sm:row-gap-6 sm:grid-cols-2">
  @isset($new)
  @foreach($new as $list)
    <a href="/" aria-label="View Item">
      <div class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
         <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="{{asset($list['featureimage'])}}" alt="" /> 
        <div class="absolute inset-x-0 bottom-0 px-6 py-4 bg-black bg-opacity-75">
          <p class="text-sm font-medium tracking-wide text-white">
            <b> price:{{ $list['price'] }}</b>
          </p>
        </div>
      </div>
    </a>
    @endforeach
  @endisset
    </div>

    </div>
  </div>

  <div class="text-center">
    <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
      See more
      <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
        <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
      </svg>
    </a>
  </div>
</div>
<!-- Pricing Start   -->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <div>
      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
        Pricing
      </p>
    </div>
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
      
        <span class="relative">      @lang('home.Choose')</span>
      </span>
      @lang('home.OurPlans')
      {{-- Our Plans --}}
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
      RED Autorent offers some of the most competitive rates in Tallinn, with our prices starting at €6.66 per day or €200 per month.
    </p>
  </div>
  
  <div class="grid max-w-md gap-10 row-gap-8 lg:max-w-screen-lg sm:row-gap-10 lg:grid-cols-3 xl:max-w-screen-lg sm:mx-auto">
  @isset($productlist)
  @foreach($productlist as $list)
    <div class="flex flex-col transition duration-300 bg-orange-100 rounded shadow-sm hover:shadow">
 
      <div class="relative w-full h-48">
        <img src="{{asset($list['image'])}}" class="object-cover w-full h-full rounded-t" alt="Plan" />
      </div>
      <div class="flex flex-col justify-between flex-grow p-8 border border-t-0 rounded-b">
        <div>
          <div class="text-lg font-semibold">Model:{{ $list['model'] }}</div>
          <p class="text-sm text-gray-900">
            <table class="table-auto">
              <tr>
                <th>Duration</th>
                <th>Price</th>
                
              </tr>
              <tr class="justify-center">
                <td>price</td>
                <td>{{ $list['price'] }}</td>
          
              </tr>
              <tr>
                <td>SittingType</td>
                <td>{{ $list['sittingtype'] }}</td>
             
              </tr>
            </table>
          </p>

        </div>
      
      </div>
    </div>
    @endforeach
  @endisset
  </div>
</div>
<!-- pricing end-->

<!-- booking ride steps start-->

<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <div>
      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
        @lang('home.RENTALCARBOOKINGPROCESS')
        {{-- Rental Car Booking Process --}}
      </p>
    </div>
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">

        <span class="relative">  @lang('home.the')</span>
      </span>
      @lang('home.SimpleThreestepstoBookyourRentalCar.')
      {{-- Simple Three steps to Book your Rental Car. --}}
    </h2>
   
  </div>
  <div class="grid gap-10 lg:grid-cols-3 sm:grid-cols-2">
  
    <div>
      <div class="flex items-center justify-between mb-6">
        <p class="text-2xl font-bold">      @lang('home.Step1')</p>
        <svg class="w-6 text-gray-700 transform rotate-90 sm:rotate-0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
          <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
        </svg>
      </div>
      <p class="text-gray-600">
        @lang('home.SelectyourDesiredcarforrentalserviceandplacebookredautorideorder.')
        {{-- Select your Desired car for rental service and place book red auto ride order.Step1      </p> --}}
    </div>
    <div>
      <div class="flex items-center justify-between mb-6">
        <p class="text-2xl font-bold"> @lang('home.Step2')</p>
        <svg class="w-6 text-gray-700 transform rotate-90 sm:rotate-0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
          <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
        </svg>
      </div>
      <p class="text-gray-600">
        @lang('home.Aftersuccesfullbooking,waitforconfromationstatusfromRedAuto.')
        {{-- After succesfull booking , wait for confromation status from RedAuto . --}}
      </p>
    </div>
    <div>
      <div class="flex items-center justify-between mb-6">
        <p class="text-2xl font-bold">        @lang('home.success')</p>
        <svg class="w-8 text-gray-600" stroke="currentColor" viewBox="0 0 24 24">
          <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
        </svg>
      </div>
      <p class="text-gray-600">
        @lang('home.Afterconformation.NothingmoreEnjoyyourRide.')
         {{-- After conformation . Nothing more Enjoy your Ride . --}}
      </p>
    </div>
  </div>
</div>

<!--end booking ride process -->
@endsection

