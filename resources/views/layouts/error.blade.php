<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
    html {
        height: 100%;
        margin: 0;
    }

    body {
        height: 100%;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa; /* Color de fondo de respaldo */
    }

        .error-container {
            text-align: center;
            color: #333; /* Color del texto */
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con opacidad */
            padding: 20px;
            border-radius: 8px;
        }
        .icon-error{
            font-size: 200px;
            color: #dc3545
        }

        .error-code {
            font-size: 6rem;
            font-weight: bold;
            color: #dc3545; /* Color del texto para el código de error */
        }

        .error-message {
            font-size: 1.5rem;
        }

        .home-link {
            margin-top: 20px;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="error-container">
        @yield('content')
    </div>
</body>
</html>
