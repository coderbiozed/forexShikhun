<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'course_title' => $this->faker->word, 
         'course_slug' => $this->faker->word,
        'lesson_no' => $this->faker->word,
        'rating' => $this->faker->word,
        'image' => $this->faker->word,
        'course_des' => $this->faker->text,
        'who_learn' => $this->faker->text,
        'what_learn' => $this->faker->text,
        'lesson_title' => $this->faker->word,
        'lesson_slug' => $this->faker->word,
        'lesson_des' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
