<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
     

        <!-- Link to the CSS file -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <!-- Link to the js file -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <!-- ====== Navbar Section Start -->
<body class="antialiased text-gray-800 dark:text-gray-200">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900   pt-24">
        <x-layout.navbar></x-layout.navbar>

        {{$slot}}
   
       <x-layout.footer></x-layout.footer>
    </div> 
</body>
</html>
