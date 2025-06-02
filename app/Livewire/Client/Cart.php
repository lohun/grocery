<?php

namespace App\Livewire\Client;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class Cart extends Component
{

    public function render()
    {

        $cart_items = \Surfsidemedia\Shoppingcart\Facades\Cart::content();
        $total = \Surfsidemedia\Shoppingcart\Facades\Cart::subtotal();
        $numOfItems = $cart_items->count();


        return view('livewire.client.cart', [
            'total' => $total,
            'count' => $numOfItems,
            'cart_items' => $cart_items
        ]);
    }

    public function removeItem(int $productId)
    {
        $productId = intval($productId);

        $product = Product::where('id', $productId)->exists();

        if (!$product) {
            return;
        }


        \Surfsidemedia\Shoppingcart\Facades\Cart::remove($productId);
    }

    public function clearCart()
    {

        \Surfsidemedia\Shoppingcart\Facades\Cart::destroy();
        $this->dispatch("updateCart");
    }

    #[On('updateCart')]
    public function updateCart()
    {
    }
}
