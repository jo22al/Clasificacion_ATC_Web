<?php

namespace Database\Factories;

use App\Models\SubClassification;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubClassificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubClassification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'classification_id' => rand(1,5),
            'code' => $this->faker->word(),
            'name' => $this->faker->word()
        ];
    }
}
