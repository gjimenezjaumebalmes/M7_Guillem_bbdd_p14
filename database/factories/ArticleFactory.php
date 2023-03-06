<?php

namespace Database\Factories;
use App\Models\Article;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Article::class;

    public function definition()
    {

        $faker = Faker::create();
        return [
            'nom' => $faker->unique()->text(50),
            'descripcio' => $faker->paragraph(3),
            'preu_compra' => $faker->randomFloat(2, 100, 100),
            'preu_venta' => $faker->randomFloat(2, 1100, 2000),
            'enviament_domicili' => $faker->randomElement(['S', 'N']),
            'stock' => $faker->numberBetween(0, 6000),
            'observacions' => $faker->optional()->paragraph(4)

        ];
    }
}


