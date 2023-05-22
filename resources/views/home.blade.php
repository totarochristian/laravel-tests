<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Benvenuto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Import the custom scss -->
        @vite('resources/js/app.js')
    </head>
    <body class="d-flex justify-contetn-center align-items-center flex-column mt-4 pt-4">
        <h1>{{ $title }} {{ $username }}</h1>
        <h2>{{ $description }}</h2>
        @if (count($featuresList)>0)
        <p>
            <h2>{{ $featuresTitle }}</h2>
            <ul>
                @foreach ($featuresList as $feature)
                    <li>{{ $feature }}</li>
                @endforeach
            </ul>
        </p>
        @endif
        <a href="{{ route("contatti") }}">Vai alla pagina dei contatti</a>
    </body>
</html>
