<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Filters\ClientFilter;
use App\Http\Requests\Client\FilterRequest;
use Illuminate\Http\Request;
use App\Models\Client;


class IndexController extends BaseController
{
    public function index(FilterRequest $request) {
        $clients = Client::orderBy('id', 'DESC')
        ->with('category')
        ->get();
        // $client = Client::find(12);
        // return $clients;
        // $filter = app()->make(ClientFilter::class, ['queryParams' => array_filter($data)]);
        // $query = Client::query();
        // if (isset($data['category_id'])){
        //     $query->where('category_id', $data['category_id']);
        // }
        // $clients = Client::filter($filter);
        // dd($clients);
        // $clients = Client::where('category_id', $data['category_id'])->get();
        return response()->json($clients);
    }
}
