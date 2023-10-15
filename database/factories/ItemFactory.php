<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{

    protected const ITEM_IMAGES = [
        "https://images.unsplash.com/photo-1674296115670-8f0e92b1fddb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
        "https://images.unsplash.com/photo-1605784401368-5af1d9d6c4dc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80",
        "https://images.unsplash.com/photo-1620365602462-40d8f2cdd84c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG1hY2Jvb2t8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60",
        "https://images.unsplash.com/photo-1648212794644-fe396c4c30e3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHBpeGVsJTIwNnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=400&q=60",
        "https://images.unsplash.com/photo-1657797066015-311cb505b009?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8cGl4ZWwlMjA2fGVufDB8fDB8fHww&auto=format&fit=crop&w=400&q=60"

    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word,
            'description' => fake()->paragraph,
            'location' => fake()->city,
            'ends_at' =>fake()->dateTimeBetween('-15 days', '+15 days'),
            'starting_bid' => fake()->numberBetween(100, 1000),
            'image_path' => self::ITEM_IMAGES[array_rand(self::ITEM_IMAGES)],
            'condition' => fake()->randomElement(Item::$conditions)
        ];
    }
}
