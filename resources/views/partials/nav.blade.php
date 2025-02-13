<nav>
    <a href="{{ route('fruta.index') }}" class="btn btn-success btn-sm">Listado de frutas</a>
    @if(auth()->check())
        <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </li>
    @endif
</nav>