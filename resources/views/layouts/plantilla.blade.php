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
    <header>
        <h1>coder wil free</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}" class={{request()->routeIs('home') ? 'action' : ''}}>Home</a>
                </li>
                <li><a href="{{route('cursos.index')}}" class={{request()->routeIs('cursos.index') ? 'action' : ''}}>Cursos</a>
                </li>
                <li><a href="{{route('nosotros')}}" class={{request()->routeIs('nosotros') ? 'action' : ''}}>Nosostros</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- </nav> -->
   @yield('content')
    <!-- <footer>-->
    <!-- script  -->
</body>
</html>