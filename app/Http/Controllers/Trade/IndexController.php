<?php

namespace App\Http\Controllers\Trade;

use App\Http\Controllers\Controller;
use App\Models\Trade;
use Illuminate\Http\Request;


class IndexController extends BaseController
{
    public function index() {
        $trades = Trade::orderBy('id', 'DESC')->get(['id', 'status', 'date', 'total', 'created_at']); // ->estates -   ?????
        return response()->json($trades);
    }
}
