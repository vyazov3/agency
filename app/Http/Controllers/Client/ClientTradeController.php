<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\Client;
use Illuminate\Http\Request;


class ClientTradeController extends BaseController
{
    public function trade(Client $client) {

        $trades = Client::findOrFail($client->id)->trades;
        return response()->json($trades);
        
    }
}
