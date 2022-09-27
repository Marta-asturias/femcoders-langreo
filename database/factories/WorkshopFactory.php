<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkshopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
<<<<<<< HEAD
        return [
            'title' => $this->faker->name(),
            // 'image',
            'details'=>$this->faker->sentences(4,true),
            'age'=> $this->faker->name(),
            'duration'=> $this->faker->name(),
            'format'=> $this->faker->name(),
        ]; 
=======
        
            return [
                'title' => $this->faker->name(),
                // 'image',
                'details'=>$this->faker->sentences(4,true),
                'age'=> $this->faker->name(),
                'duration'=> $this->faker->name(),
                'format'=> $this->faker->name(),
            ]; 
        
>>>>>>> d56c8354194f1aad3fc68f6bd55bcb3fbe85ac6c
    }
}
