<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <title>@yield('tittle')</title>
    <!-- favicon -->
    <!-- estilos -->
    <style>
        .action{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    @include('layouts.partials.header')
    <!-- </nav> -->
   @yield('content')

   @include('layouts.partials.footer')
    <!-- script  -->
</body>
</html>