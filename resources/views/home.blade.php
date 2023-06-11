<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Tailwind Starter Template - Landing Page Template: Tailwind Toolbox
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Favicons -->
    <link  src="{{URL::asset('/img/favicon.png') }}" rel="icon">
    <link  src="{{URL::asset('/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #daae51 0%, #33d591 100%);
      }
      .swiper-navigation {
        color: rgb(38, 206, 122); 
      }
      .swiper-pagination-bullet {
          opacity: .5; /*was 0.2 and was impossible to see on some background images*/
      }
      .swiper-pagination-bullet-active {
          background: rgb(170, 206, 38);
      }
      
    </style>
	  <!-- Swiper's CSS -->
    <link href="{{ URL::to( 'css/swiper.css') }}" rel="stylesheet">
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <!-- Logo -->
          
           <img src="{{URL::asset('/img/logo-icon.png')}}" alt="Logo"  href="{{ url('/') }}">
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline visited:text-purple-600" href="{{ url('/') }}">Home</a>
            </li>
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline visited:text-purple-600" href="{{ url('/') }}#about">About Us</a>
            </li> 
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline visited:text-purple-600" href="{{ url('/') }}#services">Services</a>
            </li>
            <!--li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline visited:text-purple-600" href="{{-- url('/') --}}#portfolio">Portfolio</a>
            </li-->
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline visited:text-purple-600" href="{{ url('/') }}#team">Team</a>
            </li>
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline visited:text-purple-600" href="{{ url('/') }}#contact">Contuct Us</a>
            </li>
          </ul>
          <!--<button
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
          >
            Action
          </button>-->
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <!--Hero-->
	
		<div class="swiper mySwiper" id="home">
		  <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="h-screen w-full h-screen" 
          style="background-image: url({{URL::asset('/img/slide/home.jpg')}}); background-repeat: no-repeat; background-size: 100% 100%;;">
            <div class="pt-24">
              <p class="text-center mb-10 mt-96 text-4xl font-semibold">Grow your business with us.</p>
              <div class="flex justify-center space-x-12">
                <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                  Read more
                </button>
                <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded"
                  href="{{ url('/') }}#contact">
                  Contact us
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="h-screen w-full h-screen" 
          style="background-image: url({{URL::asset('/img/slide/plan.avif')}}); background-repeat: no-repeat; background-size: 100% 100%;;">
            <div class="pt-24">
              <p class="text-center mb-10 mt-72 text-4xl font-semibold">Starting a business or in need of advice? Consult with us and win.</p>
              <p class="text-center mb-10 text-2xl font-semibold">Software Development, Tax Services, Business Consultancy.</p>
              <div class="flex justify-center space-x-12">
                <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                  Read more
                </button>
                <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded"
                  href="{{ url('/') }}#contact">
                  Contact us
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="h-screen w-full h-screen" 
          style="background-image: url({{URL::asset('/img/slide/projects.jpg')}}); background-repeat: no-repeat; background-size: 100% 100%;;">
            <div class="pt-24">
              <p class="text-center mb-10 mt-72 text-4xl font-semibold">Starting a business or in need of advice? Consult with us and win.</p>
              <p class="text-center mb-10 text-2xl font-semibold">Software Development, Tax Services, Business Consultancy.</p>
              <div class="flex justify-center space-x-12">
                <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                  Read more
                </button>
                <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded"
                  href="{{ url('/') }}#contact">
                  Contact us
                </button>
              </div>
            </div>
          </div>
        </div>
		  </div>
		  <div class="swiper-button-next"></div>
		  <div class="swiper-button-prev"></div>
		  <div class="swiper-pagination"></div>
		</div>   
    
    <section class="bg-white border-b py-8" id="about">
      <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Who We are
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-5/6 sm:w-1/2 p-6">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
              The Leading Business Consultant in Zimbabwe
            </h3>
            <p class="text-gray-600 mb-8">
              703, 7th Floor, Pioneer House,, Corner 8th Avenue / Fife Street,Bulawayo, Zimbabwe
              <br />
              <br />
            </p>
          </div>
          <div class="w-full sm:w-1/2 p-16">
            <img src="{{URL::asset('/img/project.webp')}}" alt="about">            
          </div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full sm:w-1/2 p-16 mt-6">
            <img src="{{URL::asset('/img/about-md.jpg')}}" alt="about">      
          </div>
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <div class="align-middle">
              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                Our Vision & Mission
              </h3>
              <p class="text-gray-600 mb-8">
                To be the leading small to medium business consultancy in Tax,Information Technology and Data Analytics.
                <br />
                <br />
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-white border-b py-8" id="services">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Business Service Solutions
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full md:w-1/4 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6 pt-6 pb-8">
                BMS for Companies
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                Start Up, Small & Corporate Business Consultancy.We help in supporting  start-up businesses in their initial stages and brainstorming to make y...
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-start">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Continue
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/4 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6 pt-6 pb-8">
                Software Development
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                Because most of the accounting packages are standardised, we develop third party software tailor made to each unique line of business, providing sy...
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-center">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Continue
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/4 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6 pt-6 pb-8">
                Corporate Services
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                We offer strategic consulting services, investment management, tax strategy, corporate advisory and property accounting...
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-end">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Continue
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/4 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6 pt-6 pb-8">
                School Services
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                We provide the education sector with a number of solutions, primarily built around School Management. These Include Learning Management Systems, Adm...
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-end">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Action
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-gray-100 py-8" id="team">
      <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Pricing
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
          <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
            <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
              <div class="p-8 text-3xl font-bold text-center border-b-4">
                Free
              </div>
              <ul class="w-full text-center text-sm">
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
              </ul>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
              <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                £0
                <span class="text-base">for one user</span>
              </div>
              <div class="flex items-center justify-center">
                <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                  Sign Up
                </button>
              </div>
            </div>
          </div>
          <div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
              <div class="w-full p-8 text-3xl font-bold text-center">Basic</div>
              <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
              <ul class="w-full text-center text-base font-bold">
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
              </ul>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
              <div class="w-full pt-6 text-4xl font-bold text-center">
                £x.99
                <span class="text-base">/ per user</span>
              </div>
              <div class="flex items-center justify-center">
                <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                  Sign Up
                </button>
              </div>
            </div>
          </div>
          <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
            <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
              <div class="p-8 text-3xl font-bold text-center border-b-4">
                Pro
              </div>
              <ul class="w-full text-center text-sm">
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
              </ul>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
              <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                £x.99
                <span class="text-base">/ per user</span>
              </div>
              <div class="flex items-center justify-center">
                <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                  Sign Up
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container mx-auto text-center py-6 mb-12" id="contuct">
      <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
        Call to Action
      </h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <h3 class="my-4 text-3xl leading-tight">
        Main Hero Message to sell yourself!
      </h3>
      <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        Action!
      </button>
    </section>
    <!--Footer-->
    <footer class="bg-white">
      <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6 mr-5">
            <img src="{{URL::asset('/img/logo-icon.png')}}" alt="Logo"  href="{{ url('/') }}">
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Links</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Support</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Legal</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Social</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Company</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official Blog</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <a href="https://www.freepik.com/free-photos-vectors/background" class="text-gray-500">Background vector created by freepik - www.freepik.com</a>
    </footer>
   
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.mySwiper', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 8500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
		effect: 'coverflow',
		  coverflowEffect: {
			rotate: 30,
			slideShadows: false,
		  },
      });
    </script>
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>
