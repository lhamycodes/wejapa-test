<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Order;
use App\Transformers\Json;
use App\User;
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

    public function stats(Request $request)
    {
        $rules = [
            'email' => 'required|exists:users,email',
            'secret' => 'required',
        ];

        $validator = $this->validate($request, $rules);

        if (!$validator) {
            return response()->json(Json::response(422, ['error' => $validator->errors()], "Validation error"), 422);
        } else {
            $user = User::where([
                ['email', '=', $request->email],
                ['secret_code', '=', $request->secret],
            ])->with('stats')->first();

            if ($user) {
                return response()->json(Json::response(200, ['statistics' => $user->stats], "Financial history retrieved"), 200);
            } else {
                return response()->json(Json::response(401, [], "Email / Secret code mismatch"), 401);
            }
        }
    }
}
