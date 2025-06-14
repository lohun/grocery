<?php

namespace App\Livewire\Client;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class Cart extends Component
{

    public function render()
    {

        $cart = \Gloudemans\Shoppingcart\Facades\Cart::instance("client");
        $cart_items = $cart->content();
        $total = $cart->subtotal(2, ".", "");
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


        $cart = \Gloudemans\Shoppingcart\Facades\Cart::instance("client");
        $cart->remove($productId);
    }

    public function clearCart()
    {
        $cart = \Gloudemans\Shoppingcart\Facades\Cart::instance("client");
        $cart->destroy();
        $this->dispatch("updateCart");
        $this->dispatch("clearOverlay");
    }

    #[On("updateCart")]
    public function updateCart()
    {}
}
