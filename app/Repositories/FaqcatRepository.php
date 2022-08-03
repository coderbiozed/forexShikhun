<?php

namespace App\Repositories;

use App\Models\Faqcat;
use App\Repositories\BaseRepository;

/**
 * Class FaqcatRepository
 * @package App\Repositories
 * @version August 2, 2022, 4:31 am UTC
*/

class FaqcatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'creator_name',
        'category_name'
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
        return Faqcat::class;
    }
}
