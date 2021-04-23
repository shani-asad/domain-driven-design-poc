<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $clinic_IDs = DB::table('clinics')->pluck('id');
        return [
            'name' => $this->faker->randomElement(['Rapid Antibodi', 'Rapid Antigen']),
            'clinic_id' => $this->faker->randomElement($clinic_IDs)
        ];
    }
}
