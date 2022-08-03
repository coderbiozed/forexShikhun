<?php

namespace Database\Factories;

use App\Models\Faqcat;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaqcatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faqcat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'creator_name' => $this->faker->word,
        'category_name' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
