<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contatti</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Import the custom scss -->
        @vite('resources/js/app.js')
    </head>
    <body class="d-flex justify-contetn-center align-items-center flex-column mt-4 pt-4">
        <h1>{{ $title }}</h1>
        <h2>{{ $description }}</h2>
        @if (count($contactsList)>0)
        <p>
            <h2>{{ $contactsTitle }}</h2>
            <ul>
                @foreach ($contactsList as $contact)
                    <li>{{ $contact }}</li>
                @endforeach
            </ul>
        </p>
        @endif
        <a href="{{ route("homepage") }}">Torna alla pagina principale</a>
    </body>
</html>
