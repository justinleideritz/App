<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>

        @vite(['resources/css/app.css', 'resources/css/app.css'])
        <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    </head>
    <body>

        <nav class="navbar">
            <div class="container">
                <h2 class="logo">MySite</h2>
                <ul class="nav-links">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <header class="hero">
            <div class="container">
                <h1>Welcome to My Website</h1>
                <p>This is a simple Laravel homepage layout with a navbar, header, content, and footer.</p>
            </div>
        </header>

        <main class="content container">
            <h2>About This Page</h2>
            <p>
                This is some example text for your homepage. You can add sections here like features, services, blog posts, or anything else you want visitors to see.
            </p>
            <p>
                Laravel Blade makes it easy to build reusable layouts and components.
            </p>
        </main>

        <footer class="footer">
            <div class="container">
                <p>&copy; {{ date('Y') }} MySite. All rights reserved.</p>
            </div>
        </footer>

    </body>
</html>
