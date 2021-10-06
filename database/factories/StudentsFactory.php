<?php

namespace Database\Factories;

use App\Models\students;
use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

class StudentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = students::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'class' => $this->faker->sentence(),
            'roll' => \Illuminate\Support\Str::random(10),
        ];
    }
}
