<?php

namespace App\Http\Controllers\Estate;

use App\Http\Controllers\Controller;
use App\Models\Estate;
use Illuminate\Http\Request;


class IndexController extends BaseController
{
    public function index() {
        $estate = Estate::orderBy('id', 'DESC')
            ->where('is_sell', 1)
            ->with('type')
            ->get(['id', 'description', 'address', 'area', 'count_room', 'is_sell', 'price', 'type_id']);
        return response()->json($estate);
    }
}
