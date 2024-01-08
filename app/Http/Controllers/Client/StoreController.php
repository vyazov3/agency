<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreRequest;
use Illuminate\Http\Request;
use Exception;


class StoreController extends BaseController
{
    public function store(StoreRequest $request) {
        $data = $request->validated();
        try {
            $this->service->store($data);
            
            return response()->json($data);

        } catch (Exception $e) {
            return response()->json(['error' => 'Bad Request'], 400);
        }
    }
}
