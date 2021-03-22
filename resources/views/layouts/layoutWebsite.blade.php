<html class="max-w-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Tillier Mathieu - @yield('title')</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @include('navbar/navbarWebsite')
</head>

<body class="bg-gray-300 dark:bg-gray-900">

    @yield('content')


    <script>
        AOS.init();
    </script>

</body>

<footer>
    {{--  @include('footer') --}}
</footer>