<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Quote
 * @package App\Models
 * @version July 27, 2022, 4:41 am UTC
 *
 * @property string $author_name
 * @property string $quate_des
 * @property string $author_title
 */
class Quote extends Model
{
   

    use HasFactory;

    public $table = 'quote';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'author_name',
        'quate_des',
        'author_title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_name' => 'string',
        'quate_des' => 'string',
        'author_title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'author_name' => 'required|string|max:255',
        'quate_des' => 'required|string',
        'author_title' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
