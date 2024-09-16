<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/navigation/navigation.css', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    body {
        color: black;
        background-color: var(--grey);
        font-size: .9rem;
        font-family: "Roboto Flex", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
            "slnt" 0,
            "wdth" 100,
            "GRAD" 0,
            "XOPQ" 96,
            "XTRA" 468,
            "YOPQ" 79,
            "YTAS" 750,
            "YTDE" -203,
            "YTFI" 738,
            "YTLC" 514,
            "YTUC" 712;
    }
</style>

<body>
    <header>
        <nav id="standard-nav">
            <div id="sn-container">
                Navigation
            </div>
            <div class="vail"></div>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>

    </footer>
</body>

</html>
