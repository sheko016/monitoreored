<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
              <style>
        .font-family-karla { font-family: karla; }
        .bg-sidebar {background: linear-gradient(90deg, #0091de 0%, #00bdea 100%) !important;}
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #00b8e9; }
        .focus {background-color: yellow;}
        .account-link:hover { background: #3d68ff; }
        .bg-sidebar {width: 300px !important;    height: auto !important;}
        .h-screen {height: auto !important;}
        .item-left {padding-left: 20px !important;}
        section#bottom-navigation {position: absolute;bottom: 0px;background: #3d68ff;}
        .tab-item-menu{align-items: center !important;display: flex;}
        @media only screen and (max-width: 600px) {.bg-sidebar {
        background: #3d68ff;display:none;}}  
        /* Style the buttons */
        .navigation {padding: 10px 20px;text-align: center;border-radius: 5px;}
        .active, a.active {color: #ffffff;font-weight:bold; background: #00b8e9;}
        ul{padding:0;margin:0;}
        a {color: white;text-decoration: none;}
        li{list-style:none;}
        .navigation h2 a {background: blue; color: green;padding: 7px 20px;}
        .overflow-x-hidden {overflow-x: hidden;overflow-y: hidden;}
        .custom-pd {
    padding-left: 50px;
    padding-right: 50px;
}
  a {
    color: #444444;
}
@media only screen and (max-width: 600px) {
    .boxing-flex{
        display: block !important;
    } 
    .full-view {
    width: 100% !important;
}
}
@media only screen and (min-width: 601px) {
    .boxing-flex{
        display: flex;
    } 
}
/*table.mt-width {
    width: 50%;
}*/
.flex-bbb{
    display:block;
    border: 1px solid #b5a8a8;
    box-shadow: 5px 10px #d2caca;
    margin-top:15px;
    border-radius: 6px;
   
}
.w-five.flex.items-center.mb-4 {
    width: auto !important;
}
.padpadpfas {
    display: flex;
}
.custom-content-pdf {
    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 10px #d2caca;
    background: #f3f3f3;
    border-radius: 6px;
    box-shadow: red !important;
}
.ml-4.text-lg.leading-7.font-semibold.flex.flex-row {
    width: 60% !important;
    /* background: green; */
    justify-content: space-between;
    width: 100% !important;
}
.w-five.flex.items-center.mb-4 {
    width: 100% !important;
   /* border: 1px solid #b5a8a8;
    box-shadow: 5px 10px #d2caca;*/
    background: #f3f3f3;
    border-radius: 6px;
    padding-top:3px;
    padding-bottom:3px;
}

button.btn-custom-a {
    width: 205px !important;
    margin-right: 5px;
}
h1.custom-m {
    position: relative;
    left: -2px;
}
button.modalbtn {
    width: auto !important;
}
.maxflex{
    display:flex;
    justify-content: flex-end;
}
.btn-btn-header {
    border: 1px solid #e0dddd;
    padding: 5px;
    border-radius: 5px;
    background: linear-gradient(90deg, #0091de 0%, #00bdea 100%) !important;
    color: wheat;
    font-weight: 700 !important;
    margin: 4px;
}
.btn-btn-header-2 {
    border: 1px solid #e0dddd;
    padding: 5px;
    border-radius: 5px;
    background: linear-gradient(90deg, #F44336 0%, #f443368f 100%) !important;;
    color: wheat;
    font-weight: 700 !important;
    margin: 4px;
}
.btn-btn-header-3 {
    border: 1px solid #e0dddd;
    padding: 5px;
    border-radius: 5px;
    background: linear-gradient(90deg, #18a164 0%, #0ea05d9e 100%) !important;
    color: wheat;
    font-weight: 700 !important;
    margin: 4px;
}
.btn-btn-header:hover{
    background: #00aee67d !important;
    color: #444444;
}
.white-icon{
    color: #ffffff !important;
}
.custom-info-bg-1 {
    background: linear-gradient(90deg, #0c5a2f82 0%, #05c75af7 100%) !important;
}
.custom-info-bg-2 {
    background: linear-gradient(to right, #fdfffd, #f3f7f7) !important;
}
.alt-bg {
    height: 150px !important;
}
.rounded.p-3.bg-green-600 {
    background: #f7fafc;
    font-size: 8px;
}
.custom-boxform {
    /* background: red; */
    width: 500px;
    
}
/************************COUNTER */
/****************************************************************/
.tedtsd {
    display: flex;
    align-items: center;
}

 .charts_orb {
     display: flex;
     align-items: flex-start;
     justify-content: center;
     flex-wrap: wrap;
     font-family: arial;
     color: white;
}
 .charts_orb .orb {
     padding: 20px;
}
 .charts_orb .orb .orb_graphic {
     position: relative;
}
 .charts_orb .orb .orb_graphic .orb_value {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     display: flex;
     align-items: center;
     justify-content: center;
     font-size: 2.5em;
     font-weight: bold;
     color:#3f51b5;
}
 .charts_orb .orb .orb_label {
     text-transform: uppercase;
     text-align: center;
     margin-top: 1em;
}
 .charts_orb svg {
     width: 110px;
     height: 110px;
}
 .charts_orb svg circle {
     transform: rotate(-90deg);
     transform-origin: 50% 50%;
     stroke-dasharray: 314.16, 314.16;
     stroke-width: 7;
     fill: transparent;
     r: 50;
     cx: 55;
     cy: 55;
}
 .charts_orb svg circle.fill {
     stroke: #D3D3D3;
}
 .charts_orb svg circle.progress {
     stroke: #3F51B5;
     transition: stroke-dashoffset 0.35s;
     stroke-dashoffset: 214.16;
     -webkit-animation: NAME-YOUR-ANIMATION 1.5s forwards;
     -webkit-animation-timing-function: linear;
}
 @-webkit-keyframes NAME-YOUR-ANIMATION {
     0% {
         stroke-dashoffset: 314.16;
    }
     100% {
         stroke-dashoffset: 0;
    }
}
.boxodsd {
    border: 1px solid #9e9e9e7a;
    color: #444444;
    display: flex;
    border-radius: 10px;
}

circle.progress.red-d {
    stroke: #F44336 !important;
}
.aligntet {
    display: flex;
    align-items: center;
    font-size: 13px;
    
}
/****creat form */
.flex-bbb.pt-2 {
    width: 600px !important;
}
.father-pdf-contract {
    width: auto !important;
}
.w-five.flex.items-center.mb-4 {
    width: 100% !important;
    /*width: 520px !important;*/
}
.font-text-dash {
    color: #414352bd !important;
}
td.wrap-w. {
    display: flex;
    flex-wrap: wrap;
}
button.just-width {
    width: -webkit-fill-available !important;
}
td.px-6.py-4.whitespace-no-wrap.text-right.text-sm.leading-5.font-medium {
    display: flex;
    flex-wrap: wrap;
}
.form-buttons-date {
    display: flex;
    max-width: fit-content;
}
button.with-cc {
    width: 140px !important;
}
.custom-adjusicon {
    position: relative;
    top: 1px;
    left: 5px;
    font-size: 18px;
}
.custom-adjusicon-2 {
    position: relative;
    top: 1px;
    left: -4px;
    font-size: 18px;
}
    </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
        @livewireStyles
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
        
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
  
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
        @livewire('navigation-dropdown')

             <!--Page Heading -->
            <header class="bg-white shadow">
                <div class="maxflex max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{-- $header --}}

                    <!--<buttom class="btn-btn-header">Reportes</buttom>
                    <buttom class="btn-btn-header-2">Contratos pendientes</buttom>
                    <buttom class="btn-btn-header-3">Contratos aprobados</buttom>-->
                </div>
            </header>
        
            <!-- Page Content -->
            <div class="bg-gray-100  flex">

        
        <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300"></a>
            <a href="#">
            <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center"> 
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-6 h-6 mr-2 text-white-700"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg> Nuevo Contrato
            </button>
            </a>
        </div>
        <nav class="navigation text-white text-base font-semibold pt-3">
           
           <ul>
               <li> <a href="#" class=" flex item-left items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-6 h-6 mr-2 text-white-700"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                Dashboard
 {{--
            </a>
            <a href="{{ route ('usuarios') }}" class="flex item-left opacity-75 items-center hover:opacity-100 text-white py-4 pl-6 nav-item">
                <i class="fas fa-user mr-3"></i>
                Usuarios
            </a>
            <a href="{{ route('contactos') }}" class="flex item-left items-center  text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user mr-3"></i>
                Contactos
            </a>
            <a href="{{route('personas')}}" class="flex item-left items-center  text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user mr-3"></i>
--}}
            </a></li>
            

            <li><a href="#" class=" flex item-left opacity-75 items-center hover:opacity-100 text-white py-4 pl-6 nav-item">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-6 h-6 mr-2 text-white-700"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                 Usuarios
            </a></li>
          

            <!--</li><a href="" class="flex item-left items-center  text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-6 h-6 mr-2 text-white-700"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                Personas
            </a></li>-->

            </li><a href="#" class=" flex item-left items-center  text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-6 h-6 mr-2 text-white-700"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                Contratos
            </a></li>

            <!--<a href="#" class=" flex item-left items-center  text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-6 h-6 mr-2 text-white-700"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" /></svg>
                Contactos
            </a>-->

        </nav>
        <!--<a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
            <i class="fas fa-arrow-circle-up mr-3"></i>
            Upgrade to Pro!
        </a>-->
     </aside>

     <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
       <!-- <header class="w-full flex items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                </div>
            </div>
        </header>-->

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="index.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Blank Page
                </a>
                <a href="" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-table mr-3"></i>
                    Tables
                </a>
                <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-align-left mr-3"></i>
                    Forms
                </a>
                <a href="" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-tablet-alt mr-3"></i>
                    Tabbed Content
                </a>
                <a href="" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-calendar mr-3"></i>
                    Calendar
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-cogs mr-3"></i>
                    Support
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    My Account
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
                <button class="w-full bg-white cta-btn font-semibold py-2 mt-3 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-arrow-circle-up mr-3"></i> Upgrade to Pro!
                </button>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
              <section>
                  @yield('content')
                  {{ $slot }}
              </section>

                <!-- Content goes here! 😁 -->

                 <!-- Page Content -->    

            </main>
        </div>
     </div>




        @stack('modals')

        @livewireScripts
         <!-- AlpineJS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

        <script> 
            jQuery(function($) {
        var path = window.location.href; 
        // because the 'href' property of the DOM element is the absolute path
        $('ul a').each(function() {
            if (this.href === path) {
            $(this).addClass('active');
            }
        });
        });
    </script>
    <script>$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 1500,
        easing: 'linear',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});</script>
    </body>

</html>


