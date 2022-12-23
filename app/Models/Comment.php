<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Comment
 * @package App\Models
 * @version September 1, 2022, 10:41 am UTC
 *
 * @property string $name
 * @property string $comment
 * @property string $user_id
 * @property string $post_id
 */
class Comment extends Model
{
   

    use HasFactory;

    public $table = 'comments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'comment',
        'user_id',
        'post_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'comment' => 'string',
        'user_id' => 'string',
        'post_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:255',
        'comment' => 'nullable|string',
        'user_id' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'post_id' => 'required|string|max:255'
    ];

    
}
