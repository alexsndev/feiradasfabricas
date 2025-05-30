<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Cart extends Component
{
    public $cart = [];

    protected $listeners = ['addToCart'];

    public function mount()
    {
        // Pega o carrinho da sessão ou inicia vazio
        $this->cart = session()->get('cart', []);
    }

    public function addToCart($productId)
    {
        // Verifica se produto já está no carrinho
        if (isset($this->cart[$productId])) {
            $this->cart[$productId]['quantity']++;
        } else {
            $product = Product::find($productId);
            if ($product) {
                $this->cart[$productId] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => 1,
                    'image' => $product->image,
                ];
            }
        }

        // Atualiza sessão e estado do componente
        session()->put('cart', $this->cart);

        // Emite evento para atualizar outras partes, se necessário
        $this->emit('cartUpdated');
    }

    public function removeFromCart($productId)
    {
        if (isset($this->cart[$productId])) {
            unset($this->cart[$productId]);
            session()->put('cart', $this->cart);

            // Atualiza estado do componente e avisa front-end
            $this->emit('cartUpdated');
        }
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
