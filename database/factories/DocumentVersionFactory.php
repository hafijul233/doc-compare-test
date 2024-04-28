<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DocumentVersion>
 */
class DocumentVersionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'body_content' => [
                'introduction' => fake()->randomHtml,
                'facts' => fake()->randomHtml,
                'summary' => fake()->randomHtml
            ],
            'tags_content' => fake()->randomHtml
        ];
    }
}
