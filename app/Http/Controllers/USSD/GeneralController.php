<?php

namespace App\Http\Controllers\USSD;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function ussdRequestHandler(Request $request)
    {
        $sessionId   = $request["sessionId"];
        $serviceCode = $request["serviceCode"];
        $phone       = $request["phoneNumber"];
        $text        = $request["text"];

        header('Content-type: text/plain');

        if (User::where('phone', $phone)->exists()) {
            // Function to handle already registered users
            $this->handleReturnUser($text, $phone);
        } else {
            // Function to handle new users
            $this->handleNewUser($text, $phone);
        }
    }
    
    public function track($order)
    {
        $order = Order::where('tracking_number', $order)->latest('id')->first();
        if ($order) { } else { }
    }
}
