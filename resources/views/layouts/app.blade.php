<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <!-- Menu -->
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between">
            <a href="/" class="font-bold">Meu E-commerce</a>
            <div>
                <a href="/cart" class="mr-4">Carrinho</a>
                <a href="/login">Login</a>
            </div>
        </div>
    </nav>

    <!-- Conteúdo -->
    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            © 2024 Meu E-commerce
        </div>
    </footer>
    @livewireScripts
</body>
</html>
