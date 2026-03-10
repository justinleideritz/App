@vite(['resources/css/components/nav.css'])

<nav>
    <div class='nav-logo'>
        <h2>Bombaclat</h2>
    </div>
    <div class='nav-links'>
        <ul>
            <li class='nav-item'>
                <a href="{{ route('index') }}">Home</a>
            </li>
            <li class='nav-item'>
                <a href="{{ route('shop') }}">Shop</a>
            </li>
        </ul>
    </div>
</nav>
