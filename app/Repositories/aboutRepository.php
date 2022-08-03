<?php

namespace App\Repositories;

use App\Models\about;
use App\Repositories\BaseRepository;

/**
 * Class aboutRepository
 * @package App\Repositories
 * @version July 26, 2022, 7:47 am UTC
*/

class aboutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return about::class;
    }
}
