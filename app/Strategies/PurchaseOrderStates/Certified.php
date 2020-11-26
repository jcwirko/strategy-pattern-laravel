<?php

namespace App\Strategies\PurchaseOrderStates;

use App\Strategies\PurchaseOrderStatesInterface;

class Certified implements PurchaseOrderStatesInterface
{
    public function getFollowingStates(string $state)
    {
        return ['cancelled', 'billed', 'payed'];
    }
}
