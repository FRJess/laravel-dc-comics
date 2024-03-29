<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>DC Comics</title>

 <!-- Fonts -->
 <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

 <!-- Font Awesome -->
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css'
  integrity='sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ=='
  crossorigin='anonymous' />

 <!-- Styles -->
 @vite('resources/js/app.js')

</head>

<body class="bg-dark text-white">

 @include('partials.header')

 @yield('content')

 @include('partials.footer')

</body>

</html>
