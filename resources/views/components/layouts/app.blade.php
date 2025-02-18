<!DOCTYPE html class="h-full bg-gray-100">
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    </head>

    <body class="h-full">
        <div class="min-h-full">
            <x-layouts.nav />
            <x-layouts.header />
            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>

</html>
