<?php

namespace App\Livewire\Client;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class PopularProducts extends Component
{
    public function render()
    {
        $sql = "SELECT DISTINCT p.*, count(*) as num FROM products p JOIN order_details o ON p.id=o.product_id group by p.id order by num desc limit 8";
        $products = DB::select($sql);

        return view('livewire.client.popular-products', [
            "products" => $products
        ]);
    }

    public function addToPopularCart(int $id)
    {
        $id = intval($id);

        $sql = "SELECT p.*, u.name as unit FROM products p JOIN units u ON p.unit_id = u.id WHERE p.id = ?";
        $product = DB::select($sql, [$id]);

        Cart::add($product[0]->id, $product[0]->name, 1, $product[0]->selling_price, [
            "img" => $product[0]->product_image
        ]);

        $this->dispatch("updateCart");

        return;
    }
}
