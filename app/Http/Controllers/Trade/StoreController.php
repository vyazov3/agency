<?php

namespace App\Http\Controllers\Trade;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trade\StoreRequest;
use App\Models\Trade;
use Exception;
use Illuminate\Http\Request;


class StoreController extends BaseController
{
    public function store(StoreRequest $request) {
        $data = $request->validated();

        try {
            $this->service->store($data);
            return response()->json($data);

        } catch (Exception $e) {
            return response()->json(['error' => 'bad request', 400]);
        }

    }
}
