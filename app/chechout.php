<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Services\Cashier;

class Checkout extends Authenticatable
{

     /**
     * Charge the customer.
     *
     * @param  integer  $amount
     * @param  string  $card
     * @return OmiseChargeObject
     */
    public function charge($amount, $card)
    {
        return Cashier::charge([
            'amount' => $amount,
            'currency' => 'thb',
            'customer' => $this->customerToken,
            'card' => $card,
        ]);
    }

}