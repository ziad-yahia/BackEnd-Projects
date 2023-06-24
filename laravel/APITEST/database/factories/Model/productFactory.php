<?php

namespace Database\Factories\Model;

use faker\Generator as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\model\product>
 */
class productFactory extends Factory
{
   
    public function definition()
    {
        return [
            'name'=>fake()->name,
            'detail'=>fake()->paragraph(3,true),
            'price'=>fake()->numberBetween(100,1000),
            'stock'=>fake()->randomDigit(),
            'discount'=>fake()->numberBetween(2,30),
        ];
    }
}
