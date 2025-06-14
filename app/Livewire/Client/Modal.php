<?php

namespace App\Livewire\Client;

use DB;
use Livewire\Attributes\Validate;
use LivewireUI\Modal\ModalComponent;
use Gloudemans\Shoppingcart\Facades\Cart;

class Modal extends ModalComponent
{

    #[Validate('required|numeric|min:0')]
    public $num;

    public $id;

    public $product;

    public function mount()
    {
        $sql = "SELECT p.*, u.name as unit FROM products p JOIN units u ON p.unit_id = u.id WHERE p.id = ?";
        $product = DB::select($sql, [$this->id]);
        if(empty($product)) {
            $this->product = [];
        } else {
            $this->product = $product[0];
        }
        $this->num = 1;
    }

    public function render()
    {
        return view('livewire.client.modal');
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
        $id = intval($this->id);

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
    }

}
