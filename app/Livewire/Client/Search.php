<?php

namespace App\Livewire\Client;

use App\Models\Category;
use App\Models\Product;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
     use WithPagination;
    protected $paginationTheme = 'bootstrap';



    #[Url]
    public $s = '';

    public $sortBy;

    public function render()
    {
        return view('livewire.client.search', [
            "products" => Product::search($this->s)->paginate(),
            "categories" => Category::all()
        ]);
    }

    public function addToCart(int $id)
    {
        $id = intval($id);

        $sql = "SELECT p.*, u.name as unit FROM products p JOIN units u ON p.unit_id = u.id WHERE p.id = ?";
        $product = DB::select($sql, [$id]);

        if (!$product) {
            return;
        }

        Cart::instance('client')->add([
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

    public function sort($sortBy)
    {
        if ($sortBy == 1 || $sortBy == 2 || $sortBy == 3) {
            $this->sortBy = $sortBy;
        }
        $this->updateList();

    }

    #[On("UpdateList")]
    public function updateList()
    {
    }

    public function changeCategory($category)
    {
        $this->redirect(route('client.product', [$category]));
    }
}
