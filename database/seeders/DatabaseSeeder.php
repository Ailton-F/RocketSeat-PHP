<?php

namespace Database\Seeders;

use App\Models\Projects;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
        ->count(200)
        ->create();

        User::query()->inRandomOrder()->limit(20)->get()
            ->each(fn(User $u) => Projects::factory()->create(['created_by'=> $u->id]));
    }
}
