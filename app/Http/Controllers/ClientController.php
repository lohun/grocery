<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use DB;
use Http;
use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class ClientController extends Controller
{


    public function products(Request $request, $category)
    {
        $sql = "SELECT c.*, p.selling_price FROM products p JOIN categories c ON p.category_id = c.id WHERE c.slug = ?";
        $categories = DB::select($sql, [$category]);

        $category_id = 1;
        if (count($categories) > 0) {
            $category_id = $categories[0]->id;
        }

        return view('client.product', [
            "categories_id" => $category_id,
        ]);
    }

    public function checkout(Request $request)
    {
        $cart_items = Cart::content();
        $total =doubleval(Cart::total());
        $count = $cart_items->count();
        $shipping = 800;


        return view('client.checkout', [
            'cart_items' => $cart_items,
            'count' => $count,
            "sub_total" => $total,
            "shipping" => $shipping,
            "total" => $total + $shipping
        ]);
    }

    public function complete(Request $request, string $tx_ref, int $tx_id, string $status)
    {
        $tx_id = trim(htmlentities($tx_id));
        $post = Http::post(
            "https://api.flutterwave.com/v3/transactions/123456/verify",
            [
                "content-type" => "application/json",
                "Authorization" => "Bearer " . env("FLUTTERWAVE SECRET")
            ]
        );
        $post->throw();
        $req = $post->json();

        if ($req['status'] == "success") {
            $tx_ref = $req['data']['tx_ref'];
            $amount = $req['data']['amount'];

            $order = Order::update(['status' => "1"], ["invoice_no" => $tx_ref, "total" => $amount]);
            if (!$order) {
                return redirect()
                    ->route('client.product')
                    ->with("error", 'Order failed!');
            }
        }

        return redirect()
            ->route('client.product')
            ->with('success', 'Order recorde!');
    }
}
