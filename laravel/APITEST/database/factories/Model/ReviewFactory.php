<?php

namespace Database\Factories\Model;

use App\Models\model\product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' =>function()
            {
                return product::all()->random();
            },
            'customer'=>fake()->name(),
            'review'=>fake()->paragraph(3,true),
            'star'=>fake()->numberBetween(0,5)
        ];
    }
}
