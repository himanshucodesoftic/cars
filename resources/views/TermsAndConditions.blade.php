
@extends('layout.home_layout')
@section('content')


<!-- header start-->
<!--  start-->
<div class="px-5 py-5  mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl  lg:px-8 lg:py-20">
 
    <div class="">
        
         
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
            <span class="">
              Terms And Conditions
            </span><br class="hidden md:block" />

          </h2>
          <hr  class=""/>
          <p class="text-base text-gray-700 md:text-lg">
            1.@lang('home.first1') 
          </p>
          <p class="text-base text-gray-700 md:text-lg">
            2.@lang('home.first2') 

             {{-- RED Autorent offers gasoline, diesel and LPG engine vehicles that are always clean, safe and well maintained.  --}}
          </p>
        
           <p class="text-base text-gray-700 md:text-lg"> 3. 
            @lang('home.first3') 
 
            {{-- All vehicles are provided with a full tank of fuel and must be returned with a full tank as well. Vehicles returned short of a full tank will be charged at a rate of €1.50 per liter. --}}
            </p>
           <p class="text-base text-gray-700 md:text-lg"> 4.
            @lang('home.first4')
            {{-- We provide vehicles that are clean, both inside and out and we require that our car renters wash their rental vehicles and clean the interior prior to returning them. A €25 fee is deducted from the security deposit if the vehicle is returned dirty, either inside or out (€50 if both the interior and the exterior need cleaning). --}}
            </p>
           <p class="text-base text-gray-700 md:text-lg">5. 
            @lang('home.first5')
            {{-- We DO NOT allow smoking in our vehicles. If a vehicle is returned with evidence of smoking, a €150 detailing fee is deducted from the security deposit. --}}
            </p>
            <p class="text-base text-gray-700 md:text-lg"> 6. 
              @lang('home.first6')
              {{-- Car renters are responsible for all tickets incurred, such as speeding and parking tickets. --}}
            </p>
            <p class="text-base text-gray-700 md:text-lg"> 7.
              @lang('home.first7')
              {{-- Car renters are required to notify RED Autorent before driving to another country. Otherwise, the car renter will lose the security deposit. --}}
              </p>
            <p class="text-base text-gray-700 md:text-lg"> 8. 
              @lang('home.first8')
              {{-- Car renters must notify RED Autorent of any accidents involving the rental vehicle. --}}
            </p>
            <p class="text-base text-gray-700 md:text-lg">9.
              @lang('home.first9')
              {{-- RED Autorent will provide a replacement vehicle if your rental vehicle breaks down due to a mechanical failure and is not drivable. --}}
              </p>
          
            <p class="text-base text-gray-700 md:text-lg"> @lang('home.first13')</p>
            <p class="text-base text-gray-700 md:text-lg">1.@lang('home.first10')</p>
            <p class="text-base text-gray-700 md:text-lg">  2. @lang('home.first11')</p>
            <p class="text-base text-gray-700 md:text-lg"> 3.@lang('home.first12')</p>
            <p class="text-base text-gray-700 md:text-lg">@lang('home.first14')</p>
          
   
      </div>

</div>
  <!-- header end-->

  


@endsection