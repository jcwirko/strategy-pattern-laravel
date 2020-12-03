<?php

namespace App\Http\Controllers;

use App\Values\PurchaseOrderStatusValues;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function getFollowingStates(Request $request)
    {
        $state = $request->input('state');

        $strategyClass = PurchaseOrderStatusValues::STRATEGY[$state];
        
        return (new $strategyClass)->getFollowingStates();
    }
}

