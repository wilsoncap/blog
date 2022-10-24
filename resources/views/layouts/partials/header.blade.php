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