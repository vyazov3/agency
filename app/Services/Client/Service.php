<?php

namespace App\Services\Client;
use App\Models\Client;
class Service {
    public function store($data) {
        $client = Client::create($data);
        return $client;
    }
     public function update($client, $data) {
        $client->update($data);
        return $client->fresh();
     }
}