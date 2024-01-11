<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Resources\Client\ClientResource;
use Illuminate\Http\Request;
use Exception;


class StoreController extends BaseController
{
    public function store(StoreRequest $request) {
            $data = $request->validated();
            $client = $this->service->store($data);

            return new ClientResource($client);
    }
}
