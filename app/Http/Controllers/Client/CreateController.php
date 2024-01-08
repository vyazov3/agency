<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;


class CreateController extends BaseController
{
    public function create() {
        $categories = Category::all();
        return view('client.create', compact('categories'));
    }
}
