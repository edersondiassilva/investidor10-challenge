<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory()
            ->count(5)
            ->create()
            ->each(function ($category) {
                News::factory()
                    ->count(5)
                    ->create([
                        'category_id' => $category->id,
                    ]);
            });
    }
}