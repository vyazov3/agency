<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Client;
use App\Models\ClientEstateTrade;
use App\Models\Estate;
use App\Models\EstateClient;
use App\Models\Role;
use App\Models\Trade;
use App\Models\TradeEstate;
use App\Models\Type;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            "title" => "Физическое лицо",
        ])->create([
            "title" => "Юридическое лицо",
        ]);
        Role::create([
            "title"=> "Продавец",
        ])->create([
            "title"=> "Покупатель",
        ]);
        Type::create([
            "title"=> "Дом",
        ])->create([
            "title"=> "Земля",
        ]);
        Client::factory(100)->create();
        Trade::factory(100)->create();
        Estate::factory(20)->create();
        ClientEstateTrade::factory(100)->create();
        // TradeEstate::factory(100)->create();
        EstateClient::factory(100)->create();
        // Client::factory(100)
        // ->has(Estate::factory()->count(3))
        // ->create();
        // $estate = Estate::factory(10)->state([
        //     'owner_id' => Client::get()->random()->id,
        // ])->make();

        // \App\Models\User::factory(10)->create();

        // $estates = Estate::factory(5)->make();
        // foreach ($estates as $estate) {
        //     estate = Estate::factory()->create([
        //         "owner_id" => 10,
        //     ]);
        // }

        // foreach ($estates as $estate) {
        //     $owner_id = Client::get()->random()->id;
        //     dump($owner_id);
        // }
        // $estates->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
