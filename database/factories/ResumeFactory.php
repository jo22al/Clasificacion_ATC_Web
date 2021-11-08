<?php

namespace Database\Factories;

use App\Models\Resume;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResumeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resume::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'profession' => $this->faker->sentence(),
            'personal_profile' => $this->faker->text(150),
            'laboral_experience' => $this->faker->text(150),
            'academic_history' => $this->faker->text(150),
            'email' => $this->faker->email(),
            'telephone' => '77809654',
        ];
    }
}
