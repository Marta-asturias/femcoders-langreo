<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstname,
            'last_name' => $this->faker->lastName,
            'birth_date' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail,
            'whatsapp' => $this->faker->phoneNumber,
            'city' => $this->faker->city(),
            'how_did_you_meet_us' => $this->faker->sentence(4),
            'legals' => $this->faker->boolean(),
        ];
    }
}
