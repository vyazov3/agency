<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Http\Requests\Client\UpdateRequest;
use Illuminate\Http\Request;



class UpdateController extends BaseController
{
    public function update(UpdateRequest $request, Client $client) {
        $data = $request->validated();
        $this->service->update($client, $data);
        return redirect()->route("client.show", $client->id);
    }
}
