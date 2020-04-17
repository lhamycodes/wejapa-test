<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Order;
use App\Transformers\Json;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function track($order, $info)
    {
        if ($info == "history") {
            $order = Order::where('tracking_number', $order)->get();
        } else {
            $order = Order::where('tracking_number', $order)->latest('id')->first();
        }
        if ($order) {
            return response()->json(Json::response(200, ['order' => $order], "Order $info retrieved"), 200);
        } else {
            return response()->json(Json::response(400, [], "Package not found"), 400);
        }
    }


}
