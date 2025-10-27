<!-- 4.created a form page according to the name 'create-form' -->
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
            <h2 class="text-2xl font-bold">Form</h2>
            <div>
                <a href="/" class="bg-[#1b1b18] text-[#FDFDFC] px-4 py-2 rounded">
                    Back To Home
                </a>
            </div>

        </div>
        <!-- component -->
<div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-linear-to-br'>
		<div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
			<div class='max-w-md mx-auto space-y-6'>
                <!-- 4.1 created a form and method POST and set the (route('store') -->
				<form action="{{route('store-item')}}" method="POST">
                    <!-- 4.4 use @csrf to protect the form from csrf attack -->
                    @csrf
					<h2 class="text-2xl font-bold ">Submit your Data</h2>
					<hr class="my-6">
					<label class="uppercase text-sm font-bold opacity-70">Name</label>
					<input type="text" name="name" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
					<label class="uppercase text-sm font-bold opacity-70">Description</label>
					<input type="text" name="description" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
					<div class="upload-container">
                        <label for="image-upload">Upload Image </label>
                    <input class="p-4 bg-amber-200" type="file" id="image-upload" name="image" accept="image/*">
                 </div>
					<input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Send">
				</form>

			</div>
		</div>
	</div>


    </body>
</html>
