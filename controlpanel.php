<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ВртниПаретеМи 💸</title>
    <link rel="icon" type="image/jpg" href="favicon.jpg">
    <!-- Fonts Z]22ly09ccg; -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Route::get('/example', 'ExampleController@example'); -->
   
    <link href="style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Styles -->
    <style>
        table {

            width: 80%;
        }

        tr {
            border: black solid 1px;

        }

        td:first-child {
            font-weight: bold;
        }

        tr td,
        th {
            padding: 10px;
            text-align: center;
        }

        th {
            color: gray;
            border: black solid 1px;

        }

        .dropdown:focus-within .dropdown-menu {
            opacity: 1;
            transform: translate(0) scale(1);
            visibility: visible;
        }
    </style>
</head>

<body class="antialiased">


    <div class="flex flex-col relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <div class="w-full max-w-3xl mt-10">
            <div class="-mx-10 md:flex">
                <div class="w-full md:w-1/2 px-2">
                    <div class="rounded-lg shadow-sm mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Број рачуна</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">1</h3>
                                <p class="text-xs text-green-500 leading-tight">▲ 57.1%</p>
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart1" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="w-full md:w-1/2 px-2">
                    <div class="rounded-lg shadow-sm mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Укупна дуговања</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3"> ($)</h3>
                                <p class="text-xs text-green-500 leading-tight">▲ 8.2%</p>
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart3" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class=" relative inline-block text-left dropdown mt-4 w-4/5">
            <span class="rounded-md shadow-sm"><button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                    <span>Options</span>
                    <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button></span>
            <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                    <div class="px-4 py-3">
                        <p class="text-sm leading-5">Signed in as</p>
                        <p class="text-sm font-medium leading-5 text-gray-900 truncate">Daniel</p>
                    </div>
                    <!-- <div class="py-1">
                        <a href="javascript:void(0)" tabindex="0" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left" role="menuitem">Account settings</a>
                        <a href="javascript:void(0)" tabindex="1" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left" role="menuitem">Support</a>
                        <span role="menuitem" tabindex="-1" class="flex justify-between w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 cursor-not-allowed opacity-50" aria-disabled="true">New feature (soon)</span>
                        <a href="javascript:void(0)" tabindex="2" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left" role="menuitem">License</a>
                    </div> -->
                    <div class="py-1">
                        <a href="javascript:void(0)" tabindex="3" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left" role="menuitem">Sign out</a>
                    </div>
                </div>
            </div>
        </div>





        <table id="example" class="table table-striped table-bordered bg-white mt-4 mb-20">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>($)</th>
                </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < 13; $i++)
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>2011/04/25</td>
                        <td>
                            <span style="color: #FFC300;">[$]</span> 320,800
                        </td>
                    </tr>
                @endfor

            @for ($i = 0; $i < 10; $i++)
                {{ $i }} <br>
            @endfor



    </tbody>
        </table>

    </div>









<footer class="relative   bg-gradient-to-tr from-black to-gray-800  pt-8 pb-6">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap text-left lg:text-left">
      <div class="w-full lg:w-6/12 px-4">
        <h4 class="text-2xl fonat-semibold text-blueGray-500 ">Хајде да <span class="font-bold">не</span> будемо у контакту ако има проблема! 😉</h4>
     
        <!-- <div class="mt-6 lg:mb-0 mb-6">
          <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-linkedin"></i></button><button class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-github"></i>
          </button>
        </div> -->
      </div>
      <!-- <div class="w-full lg:w-6/12 px-4">
        <div class="flex flex-wrap items-top mb-6">
          <div class="w-full lg:w-4/12 px-4 ml-auto">
            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful Links</span>
            <ul class="list-unstyled">
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
              </li>
          
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Free Products</a>
              </li>
            </ul>
          </div> -->
         
        </div>
      </div>
    </div>
    <hr class="my-6 border-gray-700">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-4/12 px-4 mx-auto text-center">
        <div class="text-sm text-blueGray-500 font-semibold py-1">
          Copyright © <span id="get-current-year">$"20-{System.DateTime.Now}";</span><a href="https://www.creative-tim.com/product/notus-js" class="text-blueGray-500 hover:text-gray-800" target="_blank">
        </div>
      </div>
    </div>
  </div>
</footer>



    </div>


</body>

</html>