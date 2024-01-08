<?php

namespace App\Http\Controllers\Estate;

use App\Http\Controllers\Controller;
use App\Models\Estate;
use Illuminate\Http\Request;


class EstateTradeController extends BaseController
{
    public function trade(Estate $estate) {

        $trades = Estate::findOrFail($estate->id)->trades;
        return response()->json($trades);
    
    }
}   
