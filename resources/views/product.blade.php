@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="flex flex-col md:flex-row gap-8">
        <div class="md:w-1/2">
            <img src="{{ $product->image }}" class="w-full rounded-lg">
        </div>
        <div class="md:w-1/2">
            <h1 class="text-3xl font-bold">{{ $product->name }}</h1>
            <p class="text-2xl text-blue-600 my-4">R$ {{ number_format($product->price, 2, ',', '.') }}</p>
            <div class="mb-6">
                <h2 class="font-semibold">Descrição:</h2>
                <p>{{ $product->description }}</p>
            </div>
            <button class="bg-blue-500 text-white px-6 py-3 rounded-lg w-full">
                Adicionar ao Carrinho
            </button>
        </div>
    </div>
@endsection
