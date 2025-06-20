<?php

namespace App\Livewire\Client;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;

class Archive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';



    #[URL('Required')]
    public $category;

    public $sortBy;



    // #[Validate('Required', message: "All fields must be filled")]

    public function mount($category)
    {
        $this->category = $category;
        $this->sortBy = 1;
    }
    public function render()
    {
        if ($this->sortBy == 1) {
            $products = DB::table('categories')->join('products', 'categories.id', 'products.category_id')->where("categories.slug", $this->category)->paginate(12);
        } else if ($this->sortBy == 2) {
            $products = DB::table('categories')->join('products', 'categories.id', 'products.category_id')->where("categories.slug", $this->category)->orderBy("products", "desc")->paginate(12);
        } else {
            $products = DB::table('categories')->join('products', 'categories.id', 'products.category_id')->where("categories.slug", $this->category)->orderBy("products", "asc")->paginate(12);
        }

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
