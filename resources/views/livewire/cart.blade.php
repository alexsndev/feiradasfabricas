<div class="bg-white p-4 rounded shadow mb-6">
    <h2 class="text-xl font-bold mb-4">Seu Carrinho</h2>

    @if (count($cart) > 0)
        <ul>
            @foreach ($cart as $item)
                <li class="flex items-center mb-4">
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-cover rounded mr-4">
                    <div class="flex-grow">
                        <h3 class="font-semibold">{{ $item['name'] }}</h3>
                        <p>Quantidade: {{ $item['quantity'] }}</p>
                        <p>Preço unitário: R$ {{ number_format($item['price'], 2, ',', '.') }}</p>
                        <p>Subtotal: R$ {{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }}</p>
                    </div>
                    <button wire:click="removeFromCart({{ $item['id'] }})" class="text-red-500 font-bold ml-4">Remover</button>
                </li>
            @endforeach
        </ul>

        <hr class="my-4">

        <div class="text-right font-bold text-lg">
            Total: R$ {{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)), 2, ',', '.') }}
        </div>

        <div class="mt-4 flex justify-end gap-4">
            <a href="/checkout" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Finalizar Compra</a>
            <a href="/" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">Continuar Comprando</a>
        </div>

    @else
        <p>Seu carrinho está vazio.</p>
    @endif
</div>
