<!DOCTYPE html>
<html lang={{app()->getLocale()}}>
  <title>Red Auto Rent</title>
  <link rel="shortcut icon" href="./assets/img/favicon" />

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{asset('./assets//img/favicon/favicon.ico')}}" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{asset('./assets/img/apple-icon.png')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css')}}" integrity="sha512-wl80ucxCRpLkfaCnbM88y4AxnutbGk327762eM9E/rRTvY/ZGAHWMZrYUq66VQBYMIYDFpDdJAOGSLyIPHZ2IQ==" crossorigin="anonymous" />
    <link
      rel="stylesheet"
      href="{{asset('https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css')}}"
    />
 

  <script src="{{asset('https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js')}}" defer></script>
  <style>
    .dropdown:hover .dropdown-menu {
  display: block;
}

.hide-scroll-bar {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
.hide-scroll-bar::-webkit-scrollbar {
  display: none;
}

html{
  scroll-behavior: smooth;
}
  </style>

  
  </head>

 <body x-data="{ isOpen : false}" class="bg-orange-100">

@include('inc.home_header')

@yield('content')
@include('inc.home_footer')
    </body>
  </html>
  