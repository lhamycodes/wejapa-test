<?php

namespace App\Http\Controllers\USSD;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function track($order)
    {
        $order = Order::where('tracking_number', $order)->latest('id')->first();
        if ($order) { } else { }
    }
}
