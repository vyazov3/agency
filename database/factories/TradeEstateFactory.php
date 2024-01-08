<?php

namespace Database\Factories;

use App\Models\Estate;
use App\Models\Trade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=TradeEstate>
 */
class TradeEstateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "trade_id"=> Trade::get()->random()->id,
            "estate_id"=> Estate::get()->random()->id,
        ];
    }
}
