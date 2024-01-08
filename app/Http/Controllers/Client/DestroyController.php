<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Client;


class DestroyController extends BaseController
{
    public function destroy(Client $client) {
        $client->delete();
        return redirect()->route("client.index");
    }
}
