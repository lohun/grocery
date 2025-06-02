<?php

namespace App\Livewire\Client;

use Livewire\Attributes\On;
use Livewire\Component;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class CartIcon extends Component
{
    public function render()
    {
        $total = Cart::subtotal();
        $count = Cart::content()->count();

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
