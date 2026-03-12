@vite(['resources/css/register.css'])
    <!DOCTYPE html>

<html lang="en">
    <x-head>
        <x-slot:title>Register</x-slot:title>
    </x-head>
    <body>
        <x-nav></x-nav>

        <main class="register-page">
            <section class="register-shell">
                <div class="register-copy">
                    <h1>Register now!</h1>
                    <p class="register-text">
                        Manage your account, track your moves, and keep the session tight.
                    </p>
                </div>

                <div class="register-card">
                    <form class="register-form" method="post" action="">
                        @csrf

                        <div class="field">
                            <label for="username">Username</label>
                            <input id="username" type="text" name="username" placeholder="Enter your username">
                        </div>

                        <div class="field">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" placeholder="Enter your password">
                        </div>

                        <div class="field">
                            <label for="password_repeat">Repeat password</label>
                            <input id="password_repeat" type="password" name="password_repeat" placeholder="Enter your password">
                        </div>

                        <button class="register-button" type="submit">Register</button>
                    </form>
                </div>
            </section>
        </main>

        <x-footer></x-footer>
    </body>
</html>
