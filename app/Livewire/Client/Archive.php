<?php

namespace App\Livewire\Client;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class Archive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';



    #[Validate('Required')]
    protected $category;



    // #[Validate('Required', message: "All fields must be filled")]

    public function mount($category)
    {
        $this->category = $category;
    }
    public function render()
    {
        $products = DB::table('products')->where("category_id", $this->category)->paginate(12);

        return view('livewire.client.archive', [
            "products" => $products,
            "slug" => $this->category,
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


        Cart::add($product[0]->id, $product[0]->name, 1, $product[0]->selling_price, [
            "img" => $product[0]->product_image,
            "unit" => $product[0]->unit
        ]);

        $this->dispatch("updateCart");
        $this->category = $product[0]->category_id;

    }

    public function updateAmount(int $id, int $quantity)
    {
        $id = intval($id);
        $quantity = intval($quantity);


        $item = Cart::get($id);

        $item->setQuantity($quantity);

        return;
    }
}
