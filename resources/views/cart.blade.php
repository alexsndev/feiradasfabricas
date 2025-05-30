@extends('layouts.app')

@section('title', 'Carrinho')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Seu Carrinho</h1>

    <div class="bg-white rounded-lg shadow-md p-6">
        <!-- Item 1 -->
        <div class="flex items-center border-b pb-4 mb-4">
            <img src="https://via.placeholder.com/100" class="w-20 h-20 object-cover mr-4">
            <div class="flex-grow">
                <h2 class="font-semibold">Smartphone XYZ</h2>
                <p>R$ 1.999,99</p>
            </div>
            <div class="flex items-center">
                <button class="bg-gray-200 px-3 py-1 rounded">-</button>
                <span class="mx-2">1</span>
                <button class="bg-gray-200 px-3 py-1 rounded">+</button>
                <button class="text-red-500 ml-4">Remover</button>
            </div>
        </div>

        <!-- Resumo -->
        <div class="mt-6">
            <div class="flex justify-between font-semibold text-xl">
                <span>Total:</span>
                <span>R$ 1.999,99</span>
            </div>
            <a href="/checkout" class="bg-blue-500 text-white px-6 py-3 rounded-lg block text-center mt-4">
                Finalizar Compra
            </a>
        </div>
    </div>
@endsection
