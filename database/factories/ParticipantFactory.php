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
                'first_name' => $this->faker->name(),
                "last_name"=> $this->faker->name(),
                "birth_date"=> $this->faker->date(),
                'email'=> $this->faker->name(),
                "whatsapp"=> $this->faker->name(),
                "city"=> $this->faker->name(),
                "how_did_you_meet_us"=> $this->faker->name(),
                'legals'=>$this->faker->boolean()
                
            ]; 
        
    }
}
