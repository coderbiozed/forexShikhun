<?php

namespace Database\Factories;

use App\Models\about;
use Illuminate\Database\Eloquent\Factories\Factory;

class aboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = about::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hero_title' => $this->faker->word,
        'hero_des' => $this->faker->text,
        'hero_des_small' => $this->faker->text,
        'hero_image' => $this->faker->word,
        'round_first' => $this->faker->word,
        'round_second' => $this->faker->word,
        'round_third' => $this->faker->word,
        'sec_card_desc_one' => $this->faker->text,
        'sec_card_desc_two' => $this->faker->text,
        'sec_card_desc_three' => $this->faker->text,
        'sec_card_desc_four' => $this->faker->text,
        'sec_title' => $this->faker->word,
        'sec_des' => $this->faker->text,
        'sec_des_small' => $this->faker->text,
        'sec_image' => $this->faker->word,
        'quate_title' => $this->faker->word,
        'quate_des' => $this->faker->text,
        'author_name' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
