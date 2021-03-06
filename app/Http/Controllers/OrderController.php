<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function getForm(Request $request)
    {
        $value = $request->all();
        $subtring = substr($value['email'], strlen($value['email']) - 10, strlen($value['email']));
        if ($value['username'] != "" && $value['address'] != "" && $value['phone'] != "" && $value['email'] != "" && $subtring == "@gmail.com" && ctype_digit($value['phone'])) {
            $user = User::Create([
                'name' => $value['username'],
                'address' => $value['address'],
                'phone' => $value['phone'],
                'email' => $value['email'],
                'role_id' => '1',

            ]);
            $order = Order::Create([
                'user_id' => $user['id'],
                'note' => $value['textarea'],
                'status' => 'Đang xử lý',
            ]);
            foreach (Session::get('session_cart') as $cart_order => $valueorder) {
                $order_item = OrderItem::Create([
                    'order_id' => $order['id'],
                    'cake_detail_id' => $valueorder['id'],
                    'price' => $valueorder['price'],
                    'quantity' => $valueorder['quantity'],
                    'note' => '1',
                ]);
            }
            Session::flash('success1', 'Đã đặt hàng thành công, chúng tôi sẽ liên hệ lại trong thời gian sớm nhất');
            $request->session()->flush();
            return back()->with('success1', 'Đã đặt hàng thành công, chúng tôi sẽ liên hệ lại trong thời gian sớm nhất');
        }

        return back()->withInput();

    }
}
