<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citizen>
 */
class CitizenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $male = $this->faker->numberBetween(0, 1);
        $firstName = $male ? $this->faker->firstNameMale() : $this->faker->firstNameFemale();
        $gender = $male ? "male" : "female";
        return [
            // "register_number" => $this->faker->ssn(),
            "register_number" => $this->faker->regexify('[A-Z]{2}[0-9]{8}'),
            "last_name" => $this->faker->lastName(),
            "first_name" => $firstName,
            "gender" => $gender,
            "dob" => $this->faker->date("Y-m-d"),
            "family" => null,
        ];
    }
}
