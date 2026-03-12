@vite(['resources/css/components/footer.css'])

<footer>
    <div class="footer-brand">
        <strong>Bombaclat</strong>
        <p>Heavy fits, clean moves, zero dead links.</p>
    </div>

    <div class="footer-meta">
        <a href="{{ route('index') }}">Home</a>
        <a href="{{ route('shop') }}">Shop</a>
        <a href="{{ route('login') }}">Login</a>
        <p>&copy; {{ date('Y') }} Bombaclat. All rights reserved.</p>
    </div>
</footer>
