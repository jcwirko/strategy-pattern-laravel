<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('get-following-states', 'PurchaseOrderController@getFollowingStates');
