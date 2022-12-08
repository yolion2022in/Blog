<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cgy>
 */
class CgyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return ['subject'=>$this->faker->realText(15), 
            // 'subject'=>$this->faker->sentence, 
            'enabled'=>$this->faker->randomElement([true,false]), 
            'desc'=>$this->faker->image('public\storage\pic', 640, 480),
            'enabled_at'=> Carbon::createFromFormat('Y-m-d',$this->faker->date)
        ];
    }
}
