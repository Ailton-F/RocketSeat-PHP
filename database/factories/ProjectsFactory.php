<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>collect(fake()->words(4))->join(' '),
            'description'=>fake()->text(),
            'ends_at'=>fake()->dateTimeBetween('now', '+3 days'),
            'status'=>fake()->randomElement(['open', 'close']),
            'tech_stack'=>fake()->randomElements(['nodejs','react', 'javascript','vite','nextjs'], random_int(1, 5)),
            'created_by'=> User::factory()
        ];
    }
}
