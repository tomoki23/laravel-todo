<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $createUserId = User::inRandomOrder()->pluck('id')->first();
        $createCategoryId = Category::inRandomOrder()->pluck('id')->first();
        return [
            'user_id' => $createUserId,
            'title' => $this->faker->title(),
            'body' => $this->faker->realText(20),
            'category_id' => $createCategoryId,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
