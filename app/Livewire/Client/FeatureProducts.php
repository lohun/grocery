<?php

namespace App\Livewire\Client;

use App\Models\Product;
use DB;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

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


        Cart::instance("client")->add([
            "id" => $product[0]->id,
            "name" => $product[0]->name,
            "qty" => 1,
            "price" => $product[0]->selling_price/100,
            "weight" => 1,
            "options" => [
                "img" => $product[0]->product_image,
                "unit" => $product[0]->unit
            ]
        ]);

        $this->dispatch("updateCart");

        return;
    }
}
