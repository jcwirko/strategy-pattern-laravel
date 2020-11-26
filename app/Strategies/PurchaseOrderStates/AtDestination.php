<?php

namespace App\Strategies\PurchaseOrderStates;

use App\Strategies\PurchaseOrderStatesInterface;

class AtDestination implements PurchaseOrderStatesInterface
{
    public function getFollowingStates(string $state)
    {
        return ['cancelled', 'certified'];
    }
}
