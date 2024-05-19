<?php

namespace Database\Factories;

use App\Models\Filiere;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    $filiere = Filiere::inRandomOrder()->first();

    if (!$filiere) {
        // Create a default filiere
        $filiere = Filiere::create([
            // Fill in necessary fields for a default filiere
            'name' => 'Default Filiere',
            // other required fields
        ]);
    }

    return [        
        'firstname' => fake()->firstName(),
        'lastname'  => fake()->lastName(),
        'email'     => fake()->unique()->safeEmail(),
        'mobile'    => fake()->unique()->phoneNumber(),
        'filiere_id'=> $filiere->id,
    ];
}

}
