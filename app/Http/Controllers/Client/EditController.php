<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

use App\Models\Category;


class EditController extends BaseController
{
    public function edit(Client $client) {
        $categories = Category::all();
        return view('client.edit', compact('client', 'categories'));
    }
}
