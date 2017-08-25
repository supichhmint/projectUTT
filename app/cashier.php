<?php


namespace App\Services;

require_once '/Applications/MAMP/htdocs/uptotraineiei/app/omise/lib/Omise.php';

class Cashier
{

    public static function charge(Array $data)
    {
        return \OmiseCharge::create($data);
    }

}

}