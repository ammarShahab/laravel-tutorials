<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
          
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen ">
        <div class="flex justify-between items-center px-10 py-4">
            <h2 class="text-2xl font-bold">Hello Laravel Home</h2>
            

            <div>
                <a href="/test" class="bg-[#1b1b18] text-[#FDFDFC] px-4 py-2 rounded">
                    Start Tutorial
                </a>
            </div>

            <div>
                <a href="/create-item" class="bg-[#1b1b18] text-[#FDFDFC] px-4 py-2 rounded">
                    Create New Item
                </a>
            </div>
            
        </div>
        <!-- 4.6  show the success message conditionally where u want to show the message for post-->
         @if(session('success'))
            <div class="bg-green-500 w-1/4 text-white px-4 py-2 rounded ml-8">
                {{ session('success')}}
            </div>
        @endif
        
    </body>
</html>
