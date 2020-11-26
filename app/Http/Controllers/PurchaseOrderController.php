<?php

namespace App\Http\Controllers;

use App\Values\PurchaseOrderStatesValues;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function getFollowingStates(Request $request)
    {
        $state = $request->input('state');

        $strategy = PurchaseOrderStatesValues::STRATEGY[$state];

        $strategy->getFollowingStates();

        return [];
    }
}

