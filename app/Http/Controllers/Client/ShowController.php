<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\Client;
use Illuminate\Http\Request;


class ShowController extends BaseController
{
    public function show(Client $client) {
        return view('client.show', compact('client'));
    }
}
