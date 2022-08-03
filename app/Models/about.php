<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class about
 * @package App\Models
 * @version July 26, 2022, 7:47 am UTC
 *
 * @property string $hero_title
 * @property string $hero_des
 * @property string $hero_des_small
 * @property string $hero_image
 * @property string $round_first
 * @property string $round_second
 * @property string $round_third
 * @property string $sec_card_desc_one
 * @property string $sec_card_desc_two
 * @property string $sec_card_desc_three
 * @property string $sec_card_desc_four
 * @property string $sec_title
 * @property string $sec_des
 * @property string $sec_des_small
 * @property string $sec_image
 * @property string $quate_title
 * @property string $quate_des
 * @property string $author_name
 */
class about extends Model
{
   

    use HasFactory;

    public $table = 'about';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'hero_title',
        'hero_des',
        'hero_des_small',
        'hero_image',
        'round_first',
        'round_second',
        'round_third',
        'sec_card_desc_one',
        'sec_card_desc_two',
        'sec_card_desc_three',
        'sec_card_desc_four',
        'sec_title',
        'sec_des',
        'sec_des_small',
        'sec_image',
        'quate_title',
        'quate_des',
        'author_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'hero_title' => 'string',
        'hero_des' => 'string',
        'hero_des_small' => 'string',
        'hero_image' => 'string',
        'round_first' => 'string',
        'round_second' => 'string',
        'round_third' => 'string',
        'sec_card_desc_one' => 'string',
        'sec_card_desc_two' => 'string',
        'sec_card_desc_three' => 'string',
        'sec_card_desc_four' => 'string',
        'sec_title' => 'string',
        'sec_des' => 'string',
        'sec_des_small' => 'string',
        'sec_image' => 'string',
        'quate_title' => 'string',
        'quate_des' => 'string',
        'author_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'hero_title' => 'required|string|max:255',
        'hero_des' => 'required|string',
        'hero_des_small' => 'required|string',
        'hero_image' => 'string|max:255',
        'round_first' => 'nullable|string|max:255',
        'round_second' => 'nullable|string|max:255',
        'round_third' => 'nullable|string|max:255',
        'sec_card_desc_one' => 'required|string',
        'sec_card_desc_two' => 'required|string',
        'sec_card_desc_three' => 'required|string',
        'sec_card_desc_four' => 'required|string',
        'sec_title' => 'required|string|max:255',
        'sec_des' => 'required|string',
        'sec_des_small' => 'required|string',
        'sec_image' => 'string|max:255',
        'quate_title' => 'string|max:255',
        'quate_des' => 'string',
        'author_name' => 'string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
