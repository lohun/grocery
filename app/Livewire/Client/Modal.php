<?php

namespace App\Livewire\Client;

use App\Models\Product;
use Livewire\Component;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class Modal extends Component
{
    public $num;


    protected $product;

    protected $listeners = ['showProduct', 'showProduct'];

    public function mount($num = 1)
    {
        $this->num = $num;
    }

    public function render()
    {
        if (!$this->product) {
            $result = [
                "name" => "",
                "price" => "",
                "product_image" => "",
                "quantity_alert" => 0,
                "quantity" => 0,
                "notes" => ""
            ];
        }else {
            $result = $this->product->first();
        }

        return view('livewire.client.modal', [
            "product" => $result
        ]);
    }

    public function showProduct($id)
    {
        $this->product = Product::where("id", "=", $id);
    }


    public function increment()
    {
        $this->num++;
    }

    public function decrement()
    {
        if ($this->num > 0) {
            $this->num--;
        }
    }

    public function save()
    {
        Cart::add([
            'id' => $this->product->first()->id,
            'name' => $this->product->first()->name,
            'qty' => $this->num,
            'price' => $this->product->first()->price,
            'options' => [
                'image' => $this->product->first()->product_image
            ]
        ]);
    }

}
