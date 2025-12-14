<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(),
            'category_id' => $this->faker->numberBetween(1, 2),
            'price' => $this->faker->randomFloat(2, 1000, 100000),
            'description' => $this->faker->text(),
            'img' => fake()->randomElement(
                ['https://images.unsplash.com/photo-1569718212165-3a8278d5f624',
                 'https://plus.unsplash.com/premium_photo-1668143358351-b20146dbcc02',
                 'https://images.unsplash.com/photo-1738681335816-8e0df0aa9824']

            ),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
