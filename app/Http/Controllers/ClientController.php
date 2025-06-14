<?php

namespace App\Http\Controllers;

use App\Models\Order;
use DB;
use Http;
use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class ClientController extends Controller
{


    public function products(Request $request, $category)
    {
        return view('client.product', [
            "categories_id" => trim($category),
        ]);
    }

    public function checkout(Request $request)
    {
        $cart_items = Cart::content();
        $total = doubleval(Cart::total());
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

    public function complete(Request $request)
    {
        $tx_id = $request->get('transaction_id');
        $tx_ref = $request->get('tx_ref');
        $tx_id = trim(htmlentities($tx_id));
        $post = Http::withHeaders(
            [
                "content-type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer " . env('FLUTTERWAVEPRIVATEKEY')
            ]
        )->get("https://api.flutterwave.com/v3/transactions/$tx_id/verify");
        $post->throw();
        $req = json_decode($post->body(), true);

        if ($req['data']['status'] == "success") {
            $tx_ref = $req['data']['tx_ref'];
            $amount = $req['data']['amount'];

            $order = Order::update(['order_status' => "1", "pay" => $amount], ["invoice_no" => $tx_ref]);
            if (!$order) {
                return redirect()
                    ->back()
                    ->with("error", 'Order failed!');
            }

            Cart::instance('client')->destroy();
        }

        return redirect()
            ->back()
            ->with('success', 'Order recorded!');
    }

    public function webhook(Request $request)
    {
        // Handle the webhook logic here
        // This is where you would process the incoming webhook data from Flutterwave
        // For example, you might want to log the request or update order statuses based on the webhook data

        // Example: Log the request data
        \Log::info('Webhook received:', $request->all());

        return response()->json(['status' => 'success'], 200);
    }

    public function search(Request $request)
    {
        return view('client.search');
    }
}
