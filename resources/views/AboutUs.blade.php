@extends('layout.home_layout')
@section('content')
<!--- nav bar end-->


<!--  start-->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
    <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
      <div class="max-w-xl mb-6">
        <div>
        
        </div>
        <h2 class="max-w-lg mb-6 font-sans  text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
          <span class="text-red-600">@lang('home.message')</span><br class="hidden md:block" />
          <span class="text-orange-500" >@lang('home.carrentalservice')</span>
          <span class="inline-block text-green-400">@lang('home.companyinTallinn')</span>
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
          @lang('home.REDAutorentoffersgasoline,dieselandLPGenginevehiclesthatarealwaysclean,safeandwellmaintained.')
         </p>
      </div>
 
    </div>
    <div class="flex items-center justify-center lg:w-1/2">
      <div class="w-4/5">
        <img class="object-cover" src="{{asset('../assets/img/redautorent_logo.png')}}" alt="" />
      </div>
   
    </div>
  </div>

</div>
  <!-- header end-->

 @endsection