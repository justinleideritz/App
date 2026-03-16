@vite(['resources/css/shop.css'])
    <!DOCTYPE html>
<html lang="en">

    <x-head>
        <x-slot:sTitle>Shop</x-slot:sTitle>
    </x-head>

    <body class="shop-page">

        <x-nav></x-nav>

        <header class="shop-hero">
            <div class="shop-hero__copy">
                <p class="shop-eyebrow">Storefront</p>
                <h1>Boost yourself to the next line of code.</h1>
                <p class="shop-hero__text">Everything below is laid out to scan fast, compare quick and grab what you need without the awkward clutter.</p>
            </div>

            <div class="shop-hero__panel">
                <div class="shop-stat">
                    <span>Biggest buyer</span>
                    <strong>Justin</strong>
                    <p>The real addict</p>
                </div>
                <div class="shop-stat">
                    <span>Hottest item</span>
                    <strong>Mango Loco</strong>
                    <p>The real one</p>
                </div>
            </div>
        </header>

        <main class="shop-main">
            <section class="shop-grid">
                @forelse ($aProducts as $oProduct)
                    <article class="shop-card">
                        <div class="shop-card__image-wrap">
                            <img class="shop-card__image" src="{{ asset('storage/images/mango_loco.webp') }}" alt="{{ $oProduct->getName() }}">
                        </div>

                        <div class="shop-card__body">
                            <div class="shop-card__heading">
                                <h2>{{ $oProduct->getName() }}</h2>
                                <p class="shop-card__price">${{ number_format((float) $oProduct->getPrice(), 2) }}</p>
                            </div>

                            <p class="shop-card__description">
                                {{ $oProduct->getDescription() ?: 'No description yet, but the product is live and ready for action.' }}
                            </p>

                            <div class="shop-card__footer">
                                <span class="shop-card__stock">Stock: {{ $oProduct->getQuantity() }}</span>
                                <a class="shop-button" href="/shop/{{ $oProduct->getID() }}">Buy now</a>
                            </div>
                        </div>
                    </article>
                @empty
                    <article class="shop-empty">
                        <p class="shop-eyebrow">No stock</p>
                        <h2>No products landed yet.</h2>
                        <p>Add a few records to the `product` table and this grid will fill up proper.</p>
                    </article>
                @endforelse
            </section>
        </main>

        <x-footer></x-footer>

    </body>
</html>
