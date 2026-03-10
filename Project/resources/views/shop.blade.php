<!DOCTYPE html>
<html lang="en">

    <x-head>
        <x-slot:sTitle>Shop</x-slot:sTitle>
    </x-head>

    <body>

        <x-nav></x-nav>

        <header>
            <div>
                <h1>Shop</h1>
                <p>Some text</p>
            </div>
        </header>

        <main>
            @foreach ($aProducts as $oProduct)
                <div>
                    <h2>{{$oProduct->getName()}}</h2>
                    <img src="https://picsum.photos/600/400" alt="Product image">
                    <p>{{$oProduct->getDescription()}}</p>
                    <p>${{$oProduct->getPrice()}}</p>
                    <a href="/shop/{{$oProduct->getID()}}">
                        Buy Now
                    </a>
                </div>
            @endforeach
        </main>

        <x-footer></x-footer>

    </body>
</html>
