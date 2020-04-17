<?php

namespace App\Http\Controllers\USSD;

trait UssdMenuTrait
{
    public function userMenu()
    {
        $start  = "Welcome to WeJapa-Test\n";
        $start .= "1. Track Order\n";
        $start .= "2. Financial History\n";
        $start .= "3. Exit";
        $this->ussd_proceed($start);
    }
}
