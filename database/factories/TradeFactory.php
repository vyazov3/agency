<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Trade>
 */
class TradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "status" => $this->faker->randomElement(["succ", "fail"]),
            "date" => $this->faker->date("Y-m-d"),
            "total" => $this->faker->randomFloat(2, 10000, 1000000)
        ];
    }
}
