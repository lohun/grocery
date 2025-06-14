<?php

namespace App\Livewire\Client;

use Livewire\Attributes\On;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartIcon extends Component
{
    public function render()
    {
        $cart = Cart::instance("client");
        $total = $cart->subtotal(0,".","");
        $count = $cart->content()->count();

        return view('livewire.client.cart-icon', [
            "total" => $total,
            "count" => $count
        ]);
    }

    #[On('updateCart')]
    public function updateCart()
    {
    }
}
