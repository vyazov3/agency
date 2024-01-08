<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
use App\Models\Estate;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=EstateClient>
 */
class EstateClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "estate_id" => Estate::get()->random()->id,
            "client_id" => Client::get()->random()->id
        ];
    }
}
