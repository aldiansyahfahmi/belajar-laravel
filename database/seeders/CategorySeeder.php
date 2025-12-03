<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming'
        ]);

        Category::factory()->create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::factory()->create([
            'name' => 'Artificial Intelegence',
            'slug' => 'artificial-intelegance'
        ]);
    }
}
