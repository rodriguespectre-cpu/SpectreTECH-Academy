<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'SpectreTECH Academy')
    </title>

    <meta name="description"
          content="@yield('description', 'SpectreTECH Academy - Formations avancées en programmation.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-slate-50 text-slate-700 antialiased">


    @include('partials.navbar')


    <main>
        @yield('content')
    </main>


    @include('partials.footer')


</body>

</html>
