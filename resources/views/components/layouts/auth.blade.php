<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <div class="flex flex-col justify-center min-h-full px-6 py-12 lg:px-8">
        <div class="mx-auto w-[30rem] bg-slate-300 rounded-md py-7 shadow-lg">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="w-auto h-20 mx-auto" src="https://pngimg.com/uploads/book/book_PNG2116.png"
                    alt="Your Company">

                <h2 class="mt-10 font-bold tracking-tight text-center text-gray-900 text-2xl/9">{{ $header }}</h2>
            </div>

            {{ $slot }}

        </div>
    </div>


</body>

</html>
