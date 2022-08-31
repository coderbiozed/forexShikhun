<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Course
 * @package App\Models
 * @version July 4, 2022, 6:03 am UTC
 *
 * @property string $course_slug
 * @property string $lesson_no
 * @property string $rating
 * @property string $image
 * @property string $course_des
 * @property string $who_learn
 * @property string $what_learn
 * @property string $lesson_title
 * @property string $lesson_slug
 * @property string $lesson_des
 */
class Course extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'course';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_title',
        'course_slug',
        'lesson_no',
        'rating',
        'image',
        'course_des',
        'who_learn',
        'what_learn',
        'lesson_title',
        'lesson_slug',
        'lesson_des'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_title'=>'string',
        'course_slug' => 'string',
        'lesson_no' => 'string',
        'rating' => 'string',
        'image' => 'string',
        'course_des' => 'string',
        'who_learn' => 'string',
        'what_learn' => 'string',
        'lesson_title' => 'string',
        'lesson_slug' => 'string',
        'lesson_des' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_title'=> 'required|string|max:255',
        'course_slug' => 'required|string|max:255',
        'rating' => 'required|string|max:255',
        'image' => 'string|max:255',
        'course_des' => 'nullable|string',
        'who_learn' => 'nullable|string',
        'what_learn' => 'nullable|string',
        'lesson_title' => 'string|max:255',
        'lesson_slug' => 'string|max:255',
        'lesson_des' => 'string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
