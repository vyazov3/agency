<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'http://127.0.0.1:8000/api/v1/clients/store',
        'http://127.0.0.1:8000/api/v1/trades/store',
        'http://127.0.0.1:8000/api/v1/trades/clients-estates/store'
    ];
}
