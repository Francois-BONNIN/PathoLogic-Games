<div class="navbar h-[10vh]">
    <div class="navbar-start">
        <a class="btn btn-ghost" href="{{ route('home') }}">
            <img src="{{ asset('img/Logo_pathologic.svg') }}" alt="Logo pathologic-games">
        </a>
    </div>
    <div class="navbar-end">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3/4 w-3/4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M 4 6 h 16 M 10 12 h 10 m -16 6 h 16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content p-12 rounded-box bg-night-blue bg-opacity-90">
                <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Accueil</a></li>
                <li><a href="{{ route('team') }}" class="{{ Request::routeIs('team') ? 'active' : '' }}">L'équipe</a></li>
                <li><a href="{{ route('mediums-hat') }}" class="{{ Request::routeIs('mediums-hat') ? 'active' : '' }}">Medium's Hat</a></li>
                <li><a href="{{ route('aboutus') }}" class="{{ Request::routeIs('aboutus') ? 'active' : '' }}">A propos</a></li>
                <li><a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal p-0">
            <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Accueil</a></li>
            <li><a href="{{ route('team') }}" class="{{ Request::routeIs('team') ? 'active' : '' }}">L'équipe</a></li>
            <li><a href="{{ route('mediums-hat') }}" class="{{ Request::routeIs('mediums-hat') ? 'active' : '' }}">Medium's Hat</a></li>
            <li><a href="{{ route('aboutus') }}" class="{{ Request::routeIs('aboutus') ? 'active' : '' }}">A propos</a></li>
            <li><a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
    </div>

</div>
