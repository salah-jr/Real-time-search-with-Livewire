
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Users</title>

        <!-- TailwindCSS -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

        @livewireStyles
    </head>
    <body style="    background: #414f66;
    color: #fff;">

        <div class="container mx-auto">
            <h1 class="text-4xl text-center my-10">Users Data Table</h1>
            @livewire('users-table')
        </div>

        @livewireScripts
    </body>
</html>
