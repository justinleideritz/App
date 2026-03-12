@vite(['resources/css/components/nav.css'])

<nav>
    <a class='nav-logo' href="{{ route('index') }}">
        <span class='nav-mark'>E</span>
        <div>
            <strong>Enery Shoppa</strong>
            <p>Bombaclat</p>
        </div>
    </a>

    <div class='nav-links'>
        <ul>
            <li class='nav-item'>
                <a class="{{ request()->routeIs('index') ? 'is-active' : '' }}" href="{{ route('index') }}">Home</a>
            </li>
            <li class='nav-item'>
                <a class="{{ request()->routeIs('shop') ? 'is-active' : '' }}" href="{{ route('shop') }}">Shop</a>
            </li>
            <li class='nav-item'>
                <a class="{{ request()->routeIs('login') || request()->routeIs('user_login') ? 'is-active' : '' }}" href="{{ route('login') }}">Login</a>
            </li>
        </ul>
    </div>
</nav>
