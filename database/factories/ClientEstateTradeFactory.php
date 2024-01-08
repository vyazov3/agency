<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Estate;
use App\Models\Role;
use App\Models\Trade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=ClientEstateTrade>
 */
class ClientEstateTradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => Client::get()->random()->id,
            'trade_id' => Trade::get()->random()->id,
            'role_id' => Role::get()->random()->id,
            'estate_id' => Estate::get()->random()->id,
        ];
    }
}
