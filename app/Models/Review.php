<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Review
 * @package App\Models
 * @version October 16, 2022, 7:22 pm UTC
 *
 * @property \App\Models\Course $course
 * @property integer $course_id
 * @property integer $rating
 * @property string $description
 * @property boolean $accept
 */
class Review extends Model
{
   

    use HasFactory;

    public $table = 'review';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_id',
        'rating',
        'description',
        'accept',
        'author'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_id' => 'integer',
        'rating' => 'integer',
        'description' => 'string',
        'accept' => 'boolean',
        'author' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required',
        'rating' => 'required|integer',
        'description' => 'required|string',
        'accept' => 'required|boolean',
        'author' => 'nullable|string',
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
