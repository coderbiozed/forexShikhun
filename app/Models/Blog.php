<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Blog
 * @package App\Models
 * @version June 23, 2022, 10:59 am UTC
 *
 * @property string $author
 * @property string $title
 * @property string $description
 * @property string $image
 */
class Blog extends Model
{
    

    use HasFactory;
    

    public $table = 'table_blog';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'author',
        'title',
        'description',
        'image',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author' => 'string',
        'title' => 'string',
        'description' => 'string',
        'image' => 'string',
        'slug'=> 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'author' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'string|max:255',
        'slug'=>'string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

   
   
}
