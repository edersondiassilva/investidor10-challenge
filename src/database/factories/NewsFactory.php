<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    public function definition(): array
    {
        $title = 'Notícia ' . Str::upper(Str::random(8));

        return [
            'category_id' => Category::factory(),
            'title' => $title,
            'slug' => Str::slug($title . '-' . Str::random(4)),
            'content' => 'Conteúdo gerado automaticamente para testes do desafio técnico.',
            'published_at' => now(),
        ];
    }
}