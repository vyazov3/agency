<?php

namespace App\Services\Trade;
use App\Models\ClientEstateTrade;
use App\Models\Trade;
class Service {
    public function store($data) {
        Trade::create($data);
    }
    public function clientEstateStore($data) {
        ClientEstateTrade::create($data);
    }
}