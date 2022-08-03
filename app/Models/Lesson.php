<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Lesson
 * @package App\Models
 * @version July 7, 2022, 7:52 am UTC
 *
 * @property \App\Models\Course $course
 * @property integer $course_id
 * @property string $lesson_no
 * @property string $title
 * @property string $slug
 * @property string $short_des
 * @property string $description
 * @property string $image
 */
class Lesson extends Model
{
    

    use HasFactory;

    public $table = 'lessons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_id',
        'lesson_no',
        'title',
        'slug',
        'short_des',
        'description',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_id' => 'integer',
        'lesson_no' => 'string',
        'title' => 'string',
        'slug' => 'string',
        'short_des' => 'string',
        'description' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required',
        'lesson_no' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'short_des' => 'nullable|string',
        'description' => 'required|string',
        'image' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
    }
}
