<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Type;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Estate>
 */
class EstateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "type_id" => Type::get()->random()->id,
            "description" => $this->faker->sentence,
            "address" => $this->faker->address,
            "area" => $this->faker->randomFloat(1, 1, 100),
            "count_room" => $this->faker->randomNumber(1,100),
            "is_sell" => $this->faker->boolean(),
            "price" => $this->faker->randomFloat(2, 100, 1000000),
        ];
    }
}
