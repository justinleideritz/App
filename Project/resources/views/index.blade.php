@vite(['resources/css/index.css'])
    <!DOCTYPE html>
<html lang="en">

    <x-head>
        <x-slot:sTitle>Home</x-slot:sTitle>
    </x-head>

    <body class="index-page">

        <x-nav></x-nav>

        <header class="index-hero">
            <div class="index-hero__copy">
                <p class="index-eyebrow">Fresh Drops</p>
                <h1>Energy Shoppa for loud flavors and zero sleepy vibes.</h1>
                <p class="index-hero__text">Stack your fridge with bold cans, quick boosts, and enough caffeine to survive any messy day.</p>
                <div class="index-actions">
                    <a class="index-button index-button--primary" href="{{ route('shop') }}">Shop the lineup</a>
                    <a class="index-button index-button--ghost" href="{{ route('login') }}">Member login</a>
                </div>
            </div>

            <div class="index-hero__panel">
                <div class="index-stat">
                    <span>Fast lane</span>
                    <strong>Same-day energy</strong>
                    <p>Quick picks for people who need motion, not speeches.</p>
                </div>
                <div class="index-stat">
                    <span>Street picks</span>
                    <strong>Cold. Bright. Charged.</strong>
                    <p>Designed to make the whole storefront feel less basic.</p>
                </div>
            </div>
        </header>

        <main class="index-main">
            <section class="index-grid">
                <article class="index-card">
                    <p class="index-eyebrow">About</p>
                    <h2>No dusty webshop energy.</h2>
                    <p>
                        This store is built to feel direct, bright and a little reckless in a good way. No clutter, no weird maze navigation, just products and pace.
                    </p>
                </article>

                <article class="index-card index-card--accent">
                    <p class="index-eyebrow">Why it hits</p>
                    <ul class="index-list">
                        <li>Sharper layout across desktop and mobile.</li>
                        <li>Cleaner path from landing page to checkout flow.</li>
                        <li>Visual system that matches your login, nav and footer.</li>
                    </ul>
                </article>
            </section>
        </main>

        <x-footer></x-footer>

    </body>
</html>
