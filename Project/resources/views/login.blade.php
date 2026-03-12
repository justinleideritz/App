@php @endphp
@vite(['resources/css/login.css'])
    <!DOCTYPE html>

<html lang="en">
    <x-head>
        <x-slot:title>Login</x-slot:title>
    </x-head>
    <body>
        <x-nav></x-nav>

        <main class="login-page">
            <section class="login-shell">
                <div class="login-copy">
                    <p class="login-eyebrow">Members Area</p>
                    <h1>Sign in and step back into the shop.</h1>
                    <p class="login-text">
                        Manage your account, track your moves, and keep the session tight.
                    </p>
                </div>

                <div class="login-card">
                    <form class="login-form" method="POST" action="{{ route('login.form') }}">
                        @csrf

                        <div class="field">
                            @if ($errors->any())
                                @foreach($errors->get('email') as $sError)
                                    <p>{{ $sError }}</p>
                                @endforeach
                            @endif
                            <label for="email">Email</label>
                            <input id="email" type="text" name="email" placeholder="Enter your email">
                        </div>

                        <div class="field">
                            @if ($errors->any())
                                @foreach($errors->get('password') as $sError)
                                    <p>{{ $sError }}</p>
                                @endforeach
                            @endif
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" placeholder="Enter your password">
                        </div>

                        <button class="login-button" type="submit">Login</button>
                    </form>
                </div>
            </section>
        </main>

        <x-footer></x-footer>
    </body>
</html>
