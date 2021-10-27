<?php

namespace Database\Factories;

use App\Models\Medicine;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medicine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sub_classification_id' => rand(1,5),
            'active_principle' => $this->faker->text(120),
            'pharmaceutical_form' => $this->faker->text(120),
            'indications' => $this->faker->text(120),
            'route_dosage' => $this->faker->sentence(),
            'management_rules' => $this->faker->text(120),
            'observations' => $this->faker->text(120),
        ];
    }
}
