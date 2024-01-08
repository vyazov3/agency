<?php

namespace App\Http\Controllers\Trade;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trade\ClientEstateStoreRequest;
use Illuminate\Http\Request;
use Exception;


class StoreClientTradeController extends BaseController
{
    public function store(ClientEstateStoreRequest $request) {
        $data = $request->validated();
        try {
            $this->service->clientEstateStore($data);
            return response()->json($data);
           } catch (Exception) {
               return response()->json(['error' => 'bad request', 400]);
        }
    }
}
