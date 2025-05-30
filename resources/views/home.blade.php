@extends('layouts.app')

@section('title', 'Home')

@section('content')
      <!-- Componente Livewire do carrinho -->
    <livewire:cart />

    <h1 class="text-3xl font-bold mb-6">Produtos em Destaque</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($products as $product)
            <div class="border rounded-lg overflow-hidden shadow-lg">
                <img src="{{ $product->image }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                    <p class="text-gray-600 mt-2">R$ {{ number_format($product->price, 2, ',', '.') }}</p>
                    <a href="/product/{{ $product->id }}" class="bg-blue-500 text-white px-4 py-2 mt-4 w-full inline-block text-center">Ver Detalhes</a>

                    <!-- Botão Adicionar ao Carrinho -->
                    <button wire:click="$emit('addToCart', {{ $product->id }})"
                            class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 mt-2 w-full rounded">
                        Adicionar ao Carrinho
                    </button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
