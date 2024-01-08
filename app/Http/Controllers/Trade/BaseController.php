<?php

namespace App\Http\Controllers\Trade;
use App\Http\Controllers\Controller;
use App\Services\Trade\Service;

class BaseController extends Controller {
    public $service;
    public function __construct(Service $service){
        $this->service = $service;
    }
}