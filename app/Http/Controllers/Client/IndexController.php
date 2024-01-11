<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Filters\ClientFilter;
use App\Http\Requests\Client\FilterRequest;
use App\Http\Resources\Client\ClientResource;
use Illuminate\Http\Request;
use App\Models\Client;


class IndexController extends BaseController
{
    public function index(FilterRequest $request) {
        $clients = Client::orderBy('id', 'DESC')
        ->with('category')
        ->get();
        return ClientResource::collection($clients);
    }
}
