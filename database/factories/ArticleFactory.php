<?php

namespace Database\Factories;

use Carbon\Carbon;  //記得 use Carbon\Carbon
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //realText min=10 max=? 超出上下限會報錯 InvalidArgumentException maxNbChars must be at least 10
            'subject'=>$this->faker->realText(10),  //name, address,
            'content'=>$this->faker->realText(15),
            'cgy_id'=>rand(1,10),
            'enabled_at'=>Carbon::createFromFormat('Y-m-d', $this->faker->date)->now()->addDays(rand(0,20)),
            'sort'=>$this->faker->numberBetween(0,20),
            'pic'=>$this->faker->imageUrl(1024,768,'picture'),
            'enabled'=>$this->faker->randomElement([true,false]), 
        ];
    }
}
