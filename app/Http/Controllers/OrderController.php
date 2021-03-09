<?php

namespace App\Http\Controllers;

use App\Order;
use App\Property;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::latest()->paginate(10);

        $action = $request->input('action');

        if ($action && $action === 'print') {
            $orders = Order::latest()->get();

            return view('admin.orders-print', [
                'orders' => $orders
            ]);
        }
        return view('admin.orders', [
            'orders' => $orders
        ]);
    }

    public function order(Property $property)
    {
        $userId = auth()->user()->id;

        $order = Order::where('property_id', $property->id)->where('user_id', $userId)->first();

        if ($order) {
            flash('You have already ordered this property')->error();

            return redirect()->back();
        }


        $order = new Order();
        $order->user_id = $userId;

        $property->orders()->save($order);

        flash('Your order has been recieved');

        return redirect()->back();
    }
}
