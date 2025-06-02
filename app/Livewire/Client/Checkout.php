<?php

namespace App\Livewire\Client;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class Checkout extends Component
{
    #[Validate('required|string')]
    public $first;

    #[Validate('required|string')]
    public $last;

    #[Validate('string')]
    public $middle;

    #[Validate('required|email')]
    public $email;

    #[Validate('required|string')]
    public $streetAddress;

    // #[Validate('required|string')]
    public $state = "Abuja";

    // #[Validate('required|string')]
    public $country = "Nigeria";

    #[Validate('required|string')]
    public $phoneNo;

    public function render()
    {
        $cart_items = Cart::content();
        $total = doubleval(Cart::subtotal(2, ".", "" ));
        $count = $cart_items->count();
        return view('livewire.client.checkout', [
            "cart_items" => $cart_items,
            "sub_total" => $total,
            "count" => $count,
            "shipping" => 800,
            "total" => $total + 800
        ]);
    }

    private function saveUser()
    {
        $customer = Customer::updateOrCreate(
            [
                'email' => $this->email
            ],
            [
                'name' => $this->last . " " . $this->middle . " " . $this->first,
                'email' => $this->email,
                'phone' => $this->phoneNo,
                'address' => $this->streetAddress . ", " . $this->state . ", " . $this->country,
            ]
        );

        return $customer;
    }

    public function placeOrder()
    {
        // $this->validate();
        $customer = $this->saveUser();
        $invoice_no = IdGenerator::generate([
            'table' => 'orders',
            'field' => 'invoice_no',
            'length' => 10,
            'prefix' => 'INV-',
        ]);
        $total = doubleval(Cart::subtotal(2, ".", "" )) + 800;
        $misc = [
            'pay' => 0,
            'payment_type' => 'online',
            'customer_id' => $customer['id'],
            'order_date' => Carbon::now()->format('Y-m-d'),
            'order_status' => 0,
            'total_products' => Cart::count(),
            'sub_total' => doubleval(Cart::subtotal()),
            'vat' => "0",
            'total' => $total,
            'invoice_no' => $invoice_no,
            'due' => $total,
        ];
        $order = Order::create($misc);

        // Create Order Details
        $contents = Cart::content();
        $oDetails = [];

        foreach ($contents as $content) {
            $oDetails['order_id'] = $order['id'];
            $oDetails['product_id'] = $content->id;
            $oDetails['quantity'] = $content->qty;
            $oDetails['unitcost'] = $content->price;
            $oDetails['total'] = $content->subtotal;
            $oDetails['created_at'] = Carbon::now();

            OrderDetails::insert($oDetails);
        }

        $this->dispatch("completePayment", [$total, $invoice_no, $customer['id'], $customer['email'], $customer['phone'], $customer['name']]);


        // Delete Cart Sopping History
        Cart::destroy();
    }
}
