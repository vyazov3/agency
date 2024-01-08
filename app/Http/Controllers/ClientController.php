<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\Trade;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }
    public function create() {
        $categories = Category::all();
        return view('client.create', compact('categories'));
    }
    public function store() {
        $data = request()->validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'middle_name' => 'string',
            'category_id' => '',
        ]);
        Client::create($data);
        return redirect()->route('client.index');
    }
    public function update(Client $client) {
        $data = request()->validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'middle_name' => 'string',
            'category_id' => '',
        ]);
        $client->update($data);
        return redirect()->route("client.show", $client->id);
    }
    // public function delete() {
    //     $client = Client::find(1);
    //     $client->delete();
    //     dump("del");
    // }
    public function destroy(Client $client) {
        $client->delete();
        return redirect()->route("client.index");
    }
    // public function first_create() {
        
    //     $client = Client::firstOrCreate([
    //         'first_name' => 'test10'
    //     ], [
    //         'first_name' => 'foc',
    //         'last_name' => 'foc',
    //         'type_id' => 2,
    //     ]);
    //     dump($client);
    //     dump('end');
    // }
    // public function update_create() {
    //     $client = Client::updateOrCreate([
    //         'first_name' => 'foc'
    //     ], [
    //         'first_name' => 'foc123',
    //         'last_name' => 'foc123',
    //         'type_id' => 2,
    //     ]);
    //     dump($client);
    //     dump('uoc');
    // }
    public function show(Client $client) {
        return view('client.show', compact('client'));
    }
    public function edit(Client $client) {
        $categories = Category::all();
        return view('client.edit', compact('client', 'categories'));
    }
}
