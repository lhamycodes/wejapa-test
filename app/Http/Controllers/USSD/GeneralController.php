<?php

namespace App\Http\Controllers\USSD;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    use UssdMenuTrait;

    public function ussdRequestHandler(Request $request)
    {
        $sessionId   = $request["sessionId"];
        $serviceCode = $request["serviceCode"];
        $phone       = $request["phoneNumber"];
        $text        = $request["text"];

        header('Content-type: text/plain');

        $this->handleUserInput($text, $phone);
    }

    public function handleUserInput($ussd_string, $phone)
    {
        $ussd_string_exploded = explode("*", $ussd_string);

        $level = count($ussd_string_exploded);

        if (empty($ussd_string) or $level == 0) {
            $this->userMenu();
        }

        switch ($level) {
            case ($level == 1 && !empty($ussd_string)):
                if ($ussd_string_exploded[0] == "1") {
                    // If user selected 1 send them to enter their tracking number
                    $this->ussd_proceed("Enter your tracking number");
                } else if ($ussd_string_exploded[0] == "2") {
                    // If user selected 2 send them to enter their secret code
                    $this->ussd_proceed("Enter your secret code");
                } else if ($ussd_string_exploded[0] == "3") {
                    // If user selected 3, end session
                    $this->ussd_stop("Thank you for reaching out to WeJapa-Test.");
                } else {
                    $this->ussd_stop("Invalid Input");
                }
                break;
            case 2:
                if ($ussd_string_exploded[0] == "1") {
                    // If user selected 1 and then 1 send them to the track order
                    $this->trackOrder($ussd_string_exploded[1]);
                } else if ($ussd_string_exploded[0] == "2") {
                    // If user selected 1 and then 2 send them to financial history
                    $this->financialHistory($phone, $ussd_string_exploded[1]);
                }
                break;
        }
    }

    public function trackOrder($order)
    {
        $order = Order::where('tracking_number', $order)->latest('id')->first();
        if ($order) {
            $this->ussd_stop("Location : $order->location");
        } else {
            $this->ussd_stop("Invalid tracking number");
        }
    }

    public function financialHistory($phone, $pin)
    {
        $user = User::with('stats')->first();
        if ($user->secret_code == $pin) {
            $out = "Financial History\n";
            $out .= "Month\tIncome\tExpenses";
            foreach ($user->stats as $key => $stat) {
                $out .= "$stat->month\t$stat->income\t$stat->expenses";
            }
            $this->ussd_stop($out);
        } else {
            $this->ussd_stop("Invalid Secret Code Entered");
        }
    }

    public function ussd_proceed($ussd_text)
    {
        echo "CON $ussd_text";
    }

    public function ussd_stop($ussd_text)
    {
        echo "END $ussd_text";
    }
}
