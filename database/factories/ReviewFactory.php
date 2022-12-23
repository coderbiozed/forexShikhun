<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Course;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $course = Course::first();
        if (!$course) {
            $course = Course::factory()->create();
        }

        return [
            'course_id' => $course->id,
            'rating' => $this->faker->numberBetween(0, 999),
            'description' => $this->faker->boolean,
            'accept' => $this->faker->boolean,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
