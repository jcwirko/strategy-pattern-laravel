<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function getFollowingStates(Request $request)
    {
        $state = $request->input('state');

        if($state == 'in_transit') {
            return ['cancelled'];
        }

        if($state == 'at_destination') {
            return ['cancelled'];
        }

        if($state == 'certified') {
            return ['cancelled', 'billed', 'payed'];
        }

        if($state == 'billed') {
            return ['certified', 'payed'];
        }

        if($state == 'payed') {
            return ['certified', 'billed'];
        }

        return [];
    }
}
