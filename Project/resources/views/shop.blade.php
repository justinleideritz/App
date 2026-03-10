<!DOCTYPE html>
<html lang="en">

    <x-head>
        <x-slot:sTitle>Shop</x-slot:sTitle>
    </x-head>

    <body class="bg-gray-950 text-gray-100">

        <x-nav></x-nav>

        <header class="bg-gray-800 py-24">
            <div class="max-w-4xl mx-auto text-center px-4">
                <h1 class="text-4xl font-bold mb-4">Shop</h1>
                <p class="text-gray-600">Some text</p>
            </div>
        </header>

        <main class="mx-auto px-4 py-16 flex flex-wrap justify-center gap-8">
            @foreach ($aProducts as $oProduct)
                <div class="w-[45%] bg-gray-900 p-6 rounded">
                    <h2 class="text-2xl font-bold mb-2">{{$oProduct->getName()}}</h2>
                    <img src="https://picsum.photos/600/400" alt="Product image" class="w-100 h-auto rounded mb-4">
                    <p class="text-gray-600 mb-4">{{$oProduct->getDescription()}}</p>
                    <p class="text-xl font-bold mb-2">${{$oProduct->getPrice()}}</p>
                    <a href="/shop/{{$oProduct->getID()}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Buy Now
                    </a>
                </div>
            @endforeach
        </main>

        <x-footer></x-footer>

    </body>
</html>
