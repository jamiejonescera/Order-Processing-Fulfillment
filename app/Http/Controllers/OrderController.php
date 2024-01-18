<?php

namespace App\Http\Controllers;

class OrderController extends Controller
{
    public function showOrderStatus()
    {
        $orderStatus = session('order_status', []);

        return view('order-status', compact('orderStatus'));
    }

    public function updateOrderStatus($status)
    {
        $orderStatus = session('order_status', []);

        $orderStatus[] = $status;

        session(['order_status' => $orderStatus]);

        return redirect()->route('order.status');
    }
}
