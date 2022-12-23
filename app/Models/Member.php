<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * Class Member
 * @package App\Models
 * @version September 1, 2022, 11:33 am UTC
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
class Member extends Authenticatable
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
        'avater',
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
        'avater' => 'string',
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
        'password' => 'required|string|max:255',
        'username' => 'nullable|string|max:255',
        'user_title' => 'required|string|max:255',
        'about' => 'required|string',
        'location' => 'nullable|string|max:255',
        'avater' => 'nullable|string|max:255',
        'status' => 'required|boolean',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    //many many

    public function likedBlogs(){
        return $this->belongsToMany('App\Models\Blog')->withTimestamps();
    }
}
