<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Alluser
 * @package App\Models
 * @version September 5, 2022, 5:03 am UTC
 *
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $username
 * @property string $user_title
 * @property string $about
 * @property string $location
 * @property string $image
 * @property boolean $status
 * @property string $remember_token
 */
class Alluser extends Model
{
   

    use HasFactory;

    public $table = 'member';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'username',
        'user_title',
        'about',
        'location', 
        'linkedin',
        'twitter',
        'instagram',
        'facebook',
        'image',
        'status',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'username' => 'string',
        'user_title' => 'string',
        'about' => 'string',
        'location' => 'string',
        'linkedin' => 'string',
        'twitter' => 'string',
        'instagram' => 'string',
        'facebook' => 'string',
        'image' => 'string',
        'status' => 'boolean',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'nullable|string|max:255',
        'username' => 'nullable|string|max:255',
        'user_title' => 'nullable|string|max:255',
        'about' => 'nullable|string',
        'location' => 'nullable|string|max:255',
        'linkedin' => 'nullable|string|max:255',
        'twitter' => 'nullable|string|max:255',
        'instagram' => 'nullable|string|max:255',
        'facebook' => 'nullable|string|max:255',
        'image' => 'nullable|string|max:255',
        'status' => 'required|boolean',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
