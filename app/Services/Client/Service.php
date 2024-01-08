<?php

namespace App\Services\Client;
use App\Models\Client;
class Service {
    public function store($data) {
        Client::create($data);
    }
     public function update() {

     }
}