<nav class="navbar flex h-[10vh]">
    <div>
        <img src="" alt="">
    </div>
    <div>
        <ul class="menu menu-horizontal p-0">
            <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Accueil</a></li>
            <li><a href="{{ route('team') }}" class="{{ Request::routeIs('team') ? 'active' : '' }}">L'équipe</a></li>
            <li><a href="{{ route('mediums-hat') }}" class="{{ Request::routeIs('mediums-hat') ? 'active' : '' }}">Medium's Hat</a></li>
            <li><a href="{{ route('aboutus') }}" class="{{ Request::routeIs('aboutus') ? 'active' : '' }}">A propos</a></li>
            <li><a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
    </div>
</nav>
