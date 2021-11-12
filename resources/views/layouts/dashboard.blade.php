<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</header>
<header class="w-full bg-gray-800 p-4 flex justify-between items-center">
    <nav class="flex items-center">
      <img class="w-7 h-7" src="https://www.solarwinds.com/-/media/solarwinds/swdcv2/licensed-products/service-desk/integrations/sd-integrations-logo-jira.ashx?rev=701fbaa7f8ac4ae08e0406c8984c43e7&hash=75D4F04DE99B88DE7B2C4193F0616F1F" />
      <div class="text-white text-xs hidden sm:block ml-2">
        <a href="/" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer">Dashboard</a>
        <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1">Projects</a>
        <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1">Issues</a>
        <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1">Boards</a>
      </div>
    </nav>
    <div class="w-8 h-8 cursor-pointer">
      <img class="rounded-full" src="{{ asset('images/user_default.png') }}" />
    </div>
  </header>
  <main class="flex w-full h-screen">
  <aside class="w-80 h-screen bg-gray shadow-md w-fulll hidden sm:block">
    <div class="flex flex-col justify-between h-screen p-4 bg-gray-800">
        <div class="text-sm">

        <div class="bg-gray-900 text-white p-5 rounded cursor-pointer" hidden>Menu</div>

        <a href="{{ route('home') }}" >
            <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Home</div>
        </a>
        <a href="{{ route('profile.update') }}" >
            <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Edit Profile</div>
        </a>
          
          
          <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Backlog</div>
          <div class="bg-gray-700 text-blue-300 p-2 rounded mt-2 cursor-pointer">Board</div>
          <div class="bg-gray-900 flex justify-between items-center text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">
            <span>Reports</span>
            <span class="w-4 h-4 bg-blue-600 rounded-full text-white text-center font-normal text-xs">5</span>
          </div>
          <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Releases</div>
          <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Components</div>
          <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Repository</div>
        </div>
  
        <a href="{{route('logout.auth')}}">
            <div class="flex p-3 text-white bg-red-500 rounded cursor-pointer text-center text-sm">
            <button class="rounded inline-flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fillRule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clipRule="evenodd" /></svg>
                <span class="font-semibold">Logout</span>
            </button>
            </div>
        </a>
    </div>
  </aside>
  
  @yield('content')
  </main>

@yield('scripts')
  </html>