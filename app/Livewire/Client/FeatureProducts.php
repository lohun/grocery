<?php

namespace App\Livewire\Client;

use App\Models\Product;
use DB;
use Livewire\Component;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class FeatureProducts extends Component
{

    public function render()
    {
        $sql = "SELECT * FROM products limit 6";
        $products = DB::select($sql);
        return view('livewire.client.feature-products', [
            "products" => $products
        ]);
    }


    public function addToFeatureCart($id)
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
